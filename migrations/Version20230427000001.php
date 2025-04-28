<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230427000001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Google ID field to User entity';
    }

    public function up(Schema $schema): void
    {
        // Add googleId column to the user table if it doesn't exist
        $this->addSql('ALTER TABLE user ADD googleId VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // Drop googleId column from the user table
        $this->addSql('ALTER TABLE user DROP googleId');
    }
} 