<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201203124335 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_gift (user_id INT NOT NULL, gift_id INT NOT NULL, PRIMARY KEY(user_id, gift_id))');
        $this->addSql('CREATE INDEX IDX_DEFDD5C4A76ED395 ON user_gift (user_id)');
        $this->addSql('CREATE INDEX IDX_DEFDD5C497A95A83 ON user_gift (gift_id)');
        $this->addSql('ALTER TABLE user_gift ADD CONSTRAINT FK_DEFDD5C4A76ED395 FOREIGN KEY (user_id) REFERENCES "users" (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_gift ADD CONSTRAINT FK_DEFDD5C497A95A83 FOREIGN KEY (gift_id) REFERENCES gift (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE user_gift');
    }
}
