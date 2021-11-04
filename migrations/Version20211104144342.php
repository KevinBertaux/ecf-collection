<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211104144342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gathering_item (gathering_id INT NOT NULL, item_id INT NOT NULL, INDEX IDX_4ACEA7B67BA827B5 (gathering_id), INDEX IDX_4ACEA7B6126F525E (item_id), PRIMARY KEY(gathering_id, item_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gathering_item ADD CONSTRAINT FK_4ACEA7B67BA827B5 FOREIGN KEY (gathering_id) REFERENCES gathering (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gathering_item ADD CONSTRAINT FK_4ACEA7B6126F525E FOREIGN KEY (item_id) REFERENCES item (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE gathering_item');
    }
}
