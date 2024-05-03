<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240417080532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prestataire_service (prestataire_id INT NOT NULL, service_id INT NOT NULL, INDEX IDX_74F1512BBE3DB2B7 (prestataire_id), INDEX IDX_74F1512BED5CA9E6 (service_id), PRIMARY KEY(prestataire_id, service_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE prestataire_service ADD CONSTRAINT FK_74F1512BBE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES prestataire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestataire_service ADD CONSTRAINT FK_74F1512BED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestataire_service DROP FOREIGN KEY FK_74F1512BBE3DB2B7');
        $this->addSql('ALTER TABLE prestataire_service DROP FOREIGN KEY FK_74F1512BED5CA9E6');
        $this->addSql('DROP TABLE prestataire_service');
    }
}
