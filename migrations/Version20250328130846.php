<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250328130846 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE achats DROP FOREIGN KEY achats_ibfk_2');
        $this->addSql('ALTER TABLE achats DROP FOREIGN KEY achats_ibfk_1');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY avis_ibfk_1');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY avis_packfk_2');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY basket_ibfk_1');
        $this->addSql('ALTER TABLE basket DROP FOREIGN KEY basket_ibfk_2');
        $this->addSql('ALTER TABLE demande_pack DROP FOREIGN KEY demande_pack_ibfk_2');
        $this->addSql('ALTER TABLE demande_pack DROP FOREIGN KEY demande_pack_ibfk_3');
        $this->addSql('ALTER TABLE demande_pack DROP FOREIGN KEY demande_pack_ibfk_1');
        $this->addSql('ALTER TABLE detailpaiment DROP FOREIGN KEY detailpaiment_ibfk_1');
        $this->addSql('ALTER TABLE detailpaiment DROP FOREIGN KEY detailpaiment_ibfk_2');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY event_ibfk_1');
        $this->addSql('ALTER TABLE materielles DROP FOREIGN KEY materielles_ibfk_1');
        $this->addSql('ALTER TABLE notifications_admin DROP FOREIGN KEY notifications_admin_ibfk_3');
        $this->addSql('ALTER TABLE notifications_admin DROP FOREIGN KEY notifications_admin_ibfk_1');
        $this->addSql('ALTER TABLE notifications_admin DROP FOREIGN KEY notifications_admin_ibfk_2');
        $this->addSql('ALTER TABLE pack2 DROP FOREIGN KEY pack2_ibfk_1');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_2');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_3');
        $this->addSql('ALTER TABLE personnels DROP FOREIGN KEY personnels_ibfk_1');
        $this->addSql('ALTER TABLE reservation_perso DROP FOREIGN KEY reservation_perso_ibfk_1');
        $this->addSql('ALTER TABLE reservation_perso DROP FOREIGN KEY reservation_perso_ibfk_2');
        $this->addSql('ALTER TABLE reserve_mat DROP FOREIGN KEY reserve_mat_ibfk_1');
        $this->addSql('ALTER TABLE reserve_mat DROP FOREIGN KEY reserve_mat_ibfk_2');
        $this->addSql('ALTER TABLE reserve_mat DROP FOREIGN KEY reserve_mat_ibfk_3');
        $this->addSql('DROP TABLE achats');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE basket');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE demande_pack');
        $this->addSql('DROP TABLE detailpaiment');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP TABLE materielles');
        $this->addSql('DROP TABLE notifications_admin');
        $this->addSql('DROP TABLE pack2');
        $this->addSql('DROP TABLE pack_personnel');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE personnels');
        $this->addSql('DROP TABLE reservation_perso');
        $this->addSql('DROP TABLE reserver_lieu');
        $this->addSql('DROP TABLE reserve_mat');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE userrating');
        $this->addSql('DROP TABLE user_category_views');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('ALTER TABLE pack DROP FOREIGN KEY pack_ibfk_1');
        $this->addSql('ALTER TABLE pack DROP FOREIGN KEY pack_ibfk_2');
        $this->addSql('DROP INDEX admin_id ON pack');
        $this->addSql('DROP INDEX event_id ON pack');
        $this->addSql('ALTER TABLE pack ADD price NUMERIC(10, 2) NOT NULL, ADD capacity INT NOT NULL, ADD duree INT NOT NULL, DROP prix, DROP capacité, DROP durée, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE description description LONGTEXT DEFAULT NULL, CHANGE end_date end_date DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achats (id INT AUTO_INCREMENT NOT NULL, id_utilisateur INT DEFAULT NULL, id_pack INT DEFAULT NULL, date_achat DATETIME DEFAULT \'current_timestamp()\' NOT NULL, INDEX id_utilisateur (id_utilisateur), INDEX id_pack (id_pack), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, id_utilisateur INT DEFAULT NULL, id_pack INT DEFAULT NULL, note INT DEFAULT NULL, commentaire TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, date_creation DATETIME DEFAULT \'current_timestamp()\' NOT NULL, sentiment VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'neutral\'\'\' NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id_utilisateur (id_utilisateur), INDEX id_pack (id_pack), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE basket (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, pack_id INT NOT NULL, purchase_date DATETIME DEFAULT \'current_timestamp()\' NOT NULL, INDEX user_id (user_id), INDEX pack_id (pack_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE categories (id_cat INT AUTO_INCREMENT NOT NULL, nom_cat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_cat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id_cat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE demande_pack (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, pack_id INT NOT NULL, event_id INT DEFAULT NULL, statut ENUM(\'EN_ATTENTE\', \'EN_PERSONNALISATION\', \'EN_ATTENTE_CONFIRMATION_UTILISATEUR\', \'CONFIRMÉ\', \'ANNULÉ\') CHARACTER SET utf8mb4 DEFAULT \'\'\'EN_ATTENTE\'\'\' COLLATE `utf8mb4_general_ci`, date_demande DATETIME DEFAULT \'current_timestamp()\' NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX utilisateur_id (utilisateur_id), INDEX event_id (event_id), INDEX demande_pack_ibfk_2 (pack_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE detailpaiment (id INT AUTO_INCREMENT NOT NULL, idPaiment INT NOT NULL, idEvent INT NOT NULL, price DOUBLE PRECISION NOT NULL, INDEX idx_idPaiment (idPaiment), INDEX idx_idEvent (idEvent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, user_id INT DEFAULT NULL, categorie ENUM(\'MARIAGE\', \'ANNIVERSAIRE\', \'CONFERENCE\', \'CONCERT\', \'SEMINAIRE\', \'FESTIVAL\', \'SPORT\', \'ATELIER\') CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, photo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date DATE DEFAULT \'NULL\', type ENUM(\'EVENT\', \'PACK\') CHARACTER SET utf8mb4 DEFAULT \'\'\'EVENT\'\'\' NOT NULL COLLATE `utf8mb4_general_ci`, INDEX idx_user_id (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, price NUMERIC(10, 2) NOT NULL, capacity INT NOT NULL, location VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, imageUrl TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, ville VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, category VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE materielles (id_mat INT AUTO_INCREMENT NOT NULL, nom_mat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description_mat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, photo_mat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, quantite_mat INT NOT NULL, prix_mat FLOAT NOT NULL, categorie_mat INT NOT NULL, INDEX idx_categorie_mat (categorie_mat), INDEX idx_id_mat (id_mat), UNIQUE INDEX id_mat (id_mat), PRIMARY KEY(id_mat)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE notifications_admin (id INT AUTO_INCREMENT NOT NULL, admin_id INT NOT NULL, utilisateur_id INT NOT NULL, demande_pack_id INT NOT NULL, message TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, statut ENUM(\'NON_LU\', \'LU\') CHARACTER SET utf8mb4 DEFAULT \'\'\'NON_LU\'\'\' COLLATE `utf8mb4_general_ci`, date_creation DATETIME DEFAULT \'current_timestamp()\' NOT NULL, INDEX utilisateur_id (utilisateur_id), INDEX demande_pack_id (demande_pack_id), INDEX admin_id (admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pack2 (id INT NOT NULL, admin_id INT NOT NULL, description TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, prix NUMERIC(10, 2) NOT NULL, capacité INT DEFAULT NULL, nombre_avis INT DEFAULT 0, durée INT DEFAULT NULL, somme_totale_notes INT DEFAULT 0, note NUMERIC(3, 2) DEFAULT \'NULL\', event_id INT NOT NULL, end_date DATE DEFAULT \'NULL\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pack_personnel (pack_id INT NOT NULL, personnel_id INT NOT NULL, INDEX personnel_id (personnel_id), PRIMARY KEY(pack_id, personnel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, idUser INT DEFAULT NULL, idEvent INT DEFAULT NULL, typeEvent VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, categorie VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, date DATE DEFAULT \'NULL\', price NUMERIC(10, 2) DEFAULT \'NULL\', INDEX idUser (idUser), INDEX idEvent (idEvent), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, montant INT NOT NULL, mode_de_paiment VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date DATE NOT NULL, INDEX idx_user_id (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, UNIQUE INDEX role (role), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE personnels (idP INT AUTO_INCREMENT NOT NULL, nomP VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenomP VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, serviceP VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, statutP VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, imageUrl VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, id INT DEFAULT NULL, descriptionP VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, tarifP INT NOT NULL, INDEX id_user (id), PRIMARY KEY(idP)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation_perso (idR INT AUTO_INCREMENT NOT NULL, idP INT NOT NULL, id INT NOT NULL, INDEX reservation_perso_ibfk_1 (idP), INDEX idEvent (id), PRIMARY KEY(idR)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserver_lieu (id INT AUTO_INCREMENT NOT NULL, lieu_id INT NOT NULL, event_id INT NOT NULL, date_reservation DATETIME DEFAULT \'current_timestamp()\' NOT NULL, status VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT \'\'\'pending\'\'\' COLLATE `utf8mb4_general_ci`, created_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL, INDEX lieu_id (lieu_id), INDEX event_id (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserve_mat (id_reserv INT AUTO_INCREMENT NOT NULL, id_mat INT NOT NULL, id_event INT NOT NULL, quantite INT NOT NULL, IdUser INT NOT NULL, INDEX idx_id_mat (id_mat), INDEX idx_id_event (id_event), INDEX idx_reverse_mat_id (IdUser), PRIMARY KEY(id_reserv)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, role ENUM(\'USER\', \'ADMIN\') CHARACTER SET utf8mb4 DEFAULT \'\'\'USER\'\'\' COLLATE `utf8mb4_general_ci`, status ENUM(\'ACTIVE\', \'INACTIVE\', \'SUSPENDED\') CHARACTER SET utf8mb4 DEFAULT \'\'\'ACTIVE\'\'\' COLLATE `utf8mb4_general_ci`, purchased_packs TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, UNIQUE INDEX username (username), UNIQUE INDEX email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE userrating (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, pack_id INT NOT NULL, rating INT NOT NULL, created_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL, UNIQUE INDEX user_id (user_id, pack_id), INDEX pack_id (pack_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE user_category_views (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, category VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, view_date DATETIME DEFAULT \'current_timestamp()\' NOT NULL, INDEX view_date (view_date), INDEX user_id (user_id), INDEX category (category), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, hash VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, salt MEDIUMBLOB NOT NULL, nom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, address VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, num_tel VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, dateJoined DATE DEFAULT \'NULL\', role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, ImageData MEDIUMBLOB DEFAULT NULL, created_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL, updated_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL, password VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, reset_token VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_general_ci`, token_expiry DATETIME DEFAULT \'NULL\', UNIQUE INDEX email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE achats ADD CONSTRAINT achats_ibfk_2 FOREIGN KEY (id_pack) REFERENCES pack (id)');
        $this->addSql('ALTER TABLE achats ADD CONSTRAINT achats_ibfk_1 FOREIGN KEY (id_utilisateur) REFERENCES user (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT avis_ibfk_1 FOREIGN KEY (id_utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT avis_packfk_2 FOREIGN KEY (id_pack) REFERENCES pack (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT basket_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE basket ADD CONSTRAINT basket_ibfk_2 FOREIGN KEY (pack_id) REFERENCES pack (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_pack ADD CONSTRAINT demande_pack_ibfk_2 FOREIGN KEY (pack_id) REFERENCES pack (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_pack ADD CONSTRAINT demande_pack_ibfk_3 FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demande_pack ADD CONSTRAINT demande_pack_ibfk_1 FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detailpaiment ADD CONSTRAINT detailpaiment_ibfk_1 FOREIGN KEY (idPaiment) REFERENCES payment (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detailpaiment ADD CONSTRAINT detailpaiment_ibfk_2 FOREIGN KEY (idEvent) REFERENCES event (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT event_ibfk_1 FOREIGN KEY (user_id) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materielles ADD CONSTRAINT materielles_ibfk_1 FOREIGN KEY (categorie_mat) REFERENCES categories (id_cat) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notifications_admin ADD CONSTRAINT notifications_admin_ibfk_3 FOREIGN KEY (demande_pack_id) REFERENCES demande_pack (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notifications_admin ADD CONSTRAINT notifications_admin_ibfk_1 FOREIGN KEY (admin_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notifications_admin ADD CONSTRAINT notifications_admin_ibfk_2 FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pack2 ADD CONSTRAINT pack2_ibfk_1 FOREIGN KEY (id) REFERENCES event (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_2 FOREIGN KEY (idEvent) REFERENCES event (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_3 FOREIGN KEY (idUser) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personnels ADD CONSTRAINT personnels_ibfk_1 FOREIGN KEY (id) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_perso ADD CONSTRAINT reservation_perso_ibfk_1 FOREIGN KEY (idP) REFERENCES personnels (idP) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation_perso ADD CONSTRAINT reservation_perso_ibfk_2 FOREIGN KEY (id) REFERENCES event (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserve_mat ADD CONSTRAINT reserve_mat_ibfk_1 FOREIGN KEY (IdUser) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserve_mat ADD CONSTRAINT reserve_mat_ibfk_2 FOREIGN KEY (id_event) REFERENCES event (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reserve_mat ADD CONSTRAINT reserve_mat_ibfk_3 FOREIGN KEY (id_mat) REFERENCES materielles (id_mat) ON DELETE CASCADE');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE pack ADD prix DOUBLE PRECISION NOT NULL, ADD capacité INT DEFAULT NULL, ADD durée INT DEFAULT NULL, DROP price, DROP capacity, DROP duree, CHANGE id id INT NOT NULL, CHANGE description description TEXT DEFAULT NULL, CHANGE end_date end_date DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE pack ADD CONSTRAINT pack_ibfk_1 FOREIGN KEY (admin_id) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE pack ADD CONSTRAINT pack_ibfk_2 FOREIGN KEY (event_id) REFERENCES event (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX admin_id ON pack (admin_id)');
        $this->addSql('CREATE INDEX event_id ON pack (event_id)');
    }
}
