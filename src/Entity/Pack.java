package GoldenTouch.piDev.Entities;

import java.util.Objects;

public class Pack extends Event {

    private int id;
    private String description;
    private double prix; // renamed from price to prix to match your table
    private int capacité; // renamed from capacity to capacité
    private int durée; // renamed from duration to durée
    private String endDate;
    private int eventId;
    private int adminId;

    // Constructor
    public Pack(int id, String description, double prix, int capacité, int durée, String endDate, int eventId, int adminId) {
        this.id = id;
        this.description = description;
        this.prix = prix;
        this.capacité = capacité;
        this.durée = durée;
        this.endDate = endDate;
        this.eventId = eventId;
        this.adminId = adminId;
    }

    public Pack(String description, double prix, int capacité, int durée, String endDate, int eventId, int adminId) {
        this.description = description;
        this.prix = prix;
        this.capacité = capacité;
        this.durée = durée;
        this.endDate = endDate;
        this.eventId = eventId;
        this.adminId = adminId;
    }

    public Pack() {

    }

    // Getters and Setters
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public double getPrix() {
        return prix;
    }

    public void setPrix(double prix) {
        this.prix = prix;
    }

    public int getCapacité() {
        return capacité;
    }

    public void setCapacité(int capacité) {
        this.capacité = capacité;
    }

    public int getDurée() {
        return durée;
    }

    public void setDurée(int durée) {
        this.durée = durée;
    }

    public String getEndDate() {
        return endDate;
    }

    public void setEndDate(String endDate) {
        this.endDate = endDate;
    }

    public int getEventId() {
        return eventId;
    }

    public void setEventId(int eventId) {
        this.eventId = eventId;
    }

    public int getAdminId() {
        return adminId;
    }

    public void setAdminId(int adminId) {
        this.adminId = adminId;
    }

    // Override equals and hashCode based on id to ensure correct comparison and use in collections
    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Pack pack = (Pack) o;
        return id == pack.id;
    }

    @Override
    public int hashCode() {
        return Objects.hash(id);
    }

    @Override
    public String toString() {
        return "Pack{" +
                "id=" + id +
                ", description='" + description + '\'' +
                ", prix=" + prix +
                ", capacité=" + capacité +
                ", durée=" + durée +
                ", endDate='" + endDate + '\'' +
                ", eventId=" + eventId +
                ", adminId=" + adminId +
                '}';
    }
}
