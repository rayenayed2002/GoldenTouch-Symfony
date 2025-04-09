package GoldenTouch.piDev.Controllers;

import GoldenTouch.piDev.Entities.*;
import GoldenTouch.piDev.Services.*;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

import java.io.IOException;
import java.sql.Date;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class CustomizePackController extends AddPack2Controller {
    @FXML
    private Label clientNameLabel;
    @FXML
    private Label packNameLabel;
    @FXML
    private Label demandeStatusLabel;

    @FXML
    private TableView<SelectedItem> selectedItemsTableView;

    @FXML
    private TableColumn<SelectedItem, String> typeColumn;

    @FXML
    private TableColumn<SelectedItem, String> nameColumn;

    @FXML
    private TableColumn<SelectedItem, String> detailsColumn;
    @FXML
    private ComboBox<String> materielDropdown;
    @FXML
    private TextField materialQuantityInput;
    @FXML
    private ComboBox<String> locationDropdown;
    @FXML
    private ComboBox<String> personnelDropdown;
    @FXML
    private Button removeSelectedMaterialButton;
    @FXML
    private Button removeSelectedPersonnelButton;
    @FXML
    private Label eventDateLabel;

    public class SelectedItem {
        private final String type;
        private final String name;
        private final String details;

        public SelectedItem(String type, String name, String details) {
            this.type = type;
            this.name = name;
            this.details = details;
        }

        public String getType() {
            return type;
        }

        public String getName() {
            return name;
        }

        public String getDetails() {
            return details;
        }
    }

    private DemandePack demandePack;
    private Pack2 originalPack;
    private final ObservableList<String> selectedMaterials = FXCollections.observableArrayList();
    private final ObservableList<String> selectedLocations = FXCollections.observableArrayList();
    private final ObservableList<String> selectedPersonnel = FXCollections.observableArrayList();
    private final ObservableList<String> selectedItems = FXCollections.observableArrayList(); // New list for selected items

    private final Map<String, Integer> materialQuantities = new HashMap<>(); // Store material quantities
    private final Map<String, Materiels> materialsMap = new HashMap<>(); // Map material names to objects
    private final Map<String, Personnels> personnelsMap = new HashMap<>(); // Map personnel names to objects
    private final Map<String, Lieu> lieuxMap = new HashMap<>(); // Map lieu names to objects

    private final PackService2 packService = new PackService2();
    private final ServiceUser userService = new ServiceUser();
    private final DemandePackService demandePackService = new DemandePackService();
    private final MaterielsService materielsService = new MaterielsService();
    private final ReservationPersoService reservationPersoService = new ReservationPersoService();
    private final ReservationLieuService reslieuService = new ReservationLieuService();
    private final ReservMatService resMatService = new ReservMatService();
    private final PersonnelsService personnelsService = new PersonnelsService();
    private final LieuService lieuService = new LieuService();
    private final EventService eventService = new EventService();

    // Add a new field to track the total price
    private double totalPrice = 0.0;

    public void initData(DemandePack demandePack, Pack2 pack) {
        // Initialize TableView columns
        initializeTableViewColumns();

        if (demandePack == null) {
            showAlert("Error", "DemandePack information is missing", Alert.AlertType.ERROR);
            closeWindow();
            return;
        }

        this.demandePack = demandePack;
        this.originalPack = pack;

        // Initialize client info
        User client = userService.getUserById(demandePack.getUtilisateurId());
        clientNameLabel.setText("Client: " + (client != null ? client.getNom() + " " + client.getPrenom() : "Unknown"));

        // Initialize pack info
        if (pack == null) {
            packNameLabel.setText("Pack: New Pack");
        } else {
            packNameLabel.setText("Pack: " + pack.getNom());
            nameField.setText(pack.getNom());
            priceField.setText(String.valueOf(pack.getPrice()));
            descriptionField.setText(pack.getDescription());
            capacityField.setText(String.valueOf(pack.getCapacity()));
            categoryComboBox.setValue(pack.getCategorie());
        }

        // Make price field read-only
        priceField.setEditable(false);
        priceField.setStyle("-fx-background-color: #f0f0f0;");

        demandeStatusLabel.setText("Status: " + demandePack.getStatut());

        // Set the event date from demandePack
        if (demandePack.getDateDemande() != null) {
            eventDateLabel.setText(demandePack.getDateDemande().toString());
        } else {
            eventDateLabel.setText("No date specified");
        }

        // Load materials, locations, and personnel maps
        loadMaterialsMap();
        loadPersonnelsMap();
        loadLieuxMap();

        // Load initial dropdowns
        loadMaterialsDropdown();
        loadLocationsDropdown();

        // Setup selection handling for materials and personnel lists
        setupListViewListeners();

        // Initialize price calculation if we have existing selections
        calculateTotalPrice();
    }

    @FXML
    private void goToLogn(MouseEvent mouseEvent) {
        RouterController.navigate("/interfaces/login.fxml");
    }

    private void initializeTableViewColumns() {
        System.out.println("Initializing TableView columns...");
        System.out.println("typeColumn: " + typeColumn);
        System.out.println("nameColumn: " + nameColumn);
        System.out.println("detailsColumn: " + detailsColumn);

        if (typeColumn == null || nameColumn == null || detailsColumn == null) {
            throw new IllegalStateException("Table columns are not properly initialized. Check FXML file.");
        }

        typeColumn.setCellValueFactory(new PropertyValueFactory<>("type"));
        nameColumn.setCellValueFactory(new PropertyValueFactory<>("name"));
        detailsColumn.setCellValueFactory(new PropertyValueFactory<>("details"));
    }

    private void loadMaterialsMap() {
        List<Materiels> materielsList = materielsService.getAlldata();
        for (Materiels materiel : materielsList) {
            materialsMap.put(materiel.getNom_mat(), materiel);
        }
    }

    private String formatMaterialEntry(String materialName, int quantity) {
        Materiels material = materialsMap.get(materialName);
        if (material != null) {
            double totalPrice = material.getPrix_mat() * quantity;
            return String.format("%s (Quantity: %d) - Unit price: %.2f - Total: %.2f",
                    materialName, quantity, material.getPrix_mat(), totalPrice);
        } else {
            return materialName + " (Quantity: " + quantity + ")";
        }
    }

    @FXML
    private void handleAddMaterial() {
        String selectedMaterialEntry = materielDropdown.getValue();
        if (selectedMaterialEntry == null || selectedMaterialEntry.isEmpty()) {
            showAlert("Error", "Please select a material", Alert.AlertType.ERROR);
            return;
        }

        // Extract the actual material name from the dropdown entry (which includes availability)
        String selectedMaterial = selectedMaterialEntry.split(" \\(Available:")[0];
        String quantityText = materialQuantityInput.getText();

        if (!quantityText.isEmpty()) {
            try {
                int quantity = Integer.parseInt(quantityText);
                Materiels material = materialsMap.get(selectedMaterial);

                if (material == null) {
                    showAlert("Error", "Selected material not found", Alert.AlertType.ERROR);
                    return;
                }

                if (quantity <= 0) {
                    showAlert("Error", "Quantity must be greater than 0", Alert.AlertType.ERROR);
                    return;
                }

                if (quantity > material.getQuantite_mat()) {
                    showAlert("Error", "Not enough quantity available. Available: " + material.getQuantite_mat(), Alert.AlertType.ERROR);
                    return;
                }

                // Check if material is already selected
                if (materialQuantities.containsKey(selectedMaterial)) {
                    // Update the quantity
                    int newTotalQuantity = materialQuantities.get(selectedMaterial) + quantity;

                    if (newTotalQuantity > material.getQuantite_mat()) {
                        showAlert("Error", "Not enough quantity available. Available: " + material.getQuantite_mat(), Alert.AlertType.ERROR);
                        return;
                    }

                    // Remove old entry
                    selectedMaterials.removeIf(item -> item.startsWith(selectedMaterial + " ("));

                    // Add updated entry
                    materialQuantities.put(selectedMaterial, newTotalQuantity);
                    selectedMaterials.add(formatMaterialEntry(selectedMaterial, newTotalQuantity));
                } else {
                    // Add new entry
                    materialQuantities.put(selectedMaterial, quantity);
                    selectedMaterials.add(formatMaterialEntry(selectedMaterial, quantity));
                }

                materialQuantityInput.clear();

                // Refresh materials dropdown to reflect updated quantities
                loadMaterialsDropdown();

                // Update the selected items ListView
                updateSelectedItemsTableView();

                // Calculate and update the total price
                calculateTotalPrice();

                System.out.println("Adding material...");

            } catch (NumberFormatException e) {
                showAlert("Error", "Invalid quantity", Alert.AlertType.ERROR);
            }
        } else {
            showAlert("Error", "Please enter a quantity", Alert.AlertType.ERROR);
        }
    }

    private void loadPersonnelsMap() {
        List<Personnels> personnelList = personnelsService.getAllData();
        for (Personnels personnel : personnelList) {
            String fullName = personnel.getNomP() + " " + personnel.getPrenomP();
            personnelsMap.put(fullName, personnel);
        }
    }

    private void loadLieuxMap() {
        List<Lieu> locationsList = lieuService.getAllData();
        for (Lieu lieu : locationsList) {
            lieuxMap.put(lieu.getName(), lieu);
        }
    }

    private void loadMaterialsDropdown() {
        if (materielDropdown == null) {
            System.err.println("materielDropdown is null in loadMaterialsDropdown!");
            return;
        }

        materielDropdown.getItems().clear();
        // Only add materials that have quantity > 0
        for (Materiels materiel : materialsMap.values()) {
            if (materiel.getQuantite_mat() > 0) {
                materielDropdown.getItems().add(materiel.getNom_mat() + " (Available: " + materiel.getQuantite_mat() + ")");
            }
        }
    }

    private void loadLocationsDropdown() {
        locationDropdown.getItems().clear();
        for (Lieu lieu : lieuxMap.values()) {
            locationDropdown.getItems().add(lieu.getName());
        }
    }

    private void loadAllPersonnel() {
        personnelDropdown.getItems().clear();
        for (Personnels personnel : personnelsMap.values()) {
            String fullName = personnel.getNomP() + " " + personnel.getPrenomP();
            personnelDropdown.getItems().add(fullName);
        }
    }

    private void loadAvailablePersonnelForDate(LocalDate date) {
        personnelDropdown.getItems().clear();

        // Get all personnel
        List<Personnels> allPersonnel = personnelsService.getAllData();

        // Get unavailable personnel for this date (this would be a new method in your PersonnelsService)
        List<Personnels> unavailablePersonnel = reservationPersoService.getUnavailablePersonnelForDate(date);

        // Filter available personnel
        for (Personnels personnel : allPersonnel) {
            if (!unavailablePersonnel.contains(personnel)) {
                String fullName = personnel.getNomP() + " " + personnel.getPrenomP();
                personnelDropdown.getItems().add(fullName);
            }
        }
    }

    private void setupListViewListeners() {
        // Configure material list view
        selectedItemsTableView.getSelectionModel().selectedItemProperty().addListener((observable, oldValue, newValue) -> {
            removeSelectedMaterialButton.setDisable(newValue == null);
            removeSelectedPersonnelButton.setDisable(newValue == null);
        });
    }

    private void updateSelectedItemsTableView() {
        System.out.println("Updating selected items TableView...");
        ObservableList<SelectedItem> items = FXCollections.observableArrayList();

        // Add materials
        for (String material : selectedMaterials) {
            items.add(new SelectedItem("Material", material, ""));
        }

        // Add locations
        for (String location : selectedLocations) {
            items.add(new SelectedItem("Location", location, ""));
        }

        // Add personnel
        for (String personnel : selectedPersonnel) {
            items.add(new SelectedItem("Personnel", personnel, ""));
        }

        // Update the TableView
        selectedItemsTableView.setItems(items);
    }

    @FXML
    private void handleAddLocation() {
        String selectedLocation = locationDropdown.getValue();
        if (selectedLocation != null) {
            selectedLocations.clear(); // Only one location allowed
            selectedLocations.add(selectedLocation);
            System.out.println("Adding location...");
            updateSelectedItemsTableView(); // Update the selected items ListView
            // Calculate and update the total price
            calculateTotalPrice();
        } else {
            showAlert("Error", "Please select a location", Alert.AlertType.ERROR);
        }
    }

    @FXML
    private void handleAddPersonnel() {
        String selectedPersonnelName = personnelDropdown.getValue();
        if (selectedPersonnelName == null || selectedPersonnelName.isEmpty()) {
            showAlert("Error", "Please select a personnel", Alert.AlertType.ERROR);
            return;
        }

        if (!selectedPersonnel.contains(selectedPersonnelName)) {
            Personnels personnel = personnelsMap.get(selectedPersonnelName);
            if (personnel != null) {
                // Check if the personnel is already reserved for the event
                if (reservationPersoService.isReservationExistsPack(personnel.getIdP(), demandePack.getEventId())) {
                    showAlert("Error", "Personnel Already Reserved This personnel is already reserved for the event.", Alert.AlertType.ERROR);
                } else {
                    System.out.println("Adding personnel...");
                    selectedPersonnel.add(selectedPersonnelName);
                    updateSelectedItemsTableView(); // Update the selected items ListView

                    // Calculate and update the total price
                    calculateTotalPrice();
                }
            } else {
                showAlert("Error", "Selected personnel not found", Alert.AlertType.ERROR);
            }
        } else {
            showAlert("Info", "This personnel is already selected", Alert.AlertType.INFORMATION);
        }
    }

    @FXML
    private void handleRemoveMaterial() {
        SelectedItem selectedItem = selectedItemsTableView.getSelectionModel().getSelectedItem();
        if (selectedItem != null && "Material".equals(selectedItem.getType())) {
            String materialEntry = selectedItem.getName();
            // Extract material name from the formatted string
            String materialName = materialEntry.split(" \\(Quantity:")[0];

            selectedMaterials.removeIf(item -> item.startsWith(materialName + " ("));
            materialQuantities.remove(materialName);

            // Refresh materials dropdown
            loadMaterialsDropdown();

            // Update the selected items ListView
            updateSelectedItemsTableView();

            // Calculate and update the total price
            calculateTotalPrice();
        }
    }

    @FXML
    private void handleRemovePersonnel() {
        SelectedItem selectedItem = selectedItemsTableView.getSelectionModel().getSelectedItem();
        if (selectedItem != null && "Personnel".equals(selectedItem.getType())) {
            String personnelName = selectedItem.getName();
            selectedPersonnel.remove(personnelName);
            updateSelectedItemsTableView();

            // Calculate and update the total price
            calculateTotalPrice();
        }
    }

    @FXML
    private void handleSaveCustomization() {
        try {
            // Validate inputs
            if (!validateInputs()) {
                return;
            }

            // Create or update the pack
            Pack2 customizedPack = new Pack2();
            if (originalPack != null) {
                customizedPack.setId(originalPack.getId());
                customizedPack.setPhoto(imagePath != null ? imagePath : originalPack.getPhoto());
            } else {
                customizedPack.setPhoto(imagePath != null ? imagePath : "default.jpg");
            }

            customizedPack.setNom(nameField.getText());
            customizedPack.setPrice(totalPrice); // Use the calculated total price
            customizedPack.setDescription(descriptionField.getText());
            customizedPack.setCapacity(Integer.parseInt(capacityField.getText()));
            customizedPack.setCategorie(categoryComboBox.getValue());
            customizedPack.setUserId(demandePack.getUtilisateurId());
            customizedPack.setAdminId(1); // Set current admin ID

            // Set dates

            // Set the event date from demandePack
            if (demandePack.getDateDemande() != null) {
                customizedPack.setDate(demandePack.getDateDemande().toString());
            }

            // Create the event with the pack name chosen by the client
            Event event = new Event();
            event.setNom(customizedPack.getNom());
            event.setUserId(customizedPack.getUserId());
            event.setCategorie(customizedPack.getCategorie());
            event.setPhoto(customizedPack.getPhoto());
            event.setDate(customizedPack.getDate());

            // Add the event and get the generated ID
            int eventId = eventService.addEntity2(event);
            if (eventId == 0) {
                showAlert("Erreur", "Échec de la création de l'événement.", Alert.AlertType.ERROR);
                return;
            }

            // Update materials, locations, and personnel
            int packId = originalPack != null ? originalPack.getId() : customizedPack.getId();

            if (packId > 0) {
                // Reserve materials
                for (Map.Entry<String, Integer> entry : materialQuantities.entrySet()) {
                    String materialName = entry.getKey();
                    int quantity = entry.getValue();
                    Materiels materiel = materialsMap.get(materialName);

                    if (materiel != null) {
                        // Update material quantity
                        materiel.setQuantite_mat(materiel.getQuantite_mat() - quantity);
                        materielsService.updateEntity(materiel.getId_mat(), materiel);

                        // Create material reservation
                        ReservMat reservMat = new ReservMat();
                        reservMat.setMateriels(materiel);
                        reservMat.setQuantite(quantity);
                        reservMat.setUserId(customizedPack.getUserId());

                        // Use the new method to add the reservation
                        resMatService.addEntityWithEventId(reservMat, eventId);
                    }
                }

                // Reserve personnel
                for (String personnelName : selectedPersonnel) {
                    Personnels personnel = personnelsMap.get(personnelName);
                    if (personnel != null) {
                        // Check if the personnel is already reserved for the event
                        if (reservationPersoService.isReservationExistsPack(personnel.getIdP(), eventId)) {
                            showAlert("Error", "Personnel Already Reserved: This personnel is already reserved for the event.", Alert.AlertType.ERROR);
                        } else {
                            // Create a reservation for the personnel
                            ReservationPerso reservation = new ReservationPerso(personnel, event);
                            reservationPersoService.addEntityWithEventId(reservation, eventId);
                        }
                    }
                }

                // Assign location
                if (!selectedLocations.isEmpty()) {
                    String locationName = selectedLocations.get(0); // Only one location is allowed
                    Lieu location = lieuxMap.get(locationName);

                    if (location != null) {
                        // Create location reservation
                        ReservationLieu reservationLieu = new ReservationLieu();
                        reservationLieu.setLieuId(location.getId());
                        reservationLieu.setEventId(eventId);
                        reservationLieu.setDateReservation(new java.sql.Timestamp(System.currentTimeMillis()));
                        reservationLieu.setStatus("Reserved");
                        reslieuService.addEntityWithEventId(reservationLieu, eventId);
                    }
                }
            }

            // Update demande pack status
            demandePack.setPrix(totalPrice);
            demandePack.setStatut(DemandePack.Statut.EN_ATTENTE_CONFIRMATION_UTILISATEUR);
            demandePackService.updateEntity(demandePack);

            // Show success message
            showAlert("Succès", "Pack customisé avec succès!", Alert.AlertType.INFORMATION);

            // Close the window
            closeWindow();

        } catch (Exception e) {
            showAlert("Erreur", "Une erreur est survenue lors de la customisation du pack: " + e.getMessage(),
                    Alert.AlertType.ERROR);
            e.printStackTrace();
        }
    }

    @FXML
    private void handleCancel() {
        closeWindow();
    }

    private void closeWindow() {
        Stage stage = (Stage) nameField.getScene().getWindow();
        stage.close();
    }

    private boolean validateInputs() {
        StringBuilder errors = new StringBuilder();

        // Validate required fields
        if (nameField.getText().trim().isEmpty()) {
            errors.append("- Le nom du pack est requis\n");
        }

        if (descriptionField.getText().trim().isEmpty()) {
            errors.append("- La description est requise\n");
        }

        try {
            int capacity = Integer.parseInt(capacityField.getText());
            if (capacity < 0) {
                errors.append("- La capacité doit être positive\n");
            }
        } catch (NumberFormatException e) {
            errors.append("- La capacité doit être un nombre valide\n");
        }

        if (categoryComboBox.getValue() == null) {
            errors.append("- La catégorie est requise\n");
        }

        if (errors.length() > 0) {
            showAlert("Erreur de validation", errors.toString(), Alert.AlertType.ERROR);
            return false;
        }

        return true;
    }

    private void showAlert(String title, String message, Alert.AlertType type) {
        Alert alert = new Alert(type);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);

        // Apply the custom CSS to the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        alert.showAndWait();
    }

    // Add this method to calculate the total price based on selections
    private void calculateTotalPrice() {
        totalPrice = demandePack.getPrix();

        // Calculate price from materials
        for (Map.Entry<String, Integer> entry : materialQuantities.entrySet()) {
            String materialName = entry.getKey();
            int quantity = entry.getValue();
            Materiels material = materialsMap.get(materialName);

            if (material != null) {
                totalPrice += material.getPrix_mat() * quantity;
            }
        }

        // Calculate price from personnel
        for (String personnelName : selectedPersonnel) {
            Personnels personnel = personnelsMap.get(personnelName);
            if (personnel != null) {
                totalPrice += personnel.getTarifP();
            }
        }

        // Calculate price from location
        if (!selectedLocations.isEmpty()) {
            String locationName = selectedLocations.get(0); // Only one location is allowed
            Lieu location = lieuxMap.get(locationName);

            if (location != null) {
                totalPrice += location.getPrice();
            }
        }

        // Update the price field
        priceField.setText(String.format("%.2f", totalPrice));
    }
}