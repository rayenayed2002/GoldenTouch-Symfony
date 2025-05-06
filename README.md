# 🎉 GoldenTouch Planificateur d'Événements

GoldenTouch est une application complète de planification d'événements développée avec **Symfony 6.4**. Elle facilite la collaboration fluide entre les **clients**, **personnels** et **administrateurs** pour organiser et gérer efficacement des événements.

---

## 📚 Table des Matières

- [✨ Fonctionnalités](#-fonctionnalités)  
- [🛠️ Installation](#-installation)  
- [🚀 Utilisation](#-utilisation)  
- [👥 Rôles Utilisateurs](#-rôles-utilisateurs)  
- [🧰 Technologies Utilisées](#-technologies-utilisées)  
- [🤝 Contribution](#-contribution)  
- [👥 Contributeurs](#-contributeurs)  
- [🏫 École](#-école)  
- [📄 Licence](#-licence)  

---

## ✨ Fonctionnalités

✅ Création d'événements avec gestion des matériaux, lieux et personnel  
✅ Gestion des réservations et des forfaits  
✅ Panier avec intégration de paiement via Stripe  
✅ Génération automatique de factures  
✅ Système de planification du personnel  
✅ Tableau de bord administrateur complet  
✅ Système de retours et d’avis clients  
✅ ✨ Intégration de Gemini AI pour génération automatique de détails  
✅ ☁️ Prévisions météo pour les dates d'événements  
✅ 🎫 Génération de QR codes & codes-barres pour billets et matériaux  
✅ 🗓️ Synchronisation avec Google Calendar  
✅ 📧 Notifications par email  
✅ 🗺️ Intégration de cartes pour les lieux  
✅ 🔍 Recherche et filtrage avancés  
✅ 🚫 Modération de contenu via l’API Bad Words  

---

## 🛠️ Installation

### Prérequis

- PHP >= 8.1  
- Composer  
- Symfony CLI (optionnel mais recommandé)  
- MySQL ou PostgreSQL  

### Étapes

```bash
# 1. Cloner le dépôt
git clone https://github.com/rayenayed2002/GoldenTouch-Symfony.git
cd GoldenTouch-Symfony

# 2. Installer les dépendances PHP
composer install

# 3. Copier et configurer les variables d’environnement
cp .env.example .env
# Modifier .env avec votre configuration DB et vos clés API

# 4. Créer la base de données
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# 5. Lancer le serveur
symfony server:start

```

---

## 🚀 Utilisation

Accédez à l’application sur: [http://localhost:8000](http://localhost:8000)

Vous pouvez vous inscrire et vous connecter en tant que :

- **Client**
- **Personnel**
- **Administrateur**

Explorez l’application selon votre rôle attribué.

---

## 👥 Rôles Utilisateurs

### 👤 Client

- Créer et gérer des événements  
- Ajouter des lieux, matériaux, et personnel  
- Voir les forfaits et réservations 
- Laisser des avis
- Paiement via Stripe

### 👨‍🔧 Personnel

- Consulter les événements et plannings assignés 

### 👨‍💼 Administrator

- Gérer toutes les entités (événements, forfaits, matériaux, etc.) 
- Modérer le contenu et superviser les utilisateurs

---

## 🧰 Technologies Utilisées

| Category        | Technology                                                       |
|----------------|-------------------------------------------------------------------|
| **Framework**   | Symfony 6.4                                                      |
| **Langages**   | PHP, JavaScript                                                  |
| **Frontend**    | Twig, Stimulus                                                   |
| **Base de Données**    | Doctrine ORM                                                     |
| **APIs**        | Gemini AI, Stripe, Google Calendar, Weather, Maps, Bad Words API |
| **Outils Divers** | QR/Barcode Generators, Email Notifications, Advanced Search      |

---

## 🤝 contribution

1. Forkez le dépôt  
2. Créez une branche pour votre fonctionnalité : 
   ```bash
   git checkout -b feature/my-feature
   ```
3. Validez vos modifications : 
   ```bash
   git commit -m "Add my feature"
   ```
4. Poussez vers votre branche :  
   ```bash
   git push origin feature/my-feature
   ```
5. Ouvrez une pull request ✅

---

---

## 👥 Contributeurs

| Nom              | Profile  Github                                            |
|-------------------|--------------------------------------------------------------|
| [Souhe Lekhlifi](https://github.com/souhekh)         | 🔗 |
| [Rayen Ayed](https://github.com/rayenayed2002)       | 🔗 |
| [Nassim Maaoui](https://github.com/iborntowin)       | 🔗 |
| [Malik Gachar](https://github.com/MalikGACHAR)       | 🔗 |
| [Khalil Limem](https://github.com/Khalil-Lm)         | 🔗 |
| [Fatma Boubakri](https://github.com/Boubakrifatma)   | 🔗 |
| **Coach:** [Ghada Benkhalifa](https://github.com/BenKhalifaGHADA) | 🔗 |

---

## 🏫 École

**ESPRIT - École Supérieure Privée d'Ingénierie et de Technologies**

![Logo ESPRIT](uploads/Logo_ESPRIT_Ariana.jpg)


## 📄 License

Ce projet est soumis à une licence propriétaire.
Veuillez contacter l’auteur pour plus d’informations.
