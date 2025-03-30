package GoldenTouch.piDev.Controllers;

import GoldenTouch.piDev.Entities.*;
import GoldenTouch.piDev.Interfaces.InitializableController;
import GoldenTouch.piDev.Services.*;
import com.jfoenix.controls.JFXButton;
import java.nio.charset.StandardCharsets;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.geometry.HPos;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.*;
import javafx.stage.Stage;
import org.json.JSONArray;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.nio.charset.StandardCharsets;
import java.sql.Timestamp;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.time.temporal.ChronoUnit;
import java.util.*;
import java.util.stream.Collectors;

public class UserPack2Controller implements InitializableController {
    public static User user = new User();

    private RecommendationSystem recommendationSystem;

    private static final DateTimeFormatter DATE_FORMATTER = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");

    @FXML
    private GridPane packsGrid;
    @FXML
    private BorderPane mainLayout;
    @FXML
    private ScrollPane contentScrollPane;
    @FXML
    private TextArea commentaireField;
    @FXML
    private ListView<Avis> avisListView;
    @FXML
    private ComboBox<String> categoryFilterComboBox;
    @FXML
    private VBox chatBox;
    @FXML
    private ScrollPane chatScrollPane;
    @FXML
    private VBox chatMessages;
    @FXML
    private TextField chatInput;

    @FXML
    private DatePicker datePicker;

    @FXML
    private TabPane mainTabPane;
    @FXML
    private VBox sidebarVBox;

    // Add these fields to your class
    @FXML
    private VBox enhancedTrendingSection;
    @FXML
    private HBox trendingCarousel;
    @FXML
    private StackPane trendingCarouselContent;
    @FXML
    private HBox featuredPackContainer;
    @FXML
    private VBox recommendationReasons;
    @FXML
    private Label trendingSubheader;
    @FXML
    private HBox trendingFilters;

    @FXML
    private GridPane trendingGrid;

    private int carouselIndex = 0;
    private List<Pack2> currentTrendingPacks = new ArrayList<>();
    private Pack2 featuredPack;
    private List<String> recentlyViewedCategories = new ArrayList<>();
    private Random random = new Random();

    @FXML
    private Label weatherLabel;

    @FXML
    private TextField searchField;

    private String currentPackContext;

    private boolean isInDetailsView = false; // Indicates if the user is in a pack details view

    private static final DateTimeFormatter API_DATE_FORMAT =
            DateTimeFormatter.ofPattern("yyyy-MM-dd");

    RouterController Router = new RouterController();
    private final AvisService avisService = new AvisService();
    private final PackService2 packService = new PackService2();
    private final PanierService basketService = new PanierService();
    private final NotificationAdminService notificationAdminService = new NotificationAdminService();

    private Pack2 currentPack;
    private int userId;

    private static final String API_KEY = "588de2d7fdb6d5138f737397d84367bb";
    private static final String CITY = "Tunis";

    private Map<String, Pack2> packNameCache = new HashMap<>();
    private CohereAI cohereAI;

    public void initialize(URL location, ResourceBundle resources) {
        // This method is automatically called by JavaFX after loading the FXML
        this.recommendationSystem = new RecommendationSystem(packService);
        this.cohereAI = new CohereAI();

        // Ensure "All Packs" tab is selected by default
        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getText().equals("Tous les Packs")) {
                mainTabPane.getSelectionModel().select(tab);
                break;
            }
        }

        initializeCategoryFilter();
        initializeChat();
        displayPacks();
        setupAvisListView();
        initializeWeather();

        searchField.textProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue.isEmpty()) {
                displayPacks();
            } else {
                searchPacks(newValue.toLowerCase());
            }
        });

        // Just initialize the trending grid for later use
        trendingGrid = (GridPane) lookup("#trendingGrid");

        displayPacks();
    }

    @Override
    public void init(Integer id, Integer eventId) {
        this.userId = id;
        System.out.println("User ID: " + userId);

        this.recommendationSystem = new RecommendationSystem(packService);
        this.cohereAI = new CohereAI();

        initializeCategoryFilter();

        searchField.textProperty().addListener((observable, oldValue, newValue) -> {
            if (newValue.isEmpty()) {
                displayPacks();  // Show all packs if the search field is empty
            } else {
                searchPacks(newValue.toLowerCase()); // Filter packs as the user types
            }
        });

        initializeChat();

        displayPacks();

        // Ensure "All Packs" tab is selected by default
        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getText().equals("Tous les Packs")) {
                mainTabPane.getSelectionModel().select(tab);
                break;
            }
        }

        // Add a listener to handle tab selection
        mainTabPane.getSelectionModel().selectedItemProperty().addListener((obs, oldTab, newTab) -> {
            if (newTab != null) {
                if (newTab.getText().equals("Tous les Packs")) {
                    displayPacks(); // Display all packs
                } else if (newTab.getText().equals("Packs Tendance")) {
                    showTrendingPacks(); // Display trending packs
                }
            }
        });

        refreshTrendingPacks();
    }

    private void initializeCategoryFilter() {
        ObservableList<String> categories = FXCollections.observableArrayList();
        categories.add("Tout"); // Add "Tout" option
        for (CategorieEvent category : CategorieEvent.values()) {
            categories.add(category.name()); // Add all categories
        }
        categoryFilterComboBox.setItems(categories);

        // Set "Tout" as the default selected option
        categoryFilterComboBox.getSelectionModel().selectFirst();

        // Add a listener to handle category selection
        categoryFilterComboBox.getSelectionModel().selectedItemProperty().addListener((obs, oldVal, newVal) -> {
            if (newVal != null) {
                filterPacksByCategory(newVal); // Filter packs based on the selected category
            }
        });
    }

    private void filterPacksByCategory(String selectedCategory) {
        List<Pack2> packs = packService.getAllData();
        packsGrid.getChildren().clear();

        String searchQuery = searchField.getText().toLowerCase();

        int numColumns = 4;
        double columnWidth = 200.0;
        int col = 0, row = 0;

        for (Pack2 pack : packs) {
            boolean matchesSearch = searchQuery.isEmpty() ||
                    pack.getNom().toLowerCase().contains(searchQuery) ||
                    pack.getDescription().toLowerCase().contains(searchQuery);

            // If "Tout" is selected, skip category filtering
            boolean matchesCategory = selectedCategory.equals("Tout") ||
                    pack.getCategorie().name().equals(selectedCategory);

            if (matchesSearch && matchesCategory) {
                VBox packCard = createPackCard(pack);
                packCard.setMaxWidth(columnWidth - 20);
                packCard.setPrefWidth(columnWidth - 20);
                packCard.setMinWidth(columnWidth - 20);
                GridPane.setHalignment(packCard, HPos.CENTER);
                GridPane.setMargin(packCard, new Insets(10));

                packsGrid.add(packCard, col, row);
                col++;
                if (col == numColumns) {
                    col = 0;
                    row++;
                }
            }
        }
    }

    private void searchPacks(String query) {
        List<Pack2> packs = packService.getAllData();
        packsGrid.getChildren().clear();

        String selectedCategory = categoryFilterComboBox.getSelectionModel().getSelectedItem();

        int numColumns = 4;
        double columnWidth = 200.0;

        int col = 0, row = 0;
        for (Pack2 pack : packs) {
            boolean matchesSearch = pack.getNom().toLowerCase().contains(query) ||
                    pack.getDescription().toLowerCase().contains(query) ||
                    pack.getCategorie().name().toLowerCase().contains(query);

            boolean matchesCategory = selectedCategory.equals("Tout") ||
                    pack.getCategorie().name().equals(selectedCategory);

            if (matchesSearch && matchesCategory) {
                VBox packCard = createPackCard(pack);
                packCard.setMaxWidth(columnWidth - 20);
                packCard.setPrefWidth(columnWidth - 20);
                packCard.setMinWidth(columnWidth - 20);
                GridPane.setHalignment(packCard, HPos.CENTER);
                GridPane.setMargin(packCard, new Insets(10));

                packsGrid.add(packCard, col, row);
                col++;
                if (col == numColumns) {
                    col = 0;
                    row++;
                }
            }
        }
    }

    @FXML
    private void goToLogn(MouseEvent mouseEvent) {
        RouterController.navigate("/interfaces/login.fxml");
    }

    @FXML
    private void showAddMat(ActionEvent event) {
        Router.navigateC("/interfaces/affichMate.fxml", userId, null, affichMateController.class);
    }

    private void setupAvisListView() {
        avisListView.setCellFactory(lv -> new ListCell<Avis>() {
            @Override
            protected void updateItem(Avis avis, boolean empty) {
                super.updateItem(avis, empty);
                if (empty || avis == null) {
                    setText(null);
                    setGraphic(null);
                } else {
                    // Create a formatted display for each review
                    VBox reviewBox = new VBox(5);
                    reviewBox.setPadding(new Insets(10));
                    reviewBox.getStyleClass().add("review-item");

                    // User name and date
                    HBox header = new HBox(10);
                    Label nameLabel = new Label(avis.getFullName());
                    nameLabel.getStyleClass().add("review-name");
                    nameLabel.setStyle("-fx-font-weight: bold;");

                    Label dateLabel = new Label(avis.getDateCreation().toString());
                    dateLabel.getStyleClass().add("review-date");
                    dateLabel.setStyle("-fx-text-fill: #888;");

                    header.getChildren().addAll(nameLabel, dateLabel);

                    // Review content
                    Label commentLabel = new Label(avis.getCommentaire());
                    commentLabel.setWrapText(true);
                    commentLabel.getStyleClass().add("review-comment");

                    reviewBox.getChildren().addAll(header, commentLabel);

                    setGraphic(reviewBox);
                    setText(null);
                }
            }
        });
    }

    void displayPacks() {
        List<Pack2> packs = packService.getAllData();
        packsGrid.getChildren().clear();
        packsGrid.getColumnConstraints().clear();
        packsGrid.getRowConstraints().clear();

        // Configure columns
        int numColumns = 4;
        double columnWidth = 200.0;

        for (int i = 0; i < numColumns; i++) {
            ColumnConstraints cc = new ColumnConstraints();
            cc.setMinWidth(columnWidth);
            cc.setPrefWidth(columnWidth);
            cc.setMaxWidth(columnWidth);
            cc.setHalignment(HPos.CENTER);
            packsGrid.getColumnConstraints().add(cc);
        }

        // Add pack cards
        int col = 0, row = 0;
        for (Pack2 pack : packs) {
            VBox packCard = createPackCard(pack);
            packCard.setMaxWidth(columnWidth - 20);
            packCard.setPrefWidth(columnWidth - 20);
            packCard.setMinWidth(columnWidth - 20);
            GridPane.setHalignment(packCard, HPos.CENTER);
            GridPane.setMargin(packCard, new Insets(10));

            packsGrid.add(packCard, col, row);
            col++;
            if (col == numColumns) {
                col = 0;
                row++;
            }
        }

        // Center the GridPane
        packsGrid.setAlignment(Pos.CENTER);
    }

    private VBox createPackCard(Pack2 pack) {
        VBox card = new VBox(10);
        card.getStyleClass().add("pack-card");
        card.setAlignment(Pos.CENTER);

        // Set fixed dimensions
        double cardWidth = 180.0; // Slightly smaller than column width to account for padding
        card.setPrefWidth(cardWidth);
        card.setMinWidth(cardWidth);
        card.setMaxWidth(cardWidth);
        card.setPrefHeight(250);
        card.setMaxHeight(250);

        ImageView imageView = createPackImageView(pack);
        imageView.setFitWidth(cardWidth - 20); // Account for padding

        Label name = new Label(pack.getNom());
        name.getStyleClass().add("title");
        name.setWrapText(true);
        name.setAlignment(Pos.CENTER);
        name.setMaxWidth(cardWidth - 20);

        Label price = new Label(String.format("%.2f TND", pack.getPrice()));
        price.getStyleClass().add("price");

        card.getChildren().addAll(imageView, name, price);
        card.setOnMouseClicked(e -> showPackDetails(pack));

        return card;
    }

    private ImageView createPackImageView(Pack2 pack) {
        ImageView imageView = new ImageView();
        imageView.setPreserveRatio(true);
        imageView.setFitWidth(180);
        imageView.setFitHeight(150);

        try {
            // Assuming pack.getPhoto() returns something like "Images/birthday.jpg"
            String imagePath = pack.getPhoto(); // The relative path stored in the database
            URL imageUrl = getClass().getResource("/" + imagePath); // Ensure the path is relative to the resources folder

            if (imageUrl != null) {
                imageView.setImage(new Image(imageUrl.toExternalForm(), 180, 150, true, true)); // Preserve ratio
            } else {
                throw new IOException("Image non trouvée: " + imagePath);
            }
        } catch (Exception e) {
            System.err.println("Erreur lors du chargement de l'image: " + e.getMessage());
        }

        return imageView;
    }

    @FXML
    private void showPackDetails(Pack2 pack) {
        this.currentPack = pack;
        this.currentPackContext = pack.getNom(); // Set the current pack context
        this.isInDetailsView = true; // Indicate that the user is in the details view
        datePicker.setVisible(true);
        datePicker.setManaged(true);
        updatePackDetailsView();
    }

    private void updatePackDetailsView() {
        if (currentPack == null) {
            showPacks();
            return;
        }

        ScrollPane scrollPane = new ScrollPane();
        scrollPane.setFitToWidth(true);
        scrollPane.getStyleClass().add("pack-details-scroll");

        VBox detailsBox = new VBox(20);
        detailsBox.setPadding(new Insets(20));
        detailsBox.getStyleClass().add("pack-details");

        Button backButton = new Button("← Retour aux Packs");
        backButton.setOnAction(e -> showPack());
        backButton.getStyleClass().addAll("form-button", "back-button");

        ImageView imageView = createPackImageView(currentPack);
        imageView.setFitWidth(600);
        imageView.setFitHeight(300);

        Label nameLabel = new Label(currentPack.getNom());
        nameLabel.getStyleClass().add("detail-title");

        GridPane infoGrid = createInfoGrid();

        // Weather Container
        VBox weatherContainer = new VBox(15);
        weatherContainer.setStyle("-fx-background-color: #f5f7fa; -fx-padding: 15; -fx-background-radius: 10;");
        weatherContainer.setAlignment(Pos.CENTER);
        weatherContainer.setMaxWidth(600);

        Label weatherTitle = new Label("Prévisions météo pour votre événement");
        weatherTitle.setStyle("-fx-font-size: 18px; -fx-font-weight: bold;");

        datePicker = new DatePicker();
        datePicker.setPromptText("Sélectionnez une date");
        datePicker.setValue(LocalDate.now());
        datePicker.setStyle("-fx-font-size: 14px;");

        weatherLabel = new Label("Sélectionnez une date pour voir les prévisions météo");
        weatherLabel.getStyleClass().add("weather-label");

        datePicker.setOnAction(e -> {
            LocalDate selectedDate = datePicker.getValue();
            if (selectedDate != null) {
                updateWeatherForSelectedDate(selectedDate);
            }
        });

        weatherContainer.getChildren().addAll(weatherTitle, datePicker, weatherLabel);

        Button buyButton = createBuyButton();

        VBox contentBox = new VBox(20);
        contentBox.getChildren().addAll(
                imageView, nameLabel, infoGrid,
                weatherContainer, // Add the weather container here
                buyButton
        );

        // Always display reviews for all users
        VBox reviewSection = createReviewSection();
        contentBox.getChildren().add(reviewSection);

        // Check if the user has purchased the pack to enable/disable the comment field
        boolean hasPurchased = hasUserPurchasedPack(userId, currentPack.getId());
        commentaireField.setDisable(!hasPurchased);
        if (!hasPurchased) {
            commentaireField.setPromptText("Vous devez acheter ce pack pour laisser un avis");
        }

        contentBox.setAlignment(Pos.TOP_CENTER);

        detailsBox.getChildren().addAll(backButton, contentBox);

        scrollPane.setContent(detailsBox);
        mainLayout.setCenter(scrollPane);

        // Display reviews for the pack
        displayAvisForPack(currentPack.getId());
    }

    private void updateWeatherForSelectedDate(LocalDate selectedDate) {
        weatherLabel.setText("Chargement des prévisions météo...");
        new Thread(() -> {
            String weatherInfo = fetchWeatherForDate(selectedDate);
            Platform.runLater(() -> {
                // Update the weather UI with the fetched data
                if (weatherInfo != null && !weatherInfo.isEmpty()) {
                    weatherLabel.setText(weatherInfo);
                } else {
                    weatherLabel.setText("Impossible de récupérer les prévisions météo.");
                }
            });
        }).start();
    }

    private void initializeWeather() {
        if (datePicker != null) {
            datePicker.valueProperty().addListener((obs, oldDate, newDate) -> {
                if (newDate != null) {
                    updateWeatherForSelectedDate(newDate);
                }
            });
            datePicker.setValue(LocalDate.now());
        } else {
            System.err.println("DatePicker n'est pas correctement initialisé!");
        }
    }

    private GridPane createInfoGrid() {
        GridPane infoGrid = new GridPane();
        infoGrid.setHgap(20);
        infoGrid.setVgap(10);
        infoGrid.setAlignment(Pos.CENTER);

        addInfoToGrid(infoGrid, "Prix:", String.format("%.2f TND", currentPack.getPrice()), 0);
        addInfoToGrid(infoGrid, "Capacité:", String.valueOf(currentPack.getCapacity()), 1);
        addInfoToGrid(infoGrid, "Durée:", calculateDuration(currentPack.getDate(), currentPack.getEndDate().toString()) + " jours", 2);
        addInfoToGrid(infoGrid, "Catégorie:", currentPack.getCategorie().name(), 3);
        addInfoToGrid(infoGrid, "Description:", currentPack.getDescription(), 4);

        return infoGrid;
    }

    private void addWeatherDetail(GridPane grid, String iconName, String label, String value, int row) {
        // Create icon
        Label icon = new Label(getIconText(iconName));
        icon.setStyle("-fx-font-size: 20px;"); // Adjust size as needed

        // Create labels
        Label nameLabel = new Label(label);
        nameLabel.setStyle("-fx-font-size: 14px; -fx-text-fill: rgba(255,255,255,0.8);");

        Label valueLabel = new Label(value);
        valueLabel.setStyle("-fx-font-size: 14px; -fx-font-weight: bold; -fx-text-fill: white;");

        // Add to grid
        HBox iconBox = new HBox(5, icon, nameLabel);
        iconBox.setAlignment(Pos.CENTER_LEFT);

        grid.add(iconBox, 0, row);
        grid.add(valueLabel, 1, row);
    }
    // Update the getIconText method to return Unicode characters for weather icons
    private String getIconText(String iconName) {
        switch (iconName) {
            case "thermometer": return "🌡️";
            case "droplet": return "💧";
            case "wind": return "💨";
            default: return "•";
        }
    }

    private String fetchWeatherForDate(LocalDate date) {
        if (date.isAfter(LocalDate.now().plusDays(5))) {
            Platform.runLater(() -> {
                weatherLabel.setText("Les prévisions ne sont disponibles que pour les 5 prochains jours");
            });
            return "";
        }

        String url = String.format(
                "https://api.openweathermap.org/data/2.5/forecast?q=%s&appid=%s&units=metric&lang=fr&cnt=40",
                CITY, API_KEY
        );

        try {
            URL weatherUrl = new URL(url);
            HttpURLConnection connection = (HttpURLConnection) weatherUrl.openConnection();
            connection.setRequestMethod("GET");

            BufferedReader reader = new BufferedReader(
                    new InputStreamReader(connection.getInputStream(), StandardCharsets.UTF_8));

            JSONObject jsonResponse = new JSONObject(String.join("", reader.lines().toList()));
            JSONArray forecasts = jsonResponse.getJSONArray("list");

            // Find the best matching forecast for the selected date
            JSONObject bestForecast = null;
            String targetDate = date.format(API_DATE_FORMAT);

            for (int i = 0; i < forecasts.length(); i++) {
                JSONObject forecast = forecasts.getJSONObject(i);
                String forecastDate = forecast.getString("dt_txt").split(" ")[0];
                if (forecastDate.equals(targetDate)) {
                    bestForecast = forecast;
                    if (forecast.getString("dt_txt").contains("12:00:00")) {
                        break; // Prefer midday forecast
                    }
                }
            }

            if (bestForecast == null) {
                Platform.runLater(() -> {
                    weatherLabel.setText("Aucune donnée disponible pour cette date");
                });
                return "";
            }

            // Parse forecast data
            JSONObject main = bestForecast.getJSONObject("main");
            JSONObject wind = bestForecast.getJSONObject("wind");
            JSONObject weather = bestForecast.getJSONArray("weather").getJSONObject(0);

            double temp = main.getDouble("temp");
            double feelsLike = main.getDouble("feels_like");
            int humidity = main.getInt("humidity");
            double windSpeed = wind.getDouble("speed");
            String description = weather.getString("description");
            String iconCode = weather.getString("icon");

            Platform.runLater(() -> updateWeatherUI(date, temp, feelsLike, humidity, windSpeed, description, iconCode));

            return String.format("Météo pour %s: %.1f°C, %s",
                    date.format(DateTimeFormatter.ofPattern("EEEE d MMMM yyyy", Locale.FRENCH)),
                    temp,
                    description);

        } catch (Exception e) {
            Platform.runLater(() -> {
                weatherLabel.setText("Erreur de récupération des données météo");
            });
            return "";
        }
    }

    private void updateWeatherUI(LocalDate date, double temp, double feelsLike, int humidity,
                                 double windSpeed, String description, String iconCode) {
        Platform.runLater(() -> {
            String backgroundColor = determineWeatherColor(iconCode);
            String textColor = "#ffffff";

            VBox weatherBox = new VBox(10);
            weatherBox.setPadding(new Insets(15));
            weatherBox.setStyle(String.format(
                    "-fx-background-color: %s; " +
                            "-fx-background-radius: 15; " +
                            "-fx-effect: dropshadow(three-pass-box, rgba(0,0,0,0.3), 10, 0, 0, 5);",
                    backgroundColor
            ));

            // Date label
            Label dateLabel = new Label(date.format(DateTimeFormatter.ofPattern("EEEE, d MMMM yyyy", Locale.FRENCH)));
            dateLabel.setStyle("-fx-font-size: 16px; -fx-font-weight: bold; -fx-text-fill: " + textColor + ";");

            // Weather icon
            ImageView weatherIcon = createWeatherIcon(iconCode);

            // Temperature and description
            Label tempLabel = new Label(String.format("%.1f°C", temp));
            tempLabel.setStyle("-fx-font-size: 36px; -fx-font-weight: bold; -fx-text-fill: " + textColor + ";");

            Label descriptionLabel = new Label(capitalizeFirstLetter(description));
            descriptionLabel.setStyle("-fx-font-size: 18px; -fx-text-fill: " + textColor + ";");

            // Weather details grid
            GridPane detailsGrid = new GridPane();
            detailsGrid.setHgap(20);
            detailsGrid.setVgap(10);
            detailsGrid.setAlignment(Pos.CENTER);

            // Add weather details using the existing method
            addWeatherDetail(detailsGrid, "thermometer", "Ressenti", String.format("%.1f°C", feelsLike), 0);
            addWeatherDetail(detailsGrid, "droplet", "Humidité", humidity + "%", 1);
            addWeatherDetail(detailsGrid, "wind", "Vent", String.format("%.1f km/h", windSpeed * 3.6), 2);

            // Add components to weather box
            weatherBox.getChildren().addAll(
                    dateLabel,
                    weatherIcon,
                    tempLabel,
                    descriptionLabel,
                    detailsGrid
            );

            // Replace existing weather display
            if (weatherLabel.getParent() instanceof Pane parent) {
                parent.getChildren().remove(weatherLabel);
                parent.getChildren().add(weatherBox);
            }
        });
    }

    private ImageView createWeatherIcon(String iconCode) {
        ImageView weatherIcon = new ImageView();
        weatherIcon.setFitWidth(80);
        weatherIcon.setFitHeight(80);
        try {
            String iconUrl = String.format("https://openweathermap.org/img/wn/%s@2x.png", iconCode);
            Image image = new Image(iconUrl, true);
            image.progressProperty().addListener((obs, oldVal, newVal) -> {
                if (newVal.doubleValue() == 1.0) {
                    weatherIcon.setImage(image);
                }
            });
        } catch (Exception e) {
            System.err.println("Erreur lors du chargement de l'icône météo: " + e.getMessage());
        }
        return weatherIcon;
    }

    private String determineWeatherColor(String iconCode) {
        return switch (iconCode) {
            case "01d", "01n" -> "#FFF3E0";  // Soft orange for clear sky
            case "02d", "02n" -> "#BBDEFB";  // Light blue
            case "03d", "03n" -> "#90CAF9";  // Medium blue
            case "04d", "04n" -> "#78909C";  // Dark gray
            case "09d", "09n" -> "#1976D2";  // Dark blue
            case "10d", "10n" -> "#1565C0";  // Navy blue
            case "11d", "11n" -> "#424242";  // Dark gray
            case "13d", "13n" -> "#B3E5FC";  // Ice blue
            case "50d", "50n" -> "#78909C";  // Mist gray
            default -> "#E8F5E9";            // Soft green default
        };
    }

    private String capitalizeFirstLetter(String input) {
        if (input == null || input.isEmpty()) return input;
        return input.substring(0, 1).toUpperCase() + input.substring(1);
    }

    private Button createBuyButton() {
        Button buyButton = new Button("Acheter ce Pack");
        buyButton.setOnAction(e -> handleBuyPack(currentPack));
        buyButton.getStyleClass().add("buy-button");
        return buyButton;
    }

    public VBox createReviewSection() {
        VBox reviewSection = new VBox(20);
        reviewSection.getStyleClass().add("review-section2");

        Label reviewTitle = new Label("Laisser un Avis");
        reviewTitle.getStyleClass().add("section-title2");

        commentaireField.setPromptText("Entrez votre commentaire...");
        commentaireField.getStyleClass().add("commentaires-field2");

        Button submitButton = new Button("Soumettre l'Avis");
        submitButton.setOnAction(e -> submitAvis());
        submitButton.getStyleClass().add("dialog-button");

        Label avisTitle = new Label("Avis des Utilisateurs");
        avisTitle.getStyleClass().add("section-title2");

        // Create a new ListView for reviews
        avisListView = new ListView<>();
        avisListView.getStyleClass().add("review-box2");

        // Set up the cell factory to properly display reviews
        setupAvisListView();

        // Wrap avisListView in a ScrollPane for better control
        ScrollPane scrollPane = new ScrollPane(avisListView);
        scrollPane.setFitToWidth(true);
        scrollPane.getStyleClass().add("review-scroll-pane2");

        reviewSection.getChildren().addAll(reviewTitle, commentaireField, submitButton, avisTitle, scrollPane);

        return reviewSection;
    }

    @FXML
    public void showPacks() {
        // Reset the main layout to show the content scroll pane
        mainLayout.setCenter(contentScrollPane);

        // Clear the current pack context
        this.currentPackContext = null;
        this.isInDetailsView = false;

        // Refresh the packs display
        displayPacks();

        // IMPORTANT: Ensure the "All Packs" tab is selected
        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getText().equals("Tous les Packs")) {
                mainTabPane.getSelectionModel().select(tab);
                break;
            }
        }
    }

    @FXML
    public void showPack() {
        Router.navigateC("/interfaces/user-pack-view.fxml", userId, null, PanierController.class);
    }

    private DemandePackService demandePackService = new DemandePackService();

    @FXML
    private void handleAddEventClick(ActionEvent event) {
        Router.navigateC("/interfaces/addEvent.fxml", userId, null, AddEventController.class);
    }

    @FXML
    private void handlePanierClick(ActionEvent event) {
        Router.navigateC("/interfaces/Panier.fxml", userId, null, PanierController.class);
    }

    @FXML
    private void handleDraftsClick(ActionEvent event) {
        Router.navigateC("/interfaces/Drafts.fxml", userId, null, DraftController.class);
    }

    @FXML
    private void handleMesCommandesClick(ActionEvent event) {
        Router.navigateC("/interfaces/MyCommands.fxml", userId, null, MyCommandsController.class);
    }

    private String showCustomMessageDialog() {
        TextInputDialog dialog = new TextInputDialog();
        dialog.setTitle("Message Personnalisé");
        dialog.setHeaderText("Veuillez entrer un message personnalisé pour votre demande de pack.");
        dialog.setContentText("Message:");

        // Load the CSS file for the dialog
        dialog.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        Optional<String> result = dialog.showAndWait();
        return result.orElse("Nouvelle demande de pack: " + currentPack.getNom());
    }

    private void handleBuyPack(Pack2 pack) {
        System.out.println("Entrée dans la méthode handleBuyPack.");

        LocalDate selectedDate = datePicker.getValue();
        System.out.println("Date sélectionnée depuis DatePicker: " + selectedDate);

        if (selectedDate == null) {
            showErrorAlert("Erreur", "Veuillez sélectionner une date avant d'acheter.");
            System.out.println("La date sélectionnée est nulle. Affichage d'une alerte d'erreur.");
            return;
        }

        System.out.println("ID utilisateur: " + userId);
        System.out.println("ID du pack depuis l'objet pack: " + pack.getId());

        // Show the custom message dialog and get the user's input
        String customMessage = showCustomMessageDialog();

        // Create a new DemandePack object
        DemandePack demandePack = new DemandePack();
        demandePack.setUtilisateurId(userId);
        demandePack.setPackId(pack.getId());
        demandePack.setEventId(pack.getId());
        demandePack.setPrix(pack.getPrice());
        demandePack.setPrix(pack.getPrice());
        demandePack.setStatut(DemandePack.Statut.EN_ATTENTE);
        demandePack.setDateDemande(selectedDate.atStartOfDay());

        System.out.println("Objet DemandePack créé.");

        // Add the DemandePack to the database
        try {
            demandePackService.addEntity(demandePack);
            System.out.println("DemandePack ajouté à la base de données avec succès.");

            int demandePackId = demandePack.getId();
            System.out.println("ID DemandePack inséré: " + demandePackId);

            // Create a notification for the admin
            NotificationAdmin notification = new NotificationAdmin();
            notification.setAdminId(1); // Assuming admin ID is 1
            notification.setUtilisateurId(userId);
            notification.setDemandePackId(demandePackId);
            notification.setMessage("Nouvelle demande de pack: " + pack.getNom() + "\nMessage client : " + customMessage); // Notification message
            notification.setStatut(NotificationAdmin.Statut.NON_LU);
            notification.setDateCreation(new Timestamp(System.currentTimeMillis()));

            // Add the notification to the database
            NotificationAdminService notificationAdminService = new NotificationAdminService();
            notificationAdminService.addNotification(notification);
            System.out.println("Notification créée pour l'administrateur.");

            showInfoAlert("Demande Réussie", "La demande pour le pack " + pack.getNom() + " a été enregistrée.");
            showTrendingPacks();

        } catch (Exception e) {
            System.err.println("Erreur lors de l'ajout de DemandePack à la base de données: " + e.getMessage());
            e.printStackTrace();
            showErrorAlert("Erreur", "Une erreur est survenue lors de l'ajout de la demande.");
        }

        // Refresh the page to update the UI (if needed)
        updatePackDetailsView();
        System.out.println("updatePackDetailsView appelé.");
        System.out.println("Sortie de la méthode handleBuyPack.");
    }

    private String calculateDuration(String startDate, String endDate) {
        if (startDate == null || endDate == null) {
            return "N/A"; // Handle cases where dates are not available
        }

        try {
            // Define the date format (adjust this to match your date format)
            DateTimeFormatter formatter = DateTimeFormatter.ofPattern("yyyy-MM-dd");

            // Parse the start and end dates
            LocalDate start = LocalDate.parse(startDate, formatter);
            LocalDate end = LocalDate.parse(endDate, formatter);

            // Calculate the duration in days
            long duration = ChronoUnit.DAYS.between(start, end);

            return String.valueOf(duration);
        } catch (Exception e) {
            System.err.println("Erreur lors du calcul de la durée: " + e.getMessage());
            return "N/A"; // Return "N/A" if there's an error parsing the dates
        }
    }

    // avis no bad words hopefully
    private static final List<String> BAD_WORDS = Arrays.asList(
            "badword1", "badword2", "badword3", "badword4" // Add more words here
    );

    public List<String> findAllBadWords(String commentaire) {
        List<String> foundBadWords = new ArrayList<>();
        for (String word : BAD_WORDS) {
            if (commentaire.toLowerCase().contains(word.toLowerCase())) {
                foundBadWords.add(word);
            }
        }
        return foundBadWords;
    }

    private void highlightAllBadWords(List<String> badWords) {
        String commentaire = commentaireField.getText();
        commentaireField.setStyle("-fx-highlight-fill: red;"); // Set highlight color

        for (String badWord : badWords) {
            int startIndex = 0;
            while ((startIndex = commentaire.toLowerCase().indexOf(badWord.toLowerCase(), startIndex)) != -1) {
                int endIndex = startIndex + badWord.length();
                commentaireField.selectRange(startIndex, endIndex); // Highlight the bad word
                startIndex = endIndex; // Move to the next occurrence
            }
        }
    }

    private boolean showBadWordsAlert(List<String> badWords) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Mots inappropriés détectés");
        alert.setHeaderText(null);

        // Create a message listing all bad words
        StringBuilder message = new StringBuilder("Votre commentaire contient les mots inappropriés suivants :\n");
        for (String word : badWords) {
            message.append("- ").append(word).append("\n");
        }
        message.append("\nSouhaitez-vous les modifier ou continuer ?");

        alert.setContentText(message.toString());

        // Apply the custom CSS to the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        ButtonType editButton = new ButtonType("Modifier", ButtonBar.ButtonData.CANCEL_CLOSE);
        ButtonType proceedButton = new ButtonType("Continuer", ButtonBar.ButtonData.OK_DONE);
        alert.getButtonTypes().setAll(editButton, proceedButton);

        Optional<ButtonType> result = alert.showAndWait();
        return result.isPresent() && result.get() == proceedButton;
    }

    private String replaceAllBadWords(String commentaire) {
        for (String word : BAD_WORDS) {
            commentaire = commentaire.replaceAll("(?i)" + word, "****"); // Case-insensitive replacement
        }
        return commentaire;
    }

    @FXML
    private void submitAvis() {
        String commentaire = commentaireField.getText().trim();

        if (commentaire.isEmpty()) {
            showErrorAlert("Erreur", "Veuillez entrer un commentaire avant de soumettre.");
            return;
        }

        if (currentPack == null) {
            showErrorAlert("Erreur", "Veuillez sélectionner un pack avant de soumettre un avis.");
            return;
        }

        // Check if user has purchased the pack
        if (!hasUserPurchasedPack(userId, currentPack.getId())) {
            showErrorAlert("Erreur", "Vous devez acheter ce pack avant de pouvoir laisser un avis.");
            return;
        }

        // Check for all bad words
        List<String> badWords = findAllBadWords(commentaire);
        if (!badWords.isEmpty()) {
            highlightAllBadWords(badWords); // Highlight all bad words in the comment field
            boolean proceed = showBadWordsAlert(badWords); // Show alert box with all bad words

            if (!proceed) {
                return; // User chose to edit, so do not submit
            }

            // Replace all bad words with ****
            commentaire = replaceAllBadWords(commentaire);
        }

        // Submit the review
        avisService.ajouterAvis(userId, currentPack.getId(), commentaire);
        commentaireField.clear();
        displayAvisForPack(currentPack.getId());
        showInfoAlert("Avis soumis", "Votre avis a été soumis avec succès.");
    }

    private void displayAvisForPack(int packId) {
        List<Avis> avisList = avisService.obtenirAvisPourPack(packId);
        System.out.println(avisList);
        avisListView.getItems().clear();
        avisListView.getItems().addAll(avisList);
    }

    private boolean hasUserPurchasedPack(int userId, int packId) {
        return basketService.isPackInBasket(userId, packId);
    }

    private void showErrorAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);

        // Apply the custom CSS to the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        alert.showAndWait();
    }

    private void showInfoAlert(String title, String message) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(message);

        // Apply the custom CSS to the alert
        alert.getDialogPane().getStylesheets().add(
                getClass().getResource("/interfaces/alert-styles.css").toExternalForm()
        );

        alert.showAndWait();
    }

    private void addInfoToGrid(GridPane grid, String label, String value, int row) {
        Label labelNode = new Label(label);
        labelNode.getStyleClass().add("info-label");
        Label valueNode = new Label(value);
        valueNode.getStyleClass().add("info-value");
        grid.add(labelNode, 0, row);
        grid.add(valueNode, 1, row);
    }

    @FXML
    private void handleAddPersoClick(ActionEvent event) {
        Router.navigateC("/interfaces/ReserverPerso.fxml", userId, null, ReserverPersoController.class);
    }

    @FXML
    private void handleAddLieuxClick(ActionEvent event) {
        Router.navigateC("/interfaces/ViewLieu.fxml", userId, null, UserLieuViewController.class);
    }

    // Chat with AI assistant
    @FXML
    private void toggleChat() {
        boolean isVisible = chatBox.isVisible();
        chatBox.setVisible(!isVisible);
        chatBox.setManaged(!isVisible);

        if (!isVisible) {
            scrollToBottom();
            chatInput.requestFocus();
        }
    }

    private void scrollToBottom() {
        Platform.runLater(() -> {
            chatScrollPane.setVvalue(1.0);
        });
    }

    @FXML
    private void sendChatMessage() {
        String message = chatInput.getText().trim();
        if (!message.isEmpty()) {
            addMessageToChat("Vous", message);
            chatInput.clear();

            // Check if the message contains a pack name
            String packName = extractPackName(message);
            if (packName != null) {
                currentPackContext = packName;
            }

            // Simulate a delay to make the bot feel more natural
            simulateBotThinking(message); // Pass the message to simulateBotThinking
        }
    }

    private void addMessageToChat(String sender, String message) {
        VBox messageBox = new VBox();
        messageBox.setMaxWidth(200);
        messageBox.getStyleClass().add(sender.equals("Vous") ? "user-message" : "bot-message");

        Label senderLabel = new Label(sender);
        senderLabel.getStyleClass().add("message-sender");

        Label messageLabel = new Label(message);
        messageLabel.setWrapText(true);
        messageLabel.getStyleClass().add("message-content");

        messageBox.getChildren().addAll(senderLabel, messageLabel);

        if (sender.equals("Vous")) {
            messageBox.setAlignment(Pos.CENTER_RIGHT);
        } else {
            messageBox.setAlignment(Pos.CENTER_LEFT);
        }

        chatMessages.getChildren().add(messageBox);
        scrollToBottom();
    }

    @FXML
    private void sendSuggestedMessage(ActionEvent event) {
        Button button = (Button) event.getSource();
        String message = button.getText();
        chatInput.setText(message); // Set the message in the input field
        sendChatMessage(); // Send the message
    }

    private void simulateBotThinking(String message) {
        new Thread(() -> {
            try {
                Thread.sleep(1000); // Simulate thinking
                String response = cohereAI.processChatMessage(message);
                Platform.runLater(() -> addMessageToChat("Bot", response));
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }).start();
    }

    private int extractPackId(String message) {
        // Extract pack ID from the message (e.g., "materials for pack 123")
        String[] words = message.split(" ");
        for (int i = 0; i < words.length; i++) {
            if (words[i].equalsIgnoreCase("pack") && i + 1 < words.length) {
                try {
                    return Integer.parseInt(words[i + 1]);
                } catch (NumberFormatException e) {
                    return -1;
                }
            }
        }
        return -1;
    }

    // Initialize the chat with better welcome message
    private void initializeChat() {
        chatBox.setVisible(false);
        chatBox.setManaged(false);

        chatInput.setOnAction(event -> sendChatMessage());

        // Add a welcome message
        addMessageToChat("Bot", "Bonjour! 👋 Comment puis-je vous aider avec nos packs d'événements aujourd'hui? Vous pouvez demander:\n" +
                "- Liste des packs\n" +
                "- Détails du pack [nom]\n" +
                "- Matériels du pack\n" +
                "- Lieux du pack\n" +
                "- Personnel du pack\n" +
                "- Prix du pack");

        // Pre-cache all packs for faster lookup
        List<Pack2> allPacks = packService.getAllData();
        for (Pack2 pack : allPacks) {
            packNameCache.put(pack.getNom().toLowerCase(), pack);
        }
    }

    private String extractPackName(String message) {
        // Try to find "pack [name]" pattern
        String[] words = message.split(" ");
        for (int i = 0; i < words.length - 1; i++) {
            if (words[i].equalsIgnoreCase("pack")) {
                // Get all words after "pack" as the name
                StringBuilder packName = new StringBuilder();
                for (int j = i + 1; j < words.length; j++) {
                    // Stop at certain keywords
                    if (words[j].equals("matériels") || words[j].equals("lieux") ||
                            words[j].equals("personnel") || words[j].equals("prix")) {
                        break;
                    }
                    packName.append(words[j]).append(" ");
                }
                return packName.toString().trim();
            }
        }

        // Try to find "détails du [name]" pattern
        for (int i = 0; i < words.length - 2; i++) {
            if (words[i].equalsIgnoreCase("détails") && words[i+1].equalsIgnoreCase("du")) {
                StringBuilder packName = new StringBuilder();
                for (int j = i + 2; j < words.length; j++) {
                    packName.append(words[j]).append(" ");
                }
                return packName.toString().trim();
            }
        }

        return null;
    }

    private void showTrendingPacks() {
        // Get recommendations from the recommendation system
        List<Pack2> trendingPacks = recommendationSystem.getRecommendations(userId, 8);
        currentTrendingPacks = new ArrayList<>(trendingPacks);

        // Select a featured pack (the highest ranked one)
        featuredPack = trendingPacks.isEmpty() ? null : trendingPacks.get(0);

        // Update the UI
        updateTrendingCarousel();
        updateFeaturedPack();
        updateRecommendationReasons();

        // Ensure the "Trending Packs" tab exists
        boolean trendingTabExists = false;
        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getText().equals("Packs Tendance")) {
                trendingTabExists = true;
                break;
            }
        }

        if (!trendingTabExists) {
            Tab trendingTab = new Tab("Packs Tendance");
            trendingTab.setClosable(false); // Prevent the user from closing the trending tab
            mainTabPane.getTabs().add(trendingTab);
        }

        // Select the trending tab
        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getText().equals("Packs Tendance")) {
                mainTabPane.getSelectionModel().select(tab);
                break;
            }
        }

        // Update subheader with personalized message
        updateTrendingSubheader();
    }

    private VBox createEnhancedTrendingCard(Pack2 pack, int rank) {
        VBox card = new VBox(15);
        card.getStyleClass().add("trending-card");
        card.setAlignment(Pos.TOP_CENTER);

        // Set fixed dimensions
        double cardWidth = 230.0;
        card.setPrefWidth(cardWidth);
        card.setMinWidth(cardWidth);
        card.setMaxWidth(cardWidth);
        card.setPrefHeight(350);
        card.setMaxHeight(350);

        // Create trending number indicator
        StackPane rankIndicator = new StackPane();
        rankIndicator.getStyleClass().add("trending-rank");
        Label rankLabel = new Label("#" + rank);
        rankLabel.setStyle("-fx-font-weight: bold;");
        rankIndicator.getChildren().add(rankLabel);

        // Create trending badge
        Label trendingBadge = new Label("TENDANCE");
        trendingBadge.getStyleClass().add("trending-badge");

        // Create header with rank and badge
        HBox header = new HBox(10);
        header.setAlignment(Pos.CENTER_LEFT);
        header.getChildren().addAll(rankIndicator, trendingBadge);

        // Create image view
        ImageView imageView = createPackImageView(pack);
        imageView.setFitWidth(cardWidth - 30);
        imageView.setFitHeight(150);

        // Create name label
        Label name = new Label(pack.getNom());
        name.getStyleClass().add("trending-title");
        name.setWrapText(true);
        name.setAlignment(Pos.CENTER);
        name.setMaxWidth(cardWidth - 30);

        // Create price label
        Label price = new Label(String.format("%.2f TND", pack.getPrice()));
        price.getStyleClass().add("trending-price");

        // Create category label
        Label category = new Label(pack.getCategorie().name());
        category.getStyleClass().add("trending-category");

        // Add all elements to the card
        card.getChildren().addAll(header, imageView, name, price, category);

        // Add click event
        card.setOnMouseClicked(e -> {
            showPackDetails(pack);
        });

        return card;
    }

    private void updateFeaturedPack() {
        if (featuredPackContainer == null) {
            System.err.println("featuredPackContainer est null");
            return;
        }

        featuredPackContainer.getChildren().clear();

        if (featuredPack == null) {
            Label noFeaturedLabel = new Label("Aucun pack en vedette disponible");
            noFeaturedLabel.getStyleClass().add("trending-subheader");
            featuredPackContainer.getChildren().add(noFeaturedLabel);
            return;
        }

        // Create featured pack card (larger and more detailed)
        VBox featuredCard = new VBox(15);
        featuredCard.getStyleClass().add("trending-card");
        featuredCard.setAlignment(Pos.TOP_CENTER);
        featuredCard.setPrefWidth(500);
        featuredCard.setMaxWidth(500);

        // Create image view (larger)
        ImageView imageView = createPackImageView(featuredPack);
        imageView.setFitWidth(450);
        imageView.setFitHeight(250);

        // Create title
        Label name = new Label(featuredPack.getNom());
        name.getStyleClass().add("trending-title");
        name.setStyle("-fx-font-size: 24px;");
        name.setWrapText(true);
        name.setAlignment(Pos.CENTER);
        name.setMaxWidth(450);

        // Create description
        Label description = new Label(featuredPack.getDescription());
        description.setWrapText(true);
        description.setMaxWidth(450);

        // Create price and category in a horizontal box
        HBox detailsBox = new HBox(20);
        detailsBox.setAlignment(Pos.CENTER);

        Label price = new Label(String.format("%.2f TND", featuredPack.getPrice()));
        price.getStyleClass().add("trending-price");

        Label category = new Label(featuredPack.getCategorie().name());
        category.getStyleClass().add("trending-category");
        category.setStyle("-fx-font-size: 14px;");

        detailsBox.getChildren().addAll(price, category);

        // Create "View Details" button
        Button viewDetailsButton = new Button("Voir les détails");
        viewDetailsButton.getStyleClass().add("dialog-button");
        viewDetailsButton.setOnAction(e -> {
            showPackDetails(featuredPack);
        });

        // Add all elements to the card
        featuredCard.getChildren().addAll(imageView, name, description, detailsBox, viewDetailsButton);

        // Create stats section
        VBox statsBox = new VBox(10);
        statsBox.setAlignment(Pos.TOP_LEFT);
        statsBox.setPrefWidth(300);
        statsBox.setMaxWidth(300);

        Label statsTitle = new Label("Pourquoi ce pack est tendance");
        statsTitle.getStyleClass().add("trending-title");
        statsTitle.setStyle("-fx-font-size: 18px;");

        // Create some stats based on real app data
        VBox statsList = new VBox(8);

        // Get actual statistics from the app
        int totalDemands = packService.getTotalPackDemands();
        int packDemands = packService.getPackDemandCount(featuredPack.getId());
        double popularityPercentage = totalDemands > 0 ? (packDemands * 100.0) / totalDemands : 0;

        // Get actual user ratings
        double averageRating = avisService.getAverageRatingForPack(featuredPack.getId());
        double ratingPercentage = averageRating * 110; // Convert 5-star rating to percentage

        // Get recent reservations
        int recentReservations = packService.getRecentReservationsCount(featuredPack.getId(), 30); // Last 30 days
        int totalReservations = packService.getTotalPackDemands();
        double reservationPercentage = totalReservations > 0 ? (recentReservations * 100.0) / totalReservations : 0;

        statsList.getChildren().addAll(
                createStatItem("Popularité", popularityPercentage),
                createStatItem("Évaluation des utilisateurs", ratingPercentage),
                createStatItem("Réservations récentes", reservationPercentage)
        );

        // Create tags section
        Label tagsTitle = new Label("Tags associés");
        tagsTitle.getStyleClass().add("trending-subheader");

        FlowPane tagsPane = new FlowPane(8, 8);
        tagsPane.setPrefWrapLength(280);

        // Generate some tags based on the pack category and type
        List<String> tags = generateTagsForPack(featuredPack);
        for (String tag : tags) {
            Label tagLabel = new Label(tag);
            tagLabel.getStyleClass().add("trending-tag");
            tagsPane.getChildren().add(tagLabel);
        }

        statsBox.getChildren().addAll(statsTitle, statsList, new Separator(), tagsTitle, tagsPane);

        // Add both sections to the featured container
        featuredPackContainer.getChildren().addAll(featuredCard, statsBox);
    }

    private void updateTrendingCarousel() {
        if (trendingCarouselContent == null) {
            System.err.println("trendingCarouselContent est null");
            return;
        }

        trendingCarouselContent.getChildren().clear();

        if (currentTrendingPacks.isEmpty()) {
            Label noPacksLabel = new Label("Aucun pack tendance disponible");
            noPacksLabel.getStyleClass().add("trending-subheader");
            trendingCarouselContent.getChildren().add(noPacksLabel);
            return;
        }

        // Create a horizontal box to hold visible trending packs
        HBox visiblePacks = new HBox(20);
        visiblePacks.setAlignment(Pos.CENTER);

        // Determine which packs to show in the carousel (3 at a time)
        int startIndex = carouselIndex;
        int endIndex = Math.min(startIndex + 3, currentTrendingPacks.size());

        for (int i = startIndex; i < endIndex; i++) {
            Pack2 pack = currentTrendingPacks.get(i);
            VBox packCard = createEnhancedTrendingCard(pack, i + 1);
            visiblePacks.getChildren().add(packCard);
        }

        trendingCarouselContent.getChildren().add(visiblePacks);
    }

    private HBox createStatItem(String label, double percentage) {
        HBox statItem = new HBox(10);
        statItem.setAlignment(Pos.CENTER_LEFT);

        Label statLabel = new Label(label + ":");
        statLabel.getStyleClass().add("trending-similarity-label");
        statLabel.setPrefWidth(150);

        ProgressBar progressBar = new ProgressBar(percentage / 100);
        progressBar.getStyleClass().add("trending-progress");
        progressBar.setPrefWidth(100);

        Label percentageLabel = new Label(String.format("%.0f%%", percentage));
        percentageLabel.getStyleClass().add("trending-similarity-value");

        statItem.getChildren().addAll(statLabel, progressBar, percentageLabel);

        return statItem;
    }

    private void updateRecommendationReasons() {
        if (recommendationReasons == null) {
            System.err.println("recommendationReasons est null");
            return;
        }

        recommendationReasons.getChildren().clear();

        // Add recommendation reasons based on real app data
        List<String> reasons = new ArrayList<>();

        // Get user's purchase history
        List<Pack2> userPurchases = packService.getUserPurchases(userId);
        if (!userPurchases.isEmpty()) {
            reasons.add("Basé sur vos achats précédents");
        }

        // Check if the pack matches user preferences
        if (demandePackService.matchesUserPreferences(userId, featuredPack.getId())) {
            reasons.add("Correspond à vos préférences d'événements");
        }

        // Check if the pack is similar to viewed packs
        if (!recentlyViewedCategories.isEmpty() &&
                recentlyViewedCategories.contains(featuredPack.getCategorie().name())) {
            reasons.add("Similaire aux packs que vous avez consultés");
        }

        // Add seasonal recommendation if applicable
        if (packService.isSeasonalPack(featuredPack.getId())) {
            reasons.add("Idéal pour la saison actuelle");
        }

        // If no specific reasons, add a default one
        if (reasons.isEmpty()) {
            reasons.add("Recommandé en fonction des tendances actuelles");
        }

        // Add the reasons to the UI
        for (String reason : reasons) {
            recommendationReasons.getChildren().add(createReasonItem(reason));
        }
    }

    private HBox createReasonItem(String reason) {
        HBox reasonItem = new HBox(10);
        reasonItem.setAlignment(Pos.CENTER_LEFT);

        Label bulletPoint = new Label("•");
        bulletPoint.setStyle("-fx-text-fill: #e8b64c; -fx-font-size: 18px;");

        Label reasonLabel = new Label(reason);
        reasonLabel.setStyle("-fx-text-fill: #7f8c8d; -fx-font-size: 14px;");

        reasonItem.getChildren().addAll(bulletPoint, reasonLabel);

        return reasonItem;
    }

    private void updateTrendingSubheader() {
        if (trendingSubheader == null) {
            System.err.println("trendingSubheader est null");
            return;
        }

        // Create a personalized message based on time of day
        LocalTime now = LocalTime.now();
        String timeBasedGreeting;

        if (now.getHour() >= 5 && now.getHour() < 12) {
            timeBasedGreeting = "Bonjour ! Voici vos recommandations matinales";
        } else if (now.getHour() >= 12 && now.getHour() < 18) {
            timeBasedGreeting = "Bon après-midi ! Découvrez ces packs tendance";
        } else {
            timeBasedGreeting = "Bonsoir ! Découvrez les packs tendance de ce soir";
        }

        trendingSubheader.setText(timeBasedGreeting);
    }

    private double generateRandomPercentage(int min, int max) {
        return min + (random.nextDouble() * (max - min));
    }

    private List<String> generateTagsForPack(Pack2 pack) {
        List<String> tags = new ArrayList<>();

        // Add category as a tag
        tags.add(pack.getCategorie().name());

        // Add price range tag
        if (pack.getPrice() < 100) {
            tags.add("Économique");
        } else if (pack.getPrice() < 300) {
            tags.add("Milieu de gamme");
        } else {
            tags.add("Premium");
        }

        // Add capacity tag
        if (pack.getCapacity() < 20) {
            tags.add("Petit Groupe");
        } else if (pack.getCapacity() < 50) {
            tags.add("Groupe Moyen");
        } else {
            tags.add("Grand Groupe");
        }

        // Add some generic tags based on category
        switch (pack.getCategorie()) {
            case MARIAGE:
                tags.addAll(Arrays.asList("Mariage", "Cérémonie", "Romantique", "Célébration"));
                break;
            case ANNIVERSAIRE:
                tags.addAll(Arrays.asList("Anniversaire", "Fête", "Célébration", "Amusement"));
                break;
            case CONFERENCE:
                tags.addAll(Arrays.asList("Business", "Professionnel", "Entreprise", "Réunion"));
                break;
            case FESTIVAL:
                tags.addAll(Arrays.asList("Musique", "Divertissement", "Plein air", "Amusement"));
                break;
            default:
                tags.addAll(Arrays.asList("Événement", "Rassemblement", "Célébration"));
                break;
        }

        // Shuffle and limit to 8 tags
        Collections.shuffle(tags);
        return tags.subList(0, Math.min(tags.size(), 8));
    }

    @FXML
    private void refreshTrendingPacks() {
        // Show a loading indicator
        trendingSubheader.setText("Actualisation des recommandations...");

        // Simulate a delay for the refresh
        new Thread(() -> {
            try {
                Thread.sleep(800);

                // Get fresh recommendations
                List<Pack2> freshRecommendations = recommendationSystem.getRecommendations(userId, 8);

                // Update on the JavaFX thread
                Platform.runLater(() -> {
                    currentTrendingPacks = freshRecommendations;
                    featuredPack = freshRecommendations.isEmpty() ? null : freshRecommendations.get(0);
                    carouselIndex = 0;

                    updateTrendingCarousel();
                    updateFeaturedPack();
                    updateRecommendationReasons();
                    updateTrendingSubheader();
                });
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        }).start();
    }

    @FXML
    private void filterTrendingPacks(ActionEvent event) {
        // Show a loading indicator
        if (trendingSubheader != null) {
            trendingSubheader.setText("Chargement des packs filtrés...");
        }

        // Get the clicked button
        Button clickedButton = (Button) event.getSource();
        String filter = clickedButton.getText();

        // Update button styles
        for (Node node : trendingFilters.getChildren()) {
            if (node instanceof Button) {
                Button btn = (Button) node;
                if (btn == clickedButton) {
                    btn.getStyleClass().add("active");
                } else {
                    btn.getStyleClass().remove("active");
                }
            }
        }

        // Apply the filter
        List<Pack2> filteredPacks = new ArrayList<>();
        List<Pack2> allPacks = packService.getAllData();

        switch (filter) {
            case "Tous":
                // Get personalized recommendations for the user
                filteredPacks = recommendationSystem.getRecommendations(userId, 8);
                if (trendingSubheader != null) {
                    trendingSubheader.setText("Packs recommandés pour vous");
                }
                break;

            case "Populaires":
                // Use the recommendation system to get trending packs (most purchased)
                filteredPacks = recommendationSystem.getTrendingPacks(8);
                if (trendingSubheader != null) {
                    trendingSubheader.setText("Packs les plus populaires");
                }
                break;

            case "Nouveaux":
                // Get the newest packs based on creation date (assuming the list is ordered by ID)
                // Reverse the list to get newest first (highest IDs)
                List<Pack2> reversedPacks = new ArrayList<>(allPacks);
                Collections.reverse(reversedPacks); // Newest packs will be first
                filteredPacks = reversedPacks.stream()
                        .limit(8)
                        .collect(Collectors.toList());
                if (trendingSubheader != null) {
                    trendingSubheader.setText("Nouveaux packs ajoutés récemment");
                }
                break;

            case "Similaires aux précédents":
                // Filter based on recently viewed categories
                if (!recentlyViewedCategories.isEmpty()) {
                    // Get all recently viewed categories (not just the last one)
                    Set<String> recentCategories = new HashSet<>(recentlyViewedCategories);

                    // Filter packs that match any of the recent categories
                    filteredPacks = allPacks.stream()
                            .filter(p -> recentCategories.contains(p.getCategorie().name()))
                            .limit(8)
                            .collect(Collectors.toList());

                    if (trendingSubheader != null && !recentlyViewedCategories.isEmpty()) {
                        String lastCategory = recentlyViewedCategories.get(recentlyViewedCategories.size() - 1);
                        trendingSubheader.setText("Packs similaires à vos consultations récentes: " + lastCategory);
                    }
                }

                // If no matches or no recent views, fall back to recommendations
                if (filteredPacks.isEmpty()) {
                    filteredPacks = recommendationSystem.getRecommendations(userId, 8);
                    if (trendingSubheader != null) {
                        trendingSubheader.setText("Recommandations personnalisées");
                    }
                }
                break;
        }

        // Update the UI with filtered packs
        currentTrendingPacks = filteredPacks;
        featuredPack = filteredPacks.isEmpty() ? null : filteredPacks.get(0);
        carouselIndex = 0;

        // Update the UI components
        updateTrendingCarousel();
        updateFeaturedPack();
    }

    @FXML
    private void navigateTrendingCarousel(ActionEvent event) {
        Button button = (Button) event.getSource();
        String direction = button.getText();

        if (direction.equals("<")) {
            // Navigate left
            carouselIndex = Math.max(0, carouselIndex - 3);
        } else {
            // Navigate right
            int maxStartIndex = Math.max(0, currentTrendingPacks.size() - 3);
            carouselIndex = Math.min(maxStartIndex, carouselIndex + 3);
        }

        updateTrendingCarousel();
    }

    private Node lookup(String id) {
        if (mainTabPane == null) return null;

        for (Tab tab : mainTabPane.getTabs()) {
            if (tab.getContent() instanceof Parent) {
                Node found = ((Parent) tab.getContent()).lookup(id);
                if (found != null) return found;
            }
        }
        return null;
    }
}