<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190402172606 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD `left` INT NOT NULL, ADD `right` INT NOT NULL');
        $this->addSql('ALTER TABLE comment CHANGE author author VARCHAR(100) NOT NULL, CHANGE content content VARCHAR(255) NOT NULL, CHANGE create_at create_at DATETIME NOT NULL, CHANGE modified_at modified_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category DROP `left`, DROP `right`');
        $this->addSql('ALTER TABLE comment CHANGE author author VARCHAR(100) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE content content VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE create_at create_at DATETIME DEFAULT NULL, CHANGE modified_at modified_at DATETIME DEFAULT NULL');
    }
}
