<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211206092737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE champion (id INT AUTO_INCREMENT NOT NULL, champion_id INT NOT NULL, champion_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item_set (id INT AUTO_INCREMENT NOT NULL, champion_id INT NOT NULL, user_id INT NOT NULL, item_id1 INT NOT NULL, item_id2 INT NOT NULL, item_id3 INT NOT NULL, item_id4 INT NOT NULL, item_id5 INT NOT NULL, item_id6 INT NOT NULL, description LONGTEXT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_1015EEEA76ED395 (user_id), INDEX IDX_1015EEEFA7FD7EB (champion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE items (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, plain_text LONGTEXT NOT NULL, total_price INT NOT NULL, base_price INT NOT NULL, sell_price INT NOT NULL, image_url VARCHAR(255) NOT NULL, item_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE top3_champions (id INT AUTO_INCREMENT NOT NULL, chamopion_name VARCHAR(255) NOT NULL, mastery_level INT NOT NULL, mastery_points INT NOT NULL, champion_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, summoner_id VARCHAR(255) NOT NULL, account_id VARCHAR(255) NOT NULL, puuid VARCHAR(255) NOT NULL, summoner_name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_stats (id INT AUTO_INCREMENT NOT NULL, summoner_level INT NOT NULL, wins INT NOT NULL, loses INT NOT NULL, league_points INT NOT NULL, rank VARCHAR(255) NOT NULL, rank_tier VARCHAR(255) NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item_set ADD CONSTRAINT FK_1015EEEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE item_set ADD CONSTRAINT FK_1015EEEFA7FD7EB FOREIGN KEY (champion_id) REFERENCES champion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE item_set DROP FOREIGN KEY FK_1015EEEFA7FD7EB');
        $this->addSql('ALTER TABLE item_set DROP FOREIGN KEY FK_1015EEEA76ED395');
        $this->addSql('DROP TABLE champion');
        $this->addSql('DROP TABLE item_set');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE top3_champions');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_stats');
    }
}
