package GoldenTouch.piDev.Entities;

import java.time.LocalDateTime;
import java.util.Date;

public class Event {
    private int id;
    private String nom;
    private int userId;
    private CategorieEvent categorie;
    private String photo;
    private String date;
    private String type;

    public Event (){};
    public Event( String nom, int userId, CategorieEvent categorie, String photo, String date) {
        this.nom = nom;
        this.userId = userId;
        this.categorie = categorie;
        this.photo = photo;
        this.date = date;
    }
    public Event( String nom,CategorieEvent categorie, String photo, String date, int id) {
        this.id=id;
        this.nom = nom;
        this.categorie = categorie;
        this.photo = photo;
        this.date = date;
    }
    public Event(int id, String nom, String photo, CategorieEvent categorie, Date date) {
        this.id = id;
        this.nom = nom;
        this.photo = photo;
        this.categorie = categorie;
        this.date = date.toString(); // Convert Date to String
    }

    public Event(int userId ,String nom) {
        this.nom = nom;

    }
    public Event( int id,String nom, int userId, CategorieEvent categorie, String photo, String date) {
        this.id=id;
        this.nom = nom;
        this.userId = userId;
        this.categorie = categorie;
        this.photo = photo;
        this.date = date;
    }

    public Event(int eventId) {
        this.id = eventId;

    }

    public Event(int id, String nom, LocalDateTime date) {
        this.id = id;
        this.nom = nom;
        this.date = date.toString();
    }

    public Event(String nomEvent, LocalDateTime localDateTime) {
        this.nom = nomEvent;
        this.date = localDateTime.toString();
    }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getUserId() {
        return userId;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public CategorieEvent getCategorie() {
        return categorie;
    }

    public void setCategorie(CategorieEvent categorie) {
        this.categorie = categorie;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public String getDate() {
        return date;
    }
    public void setDate(String date) {
        this.date = date;
    }



    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    @Override
    public String toString() {
        return "Event{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                ", userId=" + userId +
                ", categorie=" + categorie +
                ", photo='" + photo + '\'' +
                ", date='" + date + '\'' +
                '}';
    }
}