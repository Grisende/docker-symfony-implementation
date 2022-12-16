<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220921224623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hashes ADD key_matched VARCHAR(255) NOT NULL, ADD hash_generated VARCHAR(255) NOT NULL, DROP `key`, DROP hash, CHANGE batch batch_timestamp DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hashes ADD `key` VARCHAR(255) NOT NULL, ADD hash VARCHAR(255) NOT NULL, DROP key_matched, DROP hash_generated, CHANGE batch_timestamp batch DATETIME NOT NULL');
    }
}
