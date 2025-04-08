package GoldenTouch.piDev.Controllers;

import GoldenTouch.piDev.Entities.*;
import GoldenTouch.piDev.Services.*;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Pos;
import javafx.geometry.Rectangle2D;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.*;
import javafx.scene.shape.Circle;
import javafx.stage.Screen;
import javafx.stage.Stage;
import javafx.util.Duration;
import java.io.IOException;
import java.sql.Timestamp;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

import javafx.animation.FadeTransition;
import javafx.scene.media.AudioClip;

public class AdminNotificationController {
    @FXML private VBox notificationsContainer;
    @FXML private Label adminNameLabel;
    @FXML private Label notificationCount;
    @FXML private ComboBox<String> filterComboBox;
    @FXML private Circle profilePic;
    @FXML private Circle onlineStatus;

    private NotificationAdminService notificationAdminService;
    private DemandePackService demandePackService;
    private PackService2 packService;
    private ServiceUser userService;
    private AudioClip notificationSound;
    private Thread notificationCheckerThread;
    private volatile boolean running = true;

    private Set<Integer> displayedNotificationIds = new HashSet<>(); // Track shown notifications

    public void initialize() {
        notificationAdminService = new NotificationAdminService();
        demandePackService = new DemandePackService();
        packService = new PackService2();
        userService = new ServiceUser();

        // Initialize notification sound
        notificationSound = new AudioClip(getClass().getResource("/sounds/notification.mp3").toExternalForm());

        // Setup filter combo box
        filterComboBox.setItems(FXCollections.observableArrayList(
                "Tous", "Non lus", "Lus", "Aujourd'hui", "Cette semaine"
        ));
        filterComboBox.setValue("Tous");
        filterComboBox.setOnAction(e -> refreshNotifications());

        // Initial load
        refreshNotifications();
        startNotificationChecker();
    }

    private void startNotificationChecker() {
        notificationCheckerThread = new Thread(() -> {
            while (running) {
                try {
                    Thread.sleep(30000); // Check every 30 seconds
                    Platform.runLater(this::checkNewNotifications);
                } catch (InterruptedException e) {
                    Thread.currentThread().interrupt();
                    break;
                }
            }
        });
        notificationCheckerThread.setDaemon(true);
        notificationCheckerThread.start();
    }

    @FXML
    private void goToLogn(MouseEvent mouseEvent) {
        RouterController.navigate("/interfaces/login.fxml");
    }

    private void playNotificationSound() {
        notificationSound.play();
        System.out.println("sound onnnnnn");
    }

    private void showNotificationBadge(int count) {
        notificationCount.setVisible(true); // Show the count inside the circle
        notificationCount.setText(String.valueOf(count)); // Set the count value
    }

    @FXML
    private void refreshNotifications() {
        notificationsContainer.getChildren().clear();
        List<NotificationAdmin> notifications = getFilteredNotifications();

        for (NotificationAdmin notification : notifications) {
            createNotificationCard(notification);
        }

        updateNotificationBadge();
    }

    private List<NotificationAdmin> getFilteredNotifications() {
        String filter = filterComboBox.getValue();
        List<NotificationAdmin> notifications;

        switch (filter) {
            case "Non lus":
                notifications = notificationAdminService.getUnreadNotifications(1);
                break;
            case "Lus":
                notifications = notificationAdminService.getReadNotifications(1);
                break;
            case "Aujourd'hui":
                notifications = notificationAdminService.getTodayNotifications(1);
                break;
            case "Cette semaine":
                notifications = notificationAdminService.getThisWeekNotifications(1);
                break;
            default:
                notifications = notificationAdminService.getNotificationsByAdminId(1);
                break;
        }

        // Sort notifications by dateCreation in descending order (latest first)
        notifications.sort((n1, n2) -> n2.getDateCreation().compareTo(n1.getDateCreation()));

        return notifications;
    }

    private void createNotificationCard(NotificationAdmin notification) {
        VBox card = new VBox(5);
        card.getStyleClass().add("notification-card");
        if (notification.getStatut() == NotificationAdmin.Statut.NON_LU) {
            card.getStyleClass().add("unread");
        }

        // User info and time
        HBox header = new HBox(10);
        header.setAlignment(Pos.CENTER_LEFT);

        Label userName = new Label(notification.getUserFullName());
        userName.getStyleClass().add("notification-username");

        Label time = new Label(formatDateTime(notification.getDateCreation()));
        time.getStyleClass().add("notification-time");

        Region spacer = new Region();
        HBox.setHgrow(spacer, Priority.ALWAYS);

        header.getChildren().addAll(userName, spacer, time);

        // Message
        Label message = new Label(notification.getMessage());
        message.getStyleClass().add("notification-message");
        message.setWrapText(true);

        // Actions
        HBox actions = new HBox(10);
        actions.setAlignment(Pos.CENTER_RIGHT);

        Button viewButton = new Button("Voir");
        viewButton.getStyleClass().add("action-button");
        viewButton.setOnAction(e -> viewNotificationDetails(notification));

        Button deleteButton = new Button("Supprimer");
        deleteButton.getStyleClass().add("delete-button");
        deleteButton.setOnAction(e -> handleDeleteNotification(notification));

        actions.getChildren().addAll(viewButton, deleteButton);

        card.getChildren().addAll(header, message, actions);

        // Add fade-in animation
        FadeTransition fadeIn = new FadeTransition(Duration.millis(500), card);
        fadeIn.setFromValue(0);
        fadeIn.setToValue(1);
        fadeIn.play();

        notificationsContainer.getChildren().add(card);
    }

    @FXML
    private void markAllAsRead() {
        notificationAdminService.markAllAsRead(1);
        refreshNotifications();
    }

    private String formatDateTime(Timestamp timestamp) {
        LocalDateTime dateTime = timestamp.toLocalDateTime();
        LocalDateTime now = LocalDateTime.now();

        if (dateTime.toLocalDate().equals(now.toLocalDate())) {
            return "Aujourd'hui " + dateTime.format(DateTimeFormatter.ofPattern("HH:mm"));
        } else if (dateTime.toLocalDate().equals(now.toLocalDate().minusDays(1))) {
            return "Hier " + dateTime.format(DateTimeFormatter.ofPattern("HH:mm"));
        } else {
            return dateTime.format(DateTimeFormatter.ofPattern("d MMM, HH:mm"));
        }
    }

    private void viewNotificationDetails(NotificationAdmin notification) {
        try {
            notification.setStatut(NotificationAdmin.Statut.LU);
            notificationAdminService.updateEntity(notification);

            DemandePack demandePack = demandePackService.getDemandePackById(notification.getDemandePackId());
            if (demandePack == null) {
                showAlert(Alert.AlertType.ERROR,"Error", "Could not find the requested pack");
                return;
            }

            Pack2 pack = packService.getPackById(demandePack.getPackId());
            // Note: pack can be null for new pack requests

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/CustomizePackView.fxml"));
            Parent root = loader.load();

            CustomizePackController controller = loader.getController();
            controller.initData(demandePack, pack);

            Stage stage = new Stage();
            stage.setTitle("Customize Pack");

            // Set the stage size to maximize
            Screen screen = Screen.getPrimary();
            Rectangle2D bounds = screen.getVisualBounds();

            stage.setX(bounds.getMinX());
            stage.setY(bounds.getMinY());
            stage.setWidth(bounds.getWidth());
            stage.setHeight(bounds.getHeight());

            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();

        } catch (IOException e) {
            e.printStackTrace();
            showAlert( Alert.AlertType.ERROR ,"Error", "Could not open pack customization window: " + e.getMessage());
        } catch (Exception e) {
            e.printStackTrace();
            showAlert(Alert.AlertType.ERROR ,"Error", "An unexpected error occurred: " + e.getMessage());
        }
    }

    private void handleDeleteNotification(NotificationAdmin notification) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Supprimer notification");
        alert.setHeaderText("Êtes-vous sûr de vouloir supprimer cette notification ?");
        alert.setContentText("Cette action est irréversible.");

        // Apply the custom CSS to the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        alert.showAndWait().ifPresent(response -> {
            if (response == ButtonType.OK) {
                notificationAdminService.deleteEntity(notification.getId());
                refreshNotifications();
            }
        });
    }

    private void updateNotificationBadge() {
        int unreadCount = notificationAdminService.getUnreadNotifications(1).size();
        System.out.println("Unread Notifications: " + unreadCount);  // Add this line for debugging
        if (unreadCount > 0) {
            showNotificationBadge(unreadCount);
        } else {
            notificationCount.setVisible(false);
        }
    }

    public void showAlert(Alert.AlertType alertType, String title, String content) {
        Alert alert = new Alert(alertType);
        alert.setTitle(title);
        alert.setHeaderText(null); // No header text
        alert.setContentText(content);

        // Load the CSS file for the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        // Show the alert and wait for user response
        alert.showAndWait();
    }

    private void checkNewNotifications() {
        List<NotificationAdmin> newNotifications = notificationAdminService.getNewNotifications(1);
        if (!newNotifications.isEmpty()) {
            boolean shouldPlaySound = false;

            for (NotificationAdmin notification : newNotifications) {
                if (!displayedNotificationIds.contains(notification.getId())) { // Ensure unique notification
                    displayedNotificationIds.add(notification.getId()); // Mark as shown
                    shouldPlaySound = true;

                    String userName = getUserName(notification.getUtilisateurId());
                    ToastNotification.show(
                            "Nouvelle demande de pack",
                            "L'utilisateur " + userName + " a demandé un nouveau pack"
                    );

                    // Add new notification at the top of the list
                    Platform.runLater(() -> {
                        createNotificationCard(notification);
                        notificationsContainer.getChildren().add(0, notificationsContainer.getChildren().remove(notificationsContainer.getChildren().size() - 1));
                    });
                }
            }

            if (shouldPlaySound) {
                playNotificationSound();
            }

            showNotificationBadge(newNotifications.size());
        }
    }

    private String getUserName(int userId) {
        try {
            User user = userService.getUserById(userId);
            return user != null ? user.getNom() + " " + user.getPrenom() : "Unknown User";
        } catch (Exception e) {
            System.err.println("Error getting user name: " + e.getMessage());
            return "Unknown User";
        }
    }

    @FXML
    private void showAddPackForm(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/Pack.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root, 1200, 800);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println("❗ Error loading dashboardClient.fxml");
        }
    }

    @FXML
    private void showAddPersoForm(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/Pack.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root, 1200, 800);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println("❗ Error loading dashboardClient.fxml");
        }
    }

    @FXML
    private void showAddMatForm(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/affiMat.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root, 1200, 800);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println("❗ Error loading dashboardClient.fxml");
        }
    }

    @FXML
    private void showAddLieuForm(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/Lieu.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root, 1200, 800);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println("❗ Error loading dashboardClient.fxml");
        }
    }

    @FXML
    private void showNotifications(ActionEvent event) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/interfaces/NotificationAdmin.fxml"));
            Parent root = loader.load();

            // Get the current stage
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            Scene scene = new Scene(root, 1200, 800);
            stage.setScene(scene);
            stage.show();
        } catch (IOException e) {
            e.printStackTrace();
            System.out.println("❗ Error loading dashboardClient.fxml");
        }
    }

    public void cleanup() {
        running = false;
        if (notificationCheckerThread != null) {
            notificationCheckerThread.interrupt();
        }
    }

    public void goToUsers(MouseEvent mouseEvent) {
        RouterController router = new RouterController();
        router.navigate("/interfaces/UsersCrud.fxml");
    }
}