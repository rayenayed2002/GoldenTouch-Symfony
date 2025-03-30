package GoldenTouch.piDev.Services;

import GoldenTouch.piDev.Entities.CategorieEvent;
import GoldenTouch.piDev.Entities.DemandePack;
import GoldenTouch.piDev.Entities.Pack2;
import GoldenTouch.piDev.Entities.User;
import GoldenTouch.piDev.Interfaces.IPack2Service;
import GoldenTouch.piDev.Tools.Myconnection;
import javafx.scene.control.Alert;

import java.sql.*;
import java.sql.Date;
import java.text.SimpleDateFormat;
import java.util.*;

public class PackService2 implements IPack2Service {
    private MailService mailService = new MailService();
    private final DemandePackService demandePackService = new DemandePackService();
    private ServiceUser serviceUser = new ServiceUser();




    @Override
    public void addEntity(Pack2 pack) {
        System.out.println("Adding pack with event inheritance...");

        // Check if pack is unique before inserting
        if (!isPackUnique(pack)) {
            System.out.println("❌ A pack with the same attributes already exists!");
            return; // Stop execution if duplicate is found
        }

        String queryEvent = "INSERT INTO event (nom, user_id, categorie, photo, date) VALUES (?, ?, ?, ?, ?)";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pstEvent = cnx.prepareStatement(queryEvent, Statement.RETURN_GENERATED_KEYS)) {

            pstEvent.setString(1, pack.getNom());
            pstEvent.setInt(2, pack.getUserId());
            pstEvent.setString(3, pack.getCategorie().name());
            pstEvent.setString(4, pack.getPhoto());
            if (pack.getDate() != null && !pack.getDate().isEmpty()) {
                pstEvent.setDate(5, Date.valueOf(pack.getDate()));
            } else {
                pstEvent.setNull(5, java.sql.Types.DATE);
            }
            pstEvent.executeUpdate();
            System.out.println("✅ Event added successfully!");

            ResultSet generatedKeys = pstEvent.getGeneratedKeys();
            int eventId = -1;
            if (generatedKeys.next()) {
                eventId = generatedKeys.getInt(1);
            }

            if (eventId == -1) {
                throw new SQLException("Failed to retrieve event ID.");
            }

            String queryPack = "INSERT INTO pack (id, description, admin_id, event_id, prix, capacité, durée, end_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            try (PreparedStatement pstPack = cnx.prepareStatement(queryPack)) {
                pstPack.setInt(1, eventId);
                pstPack.setString(2, pack.getDescription());
                pstPack.setInt(3, pack.getAdminId());
                pstPack.setInt(4, eventId); // eventId and pack.eventId are same
                pstPack.setDouble(5, pack.getPrice());
                pstPack.setInt(6, pack.getCapacity());
                pstPack.setInt(7, pack.getDuree());
                pstPack.setDate(8, pack.getEndDate());

                pstPack.executeUpdate();
                System.out.println("✅ Pack added successfully!");

                // Send email notification to all users
                sendMailToPackUsersForAddition(pack);            }
        } catch (SQLException e) {
            System.out.println("SQL Error (addEntity): " + e.getMessage());
            e.printStackTrace();
        }
    }

    @Override
    public void updateEntity(Pack2 pack) {
        String eventQuery = "UPDATE event SET nom = ?, user_id = ?, categorie = ?, photo = ?, date = ? WHERE id = ?";
        String packQuery = "UPDATE pack SET description=?, admin_id=?, prix=?, capacité=?, durée=?, end_date=? WHERE id=?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement eventPst = cnx.prepareStatement(eventQuery);
             PreparedStatement packPst = cnx.prepareStatement(packQuery)) {

            // Start transaction
            cnx.setAutoCommit(false);

            // Update event table
            eventPst.setString(1, pack.getNom());
            eventPst.setInt(2, pack.getUserId());
            eventPst.setString(3, pack.getCategorie().name());
            eventPst.setString(4, pack.getPhoto());
            eventPst.setString(5, pack.getDate());
            eventPst.setInt(6, pack.getId());

            int eventUpdated = eventPst.executeUpdate();

            // Update pack table
            packPst.setString(1, pack.getDescription());
            packPst.setInt(2, pack.getAdminId());
            packPst.setDouble(3, pack.getPrice());
            packPst.setInt(4, pack.getCapacity());
            packPst.setInt(5, pack.getDuree());
            packPst.setDate(6, pack.getEndDate());
            packPst.setInt(7, pack.getId());

            int packUpdated = packPst.executeUpdate();

            // Commit if both updates are successful
            if (eventUpdated > 0 && packUpdated > 0) {
                cnx.commit();
                System.out.println("✅ Pack2 updated successfully!");

                // Check if price or date has changed
                if (priceOrDateChanged(pack)) {
                    sendMailToPackUsersForUpdate(pack);
                }
            } else {
                cnx.rollback();
                System.out.println("⚠️ Update failed: Event or Pack2 record not found.");
            }

        } catch (SQLException e) {
            System.out.println("SQL Error (updateEntity): " + e.getMessage());
            e.printStackTrace();
        } finally {
            try (Connection cnx = Myconnection.getInstance().getCnx()) {
                cnx.setAutoCommit(true); // Reset auto-commit to true
            } catch (SQLException e) {
                System.out.println("Error resetting auto-commit: " + e.getMessage());
            }
        }
    }


    private void sendMailToPackUsersForAddition(Pack2 pack) {
        // Récupérer les adresses emails des utilisateurs concernés
        List<String> userEmails = getUserEmails();
        if (userEmails.isEmpty()) {
            showAlert(Alert.AlertType.INFORMATION, "Aucun utilisateur", "Aucun utilisateur n'est associé à ce pack.");
            return;
        }

        // Préparer le contenu du mail avec HTML
        String subject = "Nouveau Pack Ajouté : " + pack.getNom();
        String body = "<html>"
                + "<head><style>"
                + "body { font-family: Arial, sans-serif; color: #333; padding: 20px; background-color: #f9f9f9; }"
                + "h1 { color: #2C3E50; }"
                + "p { line-height: 1.6; }"
                + "</style></head>"
                + "<body>"
                + "<h1>Bonjour {{name}},</h1>"
                + "<p>Un nouveau pack a été ajouté ! Voici les détails :</p>"
                + "<table border='0' cellpadding='10' cellspacing='0' style='width: 100%; background-color: white;'>"
                + "<tr><td><strong>Nom du pack :</strong></td><td>" + pack.getNom() + "</td></tr>"
                + "<tr><td><strong>Description :</strong></td><td>" + pack.getDescription() + "</td></tr>"
                + "<tr><td><strong>Prix :</strong></td><td>$" + pack.getPrice() + "</td></tr>"
                + "<tr><td><strong>Catégorie :</strong></td><td>" + pack.getCategorie().name() + "</td></tr>"
                + "<tr><td><strong>Date de début :</strong></td><td>" + pack.getDate() + "</td></tr>"
                + "<tr><td><strong>Date de fin :</strong></td><td>" + pack.getEndDate() + "</td></tr>"
                + "</table>"
                + "<p>Explorez ce nouveau pack dès maintenant.</p>"
                + "<p><a href='http://www.yourwebsite.com' class='cta'>Voir plus de détails</a></p>"
                + "<img src='cid:logo_image' alt='GoldenTouch Logo' style='max-width: 200px; height: auto;'>"
                + "<p>Cordialement, <br>L'équipe GoldenTouch</p>"
                + "</body>"
                + "</html>";

        // Envoyer les emails
        MailService mailService = new MailService();
        for (String email : userEmails) {
            try {
                User user = serviceUser.getUserByEmail(email);  // Récupérer l'utilisateur par email
                if (user != null) {
                    String realUserName = user.getNom() + " " + user.getPrenom(); // Nom complet de l'utilisateur
                    String personalizedBody = body.replace("{{name}}", realUserName); // Personnaliser le corps du mail
                    mailService.sendEmailPackWithImage(email, subject, personalizedBody);
                }
            } catch (SQLException e) {
                System.err.println("Erreur lors de la récupération de l'utilisateur par email : " + e.getMessage());
            }
        }

        // Afficher une alerte de confirmation
        showAlert(Alert.AlertType.INFORMATION, "Emails envoyés", "Les emails ont été envoyés à tous les utilisateurs concernés.");
    }

    private void sendMailToPackUsersForUpdate(Pack2 pack) {
        // Récupérer les adresses emails des utilisateurs concernés
        List<String> userEmails = getUserEmails();
        if (userEmails.isEmpty()) {
            showAlert(Alert.AlertType.INFORMATION, "Aucun utilisateur", "Aucun utilisateur n'est associé à ce pack.");
            return;
        }

        // Préparer le contenu du mail avec HTML
        String subject = "Mise à jour sur le Pack : " + pack.getNom();
        String body = "<html>"
                + "<head><style>"
                + "body { font-family: Arial, sans-serif; color: #333; padding: 20px; background-color: #f9f9f9; }"
                + "h1 { color: #2C3E50; }"
                + "p { line-height: 1.6; }"
                + "</style></head>"
                + "<body>"
                + "<h1>Bonjour {{name}},</h1>"
                + "<p>Le pack que vous avez sélectionné a été mis à jour. Voici les nouveaux détails :</p>"
                + "<table border='0' cellpadding='10' cellspacing='0' style='width: 100%; background-color: white;'>"
                + "<tr><td><strong>Nom du pack :</strong></td><td>" + pack.getNom() + "</td></tr>"
                + "<tr><td><strong>Description :</strong></td><td>" + pack.getDescription() + "</td></tr>"
                + "<tr><td><strong>Prix :</strong></td><td>$" + pack.getPrice() + "</td></tr>"
                + "<tr><td><strong>Catégorie :</strong></td><td>" + pack.getCategorie().name() + "</td></tr>"
                + "<tr><td><strong>Date de début :</strong></td><td>" + pack.getDate() + "</td></tr>"
                + "<tr><td><strong>Date de fin :</strong></td><td>" + pack.getEndDate() + "</td></tr>"
                + "</table>"
                + "<p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>"
                + "<p><a href='http://www.yourwebsite.com' class='cta'>En savoir plus</a></p>"
                + "<img src='cid:logo_image' alt='GoldenTouch Logo' style='max-width: 200px; height: auto;'>"
                + "<p>Cordialement, <br>L'équipe GoldenTouch</p>"
                + "</body>"
                + "</html>";

        // Envoyer les emails
        MailService mailService = new MailService();
        for (String email : userEmails) {
            try {
                User user = serviceUser.getUserByEmail(email);  // Récupérer l'utilisateur par email
                if (user != null) {
                    String realUserName = user.getNom() + " " + user.getPrenom(); // Nom complet de l'utilisateur
                    String personalizedBody = body.replace("{{name}}", realUserName); // Personnaliser le corps du mail
                    mailService.sendEmailPackWithImage(email, subject, personalizedBody);
                }
            } catch (SQLException e) {
                System.err.println("Erreur lors de la récupération de l'utilisateur par email : " + e.getMessage());
            }
        }

        // Afficher une alerte de confirmation
        showAlert(Alert.AlertType.INFORMATION, "Emails envoyés", "Les emails ont été envoyés à tous les utilisateurs concernés.");
    }


    public void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null); // Optional, if you want no header text
        alert.setContentText(content);
        alert.showAndWait();
    }

    @Override
    public void deleteEntity(Pack2 pack) {
        // Delete the Pack2 first
        String query = "DELETE FROM pack WHERE id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, pack.getId());
            int rowsDeleted = pst.executeUpdate();
            if (rowsDeleted > 0) {
                System.out.println("Pack deleted successfully!");
            } else {
                System.out.println("Pack not found!");
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (deleteEntity): " + e.getMessage());
        }
    }

    @Override
    public List<Pack2> getAllData() {
        List<Pack2> packs = new ArrayList<>();
        String query = "SELECT * FROM pack p JOIN event e ON p.event_id = e.id";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                Pack2 pack = new Pack2(
                        rs.getInt("id"),
                        rs.getString("description"),
                        rs.getInt("admin_id"),
                        rs.getInt("event_id"),
                        rs.getDouble("prix"),
                        rs.getInt("capacité"),
                        rs.getInt("durée"),
                        rs.getDate("end_date"),
                        rs.getString("nom"),
                        rs.getInt("user_id"),
                        CategorieEvent.valueOf(rs.getString("categorie")),
                        rs.getString("photo"),
                        rs.getString("date")
                );
                packs.add(pack);
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getAllData): " + e.getMessage());
        }

        return packs;
    }

    public boolean isPackInBasket(int userId, int packId) {
        String query = "SELECT COUNT(*) FROM Basket WHERE user_id = ? AND pack_id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, packId);

            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                int count = rs.getInt(1);
                return count > 0; // Return true if the pack is in the basket
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (isPackInBasket): " + e.getMessage());
        }
        return false; // Return false if an error occurs or the pack is not in the basket
    }

    public void addToBasket(int userId, int packId) {
        String query = "INSERT INTO Basket (user_id, pack_id) VALUES (?, ?)";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, packId);

            int rowsInserted = pst.executeUpdate();
            if (rowsInserted > 0) {
                System.out.println("Pack added to the basket successfully!");
            } else {
                System.out.println("Failed to add the pack to the basket.");
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (addToBasket): " + e.getMessage());
        }
    }

    // Fetch all locations from the location table
    public List<String> getLocations() {
        List<String> locations = new ArrayList<>();
        String query = "SELECT name FROM lieu"; // Fetch all location names

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {
            while (rs.next()) {
                locations.add(rs.getString("name"));
            }
            System.out.println("Retrieved " + locations.size() + " locations from database.");
        } catch (SQLException e) {
            System.out.println("SQL Error (getLocations): " + e.getMessage());
        }
        return locations;
    }



    public Pack2 getPackById(int packId) {
        String query = "SELECT * FROM pack p JOIN event e ON p.event_id = e.id WHERE p.id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return new Pack2(
                        rs.getInt("p.id"),
                        rs.getString("p.description"),
                        rs.getInt("p.admin_id"),
                        rs.getInt("p.event_id"),
                        rs.getDouble("p.prix"),
                        rs.getInt("p.capacité"),
                        rs.getInt("p.durée"),
                        rs.getDate("p.end_date"),
                        rs.getString("e.nom"),
                        rs.getInt("e.user_id"),
                        CategorieEvent.valueOf(rs.getString("e.categorie")),
                        rs.getString("e.photo"),
                        rs.getString("e.date")
                );
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getPackById): " + e.getMessage());
        }
        return null; // Return null if no pack is found
    }

    public boolean isPackUnique(Pack2 pack) {
        String query = "SELECT COUNT(*) FROM pack p " +
                "JOIN event e ON p.event_id = e.id " +
                "WHERE p.description = ? AND p.prix = ? AND p.capacité = ? AND p.durée = ? " +
                "AND e.nom = ? AND e.categorie = ? AND e.photo = ? AND e.date = ? AND p.end_date = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {

            // Set pack details
            pst.setString(1, pack.getDescription());
            pst.setDouble(2, pack.getPrice());
            pst.setInt(3, pack.getCapacity());
            pst.setInt(4, pack.getDuree());

            // Set event details
            pst.setString(5, pack.getNom());  // Event name
            pst.setString(6, pack.getCategorie().toString());  // Category
            pst.setString(7, pack.getPhoto());  // Event photo
            pst.setString(8, pack.getDate());  // Event date
            pst.setDate(9, pack.getEndDate());  // End date

            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                int count = rs.getInt(1);
                return count == 0; // Return true if no duplicate exists, false otherwise
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (isPackUnique): " + e.getMessage());
        }
        return false;
    }

    public List<String> getMaterialsForPack(int packId) {
        List<String> materials = new ArrayList<>();
        String query = "SELECT m.name FROM material m " +
                "JOIN reserve_mat rm ON m.id = rm.id_mat " +
                "WHERE rm.id_event = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                materials.add(rs.getString("name"));
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getMaterialsForPack): " + e.getMessage());
        }
        return materials;
    }

    public List<String> getLocationsForPack(int packId) {
        List<String> locations = new ArrayList<>();
        String query = "SELECT l.name FROM lieu l " +
                "JOIN reserver_lieu rl ON l.id = rl.lieu_id " +
                "WHERE rl.event_id = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                locations.add(rs.getString("name"));
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getLocationsForPack): " + e.getMessage());
        }
        return locations;
    }

    public List<String> getPersonnelForPack(int packId) {
        List<String> personnel = new ArrayList<>();
        String query = "SELECT p.nom FROM personnel p " +
                "JOIN reservation_perso rp ON p.idP = rp.idP " +
                "WHERE rp.id = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            while (rs.next()) {
                personnel.add(rs.getString("nom"));
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getPersonnelForPack): " + e.getMessage());
        }
        return personnel;
    }

    public void updatePackMaterials(int packId, List<String> materials) {
        // First, delete existing material reservations
        String deleteQuery = "DELETE FROM reserve_mat WHERE id_event = ?";
        String insertQuery = "INSERT INTO reserve_mat (id_mat, id_event, quantite, IdUser) " +
                "SELECT m.id, ?, 1, ? FROM material m WHERE m.name = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx()) {
            cnx.setAutoCommit(false);
            try {
                // Delete existing reservations
                try (PreparedStatement pst = cnx.prepareStatement(deleteQuery)) {
                    pst.setInt(1, packId);
                    pst.executeUpdate();
                }

                // Insert new reservations
                try (PreparedStatement pst = cnx.prepareStatement(insertQuery)) {
                    for (String material : materials) {
                        pst.setInt(1, packId);
                        pst.setInt(2, 1); // Default user ID, adjust as needed
                        pst.setString(3, material);
                        pst.executeUpdate();
                    }
                }

                cnx.commit();
            } catch (SQLException e) {
                cnx.rollback();
                throw e;
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (updatePackMaterials): " + e.getMessage());
        }
    }

    public void updatePackLocations(int packId, List<String> locations) {
        String deleteQuery = "DELETE FROM reserver_lieu WHERE event_id = ?";
        String insertQuery = "INSERT INTO reserver_lieu (lieu_id, event_id, status) " +
                "SELECT l.id, ?, 'confirmed' FROM lieu l WHERE l.name = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx()) {
            cnx.setAutoCommit(false);
            try {
                // Delete existing reservations
                try (PreparedStatement pst = cnx.prepareStatement(deleteQuery)) {
                    pst.setInt(1, packId);
                    pst.executeUpdate();
                }

                // Insert new reservations
                try (PreparedStatement pst = cnx.prepareStatement(insertQuery)) {
                    for (String location : locations) {
                        pst.setInt(1, packId);
                        pst.setString(2, location);
                        pst.executeUpdate();
                    }
                }

                cnx.commit();
            } catch (SQLException e) {
                cnx.rollback();
                throw e;
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (updatePackLocations): " + e.getMessage());
        }
    }

    public void updatePackPersonnel(int packId, List<String> personnel) {
        String deleteQuery = "DELETE FROM reservation_perso WHERE id = ?";
        String insertQuery = "INSERT INTO reservation_perso (idP, id) " +
                "SELECT p.idP, ? FROM personnel p WHERE p.nom = ?";

        try (Connection cnx = Myconnection.getInstance().getCnx()) {
            cnx.setAutoCommit(false);
            try {
                // Delete existing reservations
                try (PreparedStatement pst = cnx.prepareStatement(deleteQuery)) {
                    pst.setInt(1, packId);
                    pst.executeUpdate();
                }

                // Insert new reservations
                try (PreparedStatement pst = cnx.prepareStatement(insertQuery)) {
                    for (String person : personnel) {
                        pst.setInt(1, packId);
                        pst.setString(2, person);
                        pst.executeUpdate();
                    }
                }

                cnx.commit();
            } catch (SQLException e) {
                cnx.rollback();
                throw e;
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (updatePackPersonnel): " + e.getMessage());
        }
    }
    public String getPackNameById(int packId) {
        String query = "SELECT e.nom FROM event e JOIN pack p ON e.id = p.event_id WHERE p.id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return rs.getString("nom"); // Return the event name associated with the pack
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getPackNameById): " + e.getMessage());
        }
        return null; // Return null if no name is found or if an error occurs
    }

    public Pack2 getPackByName(String packName) {
        String query = "SELECT * FROM pack p JOIN event e ON p.event_id = e.id WHERE e.nom = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setString(1, packName);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return new Pack2(
                        rs.getInt("p.id"),
                        rs.getString("p.description"),
                        rs.getInt("p.admin_id"),
                        rs.getInt("p.event_id"),
                        rs.getDouble("p.prix"),
                        rs.getInt("p.capacité"),
                        rs.getInt("p.durée"),
                        rs.getDate("p.end_date"),
                        rs.getString("e.nom"),
                        rs.getInt("e.user_id"),
                        CategorieEvent.valueOf(rs.getString("e.categorie")),
                        rs.getString("e.photo"),
                        rs.getString("e.date")
                );
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getPackByName): " + e.getMessage());
        }
        return null; // Return null if no pack is found
    }



    public List<Pack2> getUserPurchases(int userId) {
        List<Pack2> userPurchases = new ArrayList<>();
        String query = "SELECT p.*, e.* FROM pack p " +
                "JOIN event e ON p.event_id = e.id " +
                "JOIN demande_pack dp ON p.id = dp.pack_id " +
                "WHERE dp.utilisateur_id = ? AND dp.statut = 'ACCEPTEE'";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                Pack2 pack = new Pack2(
                        rs.getInt("p.id"),
                        rs.getString("p.description"),
                        rs.getInt("p.admin_id"),
                        rs.getInt("p.event_id"),
                        rs.getDouble("p.prix"),
                        rs.getInt("p.capacité"),
                        rs.getInt("p.durée"),
                        rs.getDate("p.end_date"),
                        rs.getString("e.nom"),
                        rs.getInt("e.user_id"),
                        CategorieEvent.valueOf(rs.getString("e.categorie")),
                        rs.getString("e.photo"),
                        rs.getString("e.date")
                );
                userPurchases.add(pack);
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getUserPurchases): " + e.getMessage());
        }
        return userPurchases;
    }


    public List<Pack2> getTrendingPacks(int numPacks) {
        List<Pack2> trendingPacks = new ArrayList<>();
        String query = "SELECT p.*, e.*, COUNT(dp.id) as demand_count " +
                "FROM pack p " +
                "JOIN event e ON p.event_id = e.id " +
                "JOIN demande_pack dp ON p.id = dp.pack_id " +
                "WHERE dp.date_demande >= DATE_SUB(CURDATE(), INTERVAL 30 DAY) " +
                "GROUP BY p.id " +
                "ORDER BY demand_count DESC " +
                "LIMIT ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, numPacks);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                Pack2 pack = new Pack2(
                        rs.getInt("p.id"),
                        rs.getString("p.description"),
                        rs.getInt("p.admin_id"),
                        rs.getInt("p.event_id"),
                        rs.getDouble("p.prix"),
                        rs.getInt("p.capacité"),
                        rs.getInt("p.durée"),
                        rs.getDate("p.end_date"),
                        rs.getString("e.nom"),
                        rs.getInt("e.user_id"),
                        CategorieEvent.valueOf(rs.getString("e.categorie")),
                        rs.getString("e.photo"),
                        rs.getString("e.date")
                );
                trendingPacks.add(pack);
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getTrendingPacks): " + e.getMessage());
        }
        return trendingPacks;
    }


    public List<String> getUserEmails() {
        List<String> emails = new ArrayList<>();
        String query = "SELECT email FROM utilisateur"; // Adjust the query based on your schema
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query);
             ResultSet rs = pst.executeQuery()) {

            while (rs.next()) {
                emails.add(rs.getString("email"));
            }
        } catch (SQLException e) {
            System.out.println("Error fetching user emails: " + e.getMessage());
        }
        return emails;
    }


    private boolean priceOrDateChanged(Pack2 pack) {
        String query = "SELECT prix, end_date FROM pack WHERE id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {

            pst.setInt(1, pack.getId());
            try (ResultSet rs = pst.executeQuery()) {
                if (rs.next()) {
                    double oldPrice = rs.getDouble("prix");
                    Date oldEndDate = rs.getDate("end_date");

                    // Check if price or date has changed
                    return pack.getPrice() != oldPrice || !pack.getEndDate().equals(oldEndDate);
                }
            }
        } catch (SQLException e) {
            System.out.println("Error checking price or date change: " + e.getMessage());
        }
        return false;
    }

    public int getTotalPackDemands() {
        return demandePackService.getAllData().size();
    }

    // Method to get the most wanted pack (most demanded)
    public Pack2 getMostWantedPack() {
        Map<Integer, Integer> packDemandCounts = new HashMap<>();
        List<DemandePack> allDemands = demandePackService.getAllData();

        // Count the number of demands for each pack
        for (DemandePack demande : allDemands) {
            int packId = demande.getPackId();
            packDemandCounts.put(packId, packDemandCounts.getOrDefault(packId, 0) + 1);
        }

        // Find the pack with the highest demand count
        return packDemandCounts.entrySet().stream()
                .max(Map.Entry.comparingByValue())
                .map(entry -> getPackById(entry.getKey()))
                .orElse(null);
    }

    // Method to get the least wanted pack (least demanded)
    public Pack2 getLeastWantedPack() {
        Map<Integer, Integer> packDemandCounts = new HashMap<>();
        List<DemandePack> allDemands = demandePackService.getAllData();

        // Count the number of demands for each pack
        for (DemandePack demande : allDemands) {
            int packId = demande.getPackId();
            packDemandCounts.put(packId, packDemandCounts.getOrDefault(packId, 0) + 1);
        }

        // Find the pack with the lowest demand count
        return packDemandCounts.entrySet().stream()
                .min(Map.Entry.comparingByValue())
                .map(entry -> getPackById(entry.getKey()))
                .orElse(null);
    }

    // Method to get the count of demands for each pack
    public Map<String, Integer> getPackDemandCounts() {
        Map<String, Integer> packDemandCounts = new HashMap<>();
        List<DemandePack> allDemands = demandePackService.getAllData();

        // Count the number of demands for each pack
        for (DemandePack demande : allDemands) {
            int packId = demande.getPackId();
            Pack2 pack = getPackById(packId);
            if (pack != null) {
                String packName = pack.getNom();
                packDemandCounts.put(packName, packDemandCounts.getOrDefault(packName, 0) + 1);
            }
        }

        return packDemandCounts;
    }






    /*    tends calcusss     */

    /**
     * Récupère l'historique des vues de catégories d'un utilisateur
     * @param userId ID de l'utilisateur
     * @return Liste des catégories consultées
     */
    public List<String> getUserViewHistory(int userId) {
        List<String> viewHistory = new ArrayList<>();
        String query = "SELECT category FROM user_category_views WHERE user_id = ? ORDER BY view_date DESC";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                viewHistory.add(rs.getString("category"));
            }
            System.out.println("Récupéré " + viewHistory.size() + " vues de catégories pour l'utilisateur " + userId);
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getUserViewHistory): " + e.getMessage());
            // Si la table n'existe pas encore, la créer
            if (e.getMessage().contains("doesn't exist")) {
                createUserViewsTable();
            }
        }
        return viewHistory;
    }

    /**
     * Enregistre une vue de catégorie pour un utilisateur
     * @param userId ID de l'utilisateur
     * @param category Catégorie consultée
     */
    public void recordCategoryView(int userId, String category) {
        String query = "INSERT INTO user_category_views (user_id, category, view_date) VALUES (?, ?, NOW())";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setString(2, category);
            int result = pst.executeUpdate();

            if (result > 0) {
                System.out.println("Vue de catégorie enregistrée pour l'utilisateur " + userId + ": " + category);
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (recordCategoryView): " + e.getMessage());
            // Si la table n'existe pas encore, la créer puis réessayer
            if (e.getMessage().contains("doesn't exist")) {
                createUserViewsTable();
                recordCategoryView(userId, category); // Réessayer après création de la table
            }
        }
    }

    /**
     * Crée la table user_category_views si elle n'existe pas
     */
    private void createUserViewsTable() {
        String createTableQuery = "CREATE TABLE IF NOT EXISTS user_category_views (" +
                "id INT AUTO_INCREMENT PRIMARY KEY, " +
                "user_id INT NOT NULL, " +
                "category VARCHAR(50) NOT NULL, " +
                "view_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, " +
                "INDEX (user_id), " +
                "INDEX (category), " +
                "INDEX (view_date)" +
                ")";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement()) {
            st.executeUpdate(createTableQuery);
            System.out.println("Table user_category_views créée avec succès");
        } catch (SQLException e) {
            System.out.println("Erreur lors de la création de la table user_category_views: " + e.getMessage());
        }
    }

    /**
     * Récupère le prix moyen des achats d'un utilisateur
     * @param userId ID de l'utilisateur
     * @return Prix moyen des achats
     */
    public double getAverageUserPurchasePrice(int userId) {
        String query = "SELECT AVG(p.prix) as avg_price FROM pack p " +
                "JOIN demande_pack dp ON p.id = dp.pack_id " +
                "WHERE dp.utilisateur_id = ? AND dp.statut = 'ACCEPTEE'";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            ResultSet rs = pst.executeQuery();

            if (rs.next()) {
                double avgPrice = rs.getDouble("avg_price");
                if (!rs.wasNull()) {
                    System.out.println("Prix moyen des achats pour l'utilisateur " + userId + ": " + avgPrice);
                    return avgPrice;
                }
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getAverageUserPurchasePrice): " + e.getMessage());
        }

        // Valeur par défaut si aucun achat ou erreur
        return 0.0;
    }

    /**
     * Récupère la capacité moyenne des achats d'un utilisateur
     * @param userId ID de l'utilisateur
     * @return Capacité moyenne des achats
     */
    public double getAverageUserPurchaseCapacity(int userId) {
        String query = "SELECT AVG(p.capacité) as avg_capacity FROM pack p " +
                "JOIN demande_pack dp ON p.id = dp.pack_id " +
                "WHERE dp.utilisateur_id = ? AND dp.statut = 'ACCEPTEE'";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            ResultSet rs = pst.executeQuery();

            if (rs.next()) {
                double avgCapacity = rs.getDouble("avg_capacity");
                if (!rs.wasNull()) {
                    System.out.println("Capacité moyenne des achats pour l'utilisateur " + userId + ": " + avgCapacity);
                    return avgCapacity;
                }
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getAverageUserPurchaseCapacity): " + e.getMessage());
        }

        // Valeur par défaut si aucun achat ou erreur
        return 0.0;
    }

    /**
     * Récupère les catégories les plus populaires parmi tous les utilisateurs
     * @param limit Nombre maximum de catégories à récupérer
     * @return Map des catégories avec leur nombre de vues
     */
    public Map<String, Integer> getPopularCategories(int limit) {
        Map<String, Integer> popularCategories = new LinkedHashMap<>();
        String query = "SELECT category, COUNT(*) as view_count FROM user_category_views " +
                "GROUP BY category ORDER BY view_count DESC LIMIT ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, limit);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                String category = rs.getString("category");
                int viewCount = rs.getInt("view_count");
                popularCategories.put(category, viewCount);
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getPopularCategories): " + e.getMessage());
            if (e.getMessage().contains("doesn't exist")) {
                createUserViewsTable();
            }
        }

        return popularCategories;
    }

    /**
     * Récupère les catégories récemment consultées par un utilisateur
     * @param userId ID de l'utilisateur
     * @param limit Nombre maximum de catégories à récupérer
     * @return Liste des catégories récemment consultées
     */
    public List<String> getRecentlyViewedCategories(int userId, int limit) {
        List<String> recentCategories = new ArrayList<>();
        String query = "SELECT DISTINCT category FROM user_category_views " +
                "WHERE user_id = ? ORDER BY view_date DESC LIMIT ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, userId);
            pst.setInt(2, limit);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                recentCategories.add(rs.getString("category"));
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getRecentlyViewedCategories): " + e.getMessage());
            if (e.getMessage().contains("doesn't exist")) {
                createUserViewsTable();
            }
        }

        return recentCategories;
    }

    /**
     * Récupère les packs les plus récemment ajoutés
     * @param limit Nombre maximum de packs à récupérer
     * @return Liste des packs les plus récents
     */
    public List<Pack2> getNewestPacks(int limit) {
        List<Pack2> newestPacks = new ArrayList<>();
        String query = "SELECT p.*, e.* FROM pack p " +
                "JOIN event e ON p.event_id = e.id " +
                "ORDER BY p.id DESC LIMIT ?";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, limit);
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                Pack2 pack = new Pack2(
                        rs.getInt("p.id"),
                        rs.getString("p.description"),
                        rs.getInt("p.admin_id"),
                        rs.getInt("p.event_id"),
                        rs.getDouble("p.prix"),
                        rs.getInt("p.capacité"),
                        rs.getInt("p.durée"),
                        rs.getDate("p.end_date"),
                        rs.getString("e.nom"),
                        rs.getInt("e.user_id"),
                        CategorieEvent.valueOf(rs.getString("e.categorie")),
                        rs.getString("e.photo"),
                        rs.getString("e.date")
                );
                newestPacks.add(pack);
            }
        } catch (SQLException e) {
            System.out.println("Erreur SQL (getNewestPacks): " + e.getMessage());
        }

        return newestPacks;
    }





    // Add these methods to the PackService2 class

    /**
     * Gets the distribution of packs by category
     * @return Map of categories and their pack counts
     */
    public Map<CategorieEvent, Integer> getCategoryDistribution() {
        Map<CategorieEvent, Integer> categoryDistribution = new HashMap<>();
        String query = "SELECT e.categorie, COUNT(p.id) as pack_count " +
                "FROM pack p " +
                "JOIN event e ON p.event_id = e.id " +
                "GROUP BY e.categorie";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                String categoryStr = rs.getString("categorie");
                int count = rs.getInt("pack_count");
                try {
                    CategorieEvent category = CategorieEvent.valueOf(categoryStr);
                    categoryDistribution.put(category, count);
                } catch (IllegalArgumentException e) {
                    System.out.println("Invalid category value in database: " + categoryStr);
                }
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getCategoryDistribution): " + e.getMessage());
        }

        return categoryDistribution;
    }

    /**
     * Gets the monthly demand counts for packs
     * @return Map of month (YYYY-MM format) and demand counts
     */
    public Map<String, Integer> getMonthlyDemands() {
        Map<String, Integer> monthlyDemands = new LinkedHashMap<>(); // LinkedHashMap to maintain insertion order
        String query = "SELECT DATE_FORMAT(date_demande, '%Y-%m') as month, COUNT(*) as demand_count " +
                "FROM demande_pack " +
                "WHERE date_demande >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH) " +
                "GROUP BY month " +
                "ORDER BY month ASC";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            while (rs.next()) {
                String month = rs.getString("month");
                int count = rs.getInt("demand_count");
                monthlyDemands.put(month, count);
            }

            // Fill in missing months with zero counts
            fillMissingMonths(monthlyDemands);

        } catch (SQLException e) {
            System.out.println("SQL Error (getMonthlyDemands): " + e.getMessage());
        }

        return monthlyDemands;
    }

    /**
     * Helper method to fill in missing months with zero counts
     * @param monthlyDemands Map of months and demand counts
     */
    private void fillMissingMonths(Map<String, Integer> monthlyDemands) {
        if (monthlyDemands.isEmpty()) {
            return;
        }

        // Get the first and last month in the data
        List<String> months = new ArrayList<>(monthlyDemands.keySet());
        Collections.sort(months);

        String firstMonth = months.get(0);
        String lastMonth = months.get(months.size() - 1);

        // Parse year and month
        int firstYear = Integer.parseInt(firstMonth.substring(0, 4));
        int firstMonthNum = Integer.parseInt(firstMonth.substring(5, 7));

        int lastYear = Integer.parseInt(lastMonth.substring(0, 4));
        int lastMonthNum = Integer.parseInt(lastMonth.substring(5, 7));

        // Create a temporary map with all months
        Map<String, Integer> completeMonthlyDemands = new LinkedHashMap<>();

        Calendar cal = Calendar.getInstance();
        cal.set(firstYear, firstMonthNum - 1, 1); // Month is 0-based in Calendar

        Calendar endCal = Calendar.getInstance();
        endCal.set(lastYear, lastMonthNum - 1, 1);

        // Add one month to include the last month
        endCal.add(Calendar.MONTH, 1);

        SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM");

        while (cal.before(endCal)) {
            String monthKey = sdf.format(cal.getTime());
            completeMonthlyDemands.put(monthKey, monthlyDemands.getOrDefault(monthKey, 0));
            cal.add(Calendar.MONTH, 1);
        }

        // Replace the original map with the complete one
        monthlyDemands.clear();
        monthlyDemands.putAll(completeMonthlyDemands);
    }

    /**
     * Gets the average number of demands per pack
     * @return Average demand per pack
     */
    public double getAverageDemandPerPack() {
        String query = "SELECT " +
                "(SELECT COUNT(*) FROM demande_pack) / " +
                "(SELECT COUNT(DISTINCT pack_id) FROM demande_pack) as avg_demand";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            if (rs.next()) {
                return rs.getDouble("avg_demand");
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getAverageDemandPerPack): " + e.getMessage());

            // Alternative calculation if the query fails
            try (Connection altCnx = Myconnection.getInstance().getCnx()) {
                // Get total number of demands
                int totalDemands = getTotalPackDemands();

                // Get number of unique packs with demands
                String packCountQuery = "SELECT COUNT(DISTINCT pack_id) as pack_count FROM demande_pack";
                try (Statement st2 = altCnx.createStatement();
                     ResultSet rs2 = st2.executeQuery(packCountQuery)) {

                    if (rs2.next()) {
                        int packCount = rs2.getInt("pack_count");
                        if (packCount > 0) {
                            return (double) totalDemands / packCount;
                        }
                    }
                }
            } catch (SQLException ex) {
                System.out.println("SQL Error (alternative calculation): " + ex.getMessage());
            }
        }

        return 0.0; // Default if calculation fails
    }

    /**
     * Gets the most popular category based on demand counts
     * @return The most popular CategorieEvent
     */
    public CategorieEvent getMostPopularCategory() {
        String query = "SELECT e.categorie, COUNT(dp.id) as demand_count " +
                "FROM demande_pack dp " +
                "JOIN pack p ON dp.pack_id = p.id " +
                "JOIN event e ON p.event_id = e.id " +
                "GROUP BY e.categorie " +
                "ORDER BY demand_count DESC " +
                "LIMIT 1";

        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {

            if (rs.next()) {
                String categoryStr = rs.getString("categorie");
                try {
                    return CategorieEvent.valueOf(categoryStr);
                } catch (IllegalArgumentException e) {
                    System.out.println("Invalid category value in database: " + categoryStr);
                }
            }
        } catch (SQLException e) {
            System.out.println("SQL Error (getMostPopularCategory): " + e.getMessage());
        }

        // If no data or error, try to return the most common category among all packs
        try {
            Map<CategorieEvent, Integer> categoryDistribution = getCategoryDistribution();
            return categoryDistribution.entrySet().stream()
                    .max(Map.Entry.comparingByValue())
                    .map(Map.Entry::getKey)
                    .orElse(null);
        } catch (Exception e) {
            System.out.println("Error getting fallback category: " + e.getMessage());
        }

        return null; // Return null if no category can be determined
    }



    // Add to PackService2.java
    public int getPackDemandCount(int packId) {
        String query = "SELECT COUNT(*) FROM demande_pack WHERE pack_id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return rs.getInt(1);
            }
        } catch (SQLException e) {
            System.err.println("SQL Error (getPackDemandCount): " + e.getMessage());
        }
        return 0;
    }

    public int getRecentReservationsCount(int packId, int daysBack) {
        String query = "SELECT COUNT(*) FROM demande_pack WHERE pack_id = ? AND date_demande >= DATE_SUB(NOW(), INTERVAL ? DAY)";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            pst.setInt(2, daysBack);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return rs.getInt(1);
            }
        } catch (SQLException e) {
            System.err.println("SQL Error (getRecentReservationsCount): " + e.getMessage());
        }
        return 0;
    }

    public int getTotalReservationsCount() {
        String query = "SELECT COUNT(*) FROM demande_pack";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             Statement st = cnx.createStatement();
             ResultSet rs = st.executeQuery(query)) {
            if (rs.next()) {
                return rs.getInt(1);
            }
        } catch (SQLException e) {
            System.err.println("SQL Error (getTotalReservationsCount): " + e.getMessage());
        }
        return 0;
    }

    public boolean isSeasonalPack(int packId) {
        // Get current date
        java.time.LocalDate currentDate = java.time.LocalDate.now();

        // Define seasons (1-12 months)
        String currentSeason;
        int currentMonth = currentDate.getMonthValue();
        if (currentMonth >= 3 && currentMonth <= 5) {
            currentSeason = "SPRING";
        } else if (currentMonth >= 6 && currentMonth <= 8) {
            currentSeason = "SUMMER";
        } else if (currentMonth >= 9 && currentMonth <= 11) {
            currentSeason = "FALL";
        } else {
            currentSeason = "WINTER";
        }

        // Query the database for start_date and end_date of the pack
        String query = "SELECT start_date, end_date FROM pack WHERE id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();

            if (rs.next()) {
                String startDateStr = rs.getString("start_date");
                String endDateStr = rs.getString("end_date");

                if (startDateStr != null && endDateStr != null) {
                    // Parse start_date and end_date
                    java.time.LocalDate startDate = java.time.LocalDate.parse(startDateStr);
                    java.time.LocalDate endDate = java.time.LocalDate.parse(endDateStr);

                    // Check if the current date is within the pack's date range
                    if (!currentDate.isBefore(startDate) && !currentDate.isAfter(endDate)) {
                        // Determine the season of the pack's start and end dates
                        int startMonth = startDate.getMonthValue();
                        int endMonth = endDate.getMonthValue();

                        boolean isSpringPack = (startMonth >= 3 && startMonth <= 5) || (endMonth >= 3 && endMonth <= 5);
                        boolean isSummerPack = (startMonth >= 6 && startMonth <= 8) || (endMonth >= 6 && endMonth <= 8);
                        boolean isFallPack = (startMonth >= 9 && startMonth <= 11) || (endMonth >= 9 && endMonth <= 11);
                        boolean isWinterPack = (startMonth == 12 || startMonth <= 2) || (endMonth == 12 || endMonth <= 2);

                        // Return true if the pack's season matches the current season
                        return (currentSeason.equals("SPRING") && isSpringPack) ||
                                (currentSeason.equals("SUMMER") && isSummerPack) ||
                                (currentSeason.equals("FALL") && isFallPack) ||
                                (currentSeason.equals("WINTER") && isWinterPack);
                    }
                }
            }
        } catch (SQLException e) {
            System.err.println("SQL Error (isSeasonalPack): " + e.getMessage());
        }

        // If no valid date range or no match, return false
        return false;
    }
    

    public boolean isPackPopularInRegion(int packId) {
        // This method checks if a pack is popular in the user's region
        // For this example, we'll consider a pack popular if it has more than 5 demands
        String query = "SELECT COUNT(*) FROM demande_pack WHERE pack_id = ?";
        try (Connection cnx = Myconnection.getInstance().getCnx();
             PreparedStatement pst = cnx.prepareStatement(query)) {
            pst.setInt(1, packId);
            ResultSet rs = pst.executeQuery();
            if (rs.next()) {
                return rs.getInt(1) > 5; // Consider popular if more than 5 demands
            }
        } catch (SQLException e) {
            System.err.println("SQL Error (isPackPopularInRegion): " + e.getMessage());
        }
        return false;
    }


}