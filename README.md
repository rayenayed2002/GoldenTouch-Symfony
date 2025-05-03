# 🎉 GoldenTouch Event Planner

GoldenTouch is a comprehensive event planning application built with **Symfony 6.4**. It facilitates seamless collaboration between **clients**, **personnel**, and **administrators** to organize and manage events efficiently.

---

## 📚 Table of Contents

- [✨ Features](#-features)  
- [🛠️ Installation](#-installation)  
- [🚀 Usage](#-usage)  
- [👥 User Roles](#-user-roles)  
- [🧰 Technologies Used](#-technologies-used)  
- [🤝 Contributing](#-contributing)  
- [📄 License](#-license)  

---

## ✨ Features

✅ Event creation with materials, venues, and personnel  
✅ Reservation and package management  
✅ Shopping cart with Stripe payment integration  
✅ Automatic invoice generation  
✅ Personnel scheduling system  
✅ Admin dashboard with full control  
✅ Client feedback and review system  
✅ ✨ Gemini AI integration for auto-generated event details  
✅ ☁️ Weather forecasts for event dates  
✅ 🎫 QR Code & Barcode generation for tickets and materials  
✅ 🗓️ Google Calendar sync  
✅ 📧 Email notifications for updates  
✅ 🗺️ Map integration for event locations  
✅ 🔍 Advanced search & filtering  
✅ 🚫 Content moderation via Bad Words API  

---

## 🛠️ Installation

### Prerequisites

- PHP >= 8.1  
- Composer  
- Symfony CLI (optional but recommended)  
- MySQL or PostgreSQL  

### Steps

```bash
# 1. Clone the repository
git clone https://github.com/rayenayed2002/GoldenTouch-Symfony.git
cd GoldenTouch-Symfony

# 2. Install PHP dependencies
composer install

# 3. Copy environment variables and configure
cp .env.example .env
# Edit .env with your DB and API keys

# 4. Set up the database
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# 5. Run the server
symfony server:start
```

---

## 🚀 Usage

Visit the app at: [http://localhost:8000](http://localhost:8000)

You can register and log in as:

- **Client**
- **Personnel**
- **Admin**

Explore the application based on your assigned role.

---

## 👥 User Roles

### 👤 Client

- Create/manage events  
- Add venues, materials, and personnel  
- View packages & reservations  
- Leave feedback  
- Checkout via Stripe  

### 👨‍🔧 Personnel

- View assigned events & schedules  

### 👨‍💼 Administrator

- Manage all system entities (events, packages, materials, etc.)  
- Moderate content & oversee users  

---

## 🧰 Technologies Used

| Category        | Technology                                                       |
|----------------|-------------------------------------------------------------------|
| **Framework**   | Symfony 6.4                                                      |
| **Languages**   | PHP, JavaScript                                                  |
| **Frontend**    | Twig, Stimulus                                                   |
| **Database**    | Doctrine ORM                                                     |
| **APIs**        | Gemini AI, Stripe, Google Calendar, Weather, Maps, Bad Words API |
| **Other Tools** | QR/Barcode Generators, Email Notifications, Advanced Search      |

---

## 🤝 Contributing

1. Fork the repository  
2. Create your feature branch:  
   ```bash
   git checkout -b feature/my-feature
   ```
3. Commit your changes:  
   ```bash
   git commit -m "Add my feature"
   ```
4. Push to the branch:  
   ```bash
   git push origin feature/my-feature
   ```
5. Submit a pull request ✅

---

## 📄 License

This project is licensed under a **proprietary license**.  
Contact the author for more details.
