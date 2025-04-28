# User-Crud-Symfony5
Users CRUD using SB admin template with login, register and roles requires php: >=7.2.5/Symfony 5.4
## features 
### Languages and frameworks
* PHP >=7.2.5
* MySQL (MariaDB)
* HTML / CSS
* Javascript (Aos, Glightbox, Isotope, Validate, Purecounter, swipper, Waypoints, Bootstrap)
* Bootstrap (v5)
* Google fonts (Open Sans)
* Font awesome 5
### Entities
* User
### Pages
* home
* user profile
* login
* registration
* admin section and dashboard


## To initialize the project 
* clone the repository: `git clone https://github.com/malekkadri/User-Crud-Symfony5.git`
* Install all packages : `composer install`
* set up a `.env.local` file from `.env` with:
    * MySQL credentials, server address, server port, database name
    * MAILER_DSN info to send emails (i use Mailhog for dev and a SMTP server for prod)
* Create new database: `symfony console doctrine:database:create`
* Build the migration: `symfony console make:migration`
* Export into MySQL: `symfony console doctrine:migrations:migrate`
* Install CKEditor : `symfony console ckeditor:install`
* Install CKEditor assets : `symfony console assets:install public`
* Install Elfinder (file browser for CKEditor) : `symfony console elfinder:install`
* Change to PRODUCTION in `.env.local` (APP_ENV=prod)
* Empty cache : `symfony console cache:clear`
* Register a first account (/register) then change its role to ["ROLE_ADMIN"] in database
* Login with this admin account and connect to admin dashboard (/login)
* ... then start to create new categories and new articles
* Tags will be automaticaly created as you write them (SELECT2 JQuery plugin)

# Google OAuth Integration

This project has been configured to allow users to log in using their Google accounts.

## Setup Instructions

1. Register a new application in the Google Developer Console:
   - Go to https://console.developers.google.com/
   - Create a new project
   - Navigate to "APIs & Services" > "Credentials"
   - Click "Create Credentials" > "OAuth client ID"
   - Choose "Web application" as the application type
   - Add your application name
   - Add authorized redirect URIs:
     - For development: `http://localhost:8000/connect/google/check`
     - For production: `https://your-domain.com/connect/google/check`
   - Click "Create"
   - Note your Client ID and Client Secret

2. Configure environment variables:
   - Open the `.env` file
   - Update the following variables:
     ```
     OAUTH_GOOGLE_CLIENT_ID=your_client_id
     OAUTH_GOOGLE_CLIENT_SECRET=your_client_secret
     ```

3. (Optional) Clear cache and restart server:
   ```
   php bin/console cache:clear
   ```

## How It Works

The Google login button is displayed on the login page. When users click on it:

1. They are redirected to Google's login page
2. After logging in, Google redirects back to our application
3. The application verifies the user's information
4. If the user is logging in for the first time, a new account is created
5. If the user already exists (matched by email or Google ID), they're logged in to their existing account

## Technical Details

- We use the `knpuniversity/oauth2-client-bundle` package for OAuth integration
- Google login is implemented as an additional authenticator in the security system
- The User entity has a `googleId` field to store the Google user ID
- Users can log in with either their username/password or their Google account
