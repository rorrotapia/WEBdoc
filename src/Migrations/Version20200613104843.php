<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200613104843 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tab_resultats (id INT AUTO_INCREMENT NOT NULL, sondage_id INT DEFAULT NULL, reponse_id INT DEFAULT NULL, INDEX IDX_358D0167BAF4AE56 (sondage_id), INDEX IDX_358D0167CF18BB82 (reponse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tab_resultats ADD CONSTRAINT FK_358D0167BAF4AE56 FOREIGN KEY (sondage_id) REFERENCES tab_sondage (id)');
        $this->addSql('ALTER TABLE tab_resultats ADD CONSTRAINT FK_358D0167CF18BB82 FOREIGN KEY (reponse_id) REFERENCES tab_reponse (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tab_resultats');
    }
}
