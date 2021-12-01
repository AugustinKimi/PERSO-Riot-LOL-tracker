<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201103734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player_individual_match_data (id INT AUTO_INCREMENT NOT NULL, game_id VARCHAR(255) NOT NULL, summoner_name VARCHAR(255) NOT NULL, champion_name VARCHAR(255) NOT NULL, champion_id INT NOT NULL, kills INT NOT NULL, deaths INT NOT NULL, assists INT NOT NULL, gold_earned INT NOT NULL, rank VARCHAR(255) NOT NULL, tier VARCHAR(255) NOT NULL, league_points INT NOT NULL, wins INT NOT NULL, loses INT NOT NULL, minions_killed INT NOT NULL, dommage_dealt INT NOT NULL, largest_killing_spree INT NOT NULL, spell1_casts INT NOT NULL, spell2_casts INT NOT NULL, spell3_casts INT NOT NULL, spell4_casts INT NOT NULL, ward_used INT NOT NULL, dommage_taken INT NOT NULL, healing_done INT NOT NULL, game_duration INT NOT NULL, summoner_spell1 INT NOT NULL, summoner_spell2 INT NOT NULL, pentakill INT NOT NULL, quadrakill INT NOT NULL, first_tower TINYINT(1) NOT NULL, drake INT NOT NULL, tower INT NOT NULL, baron INT NOT NULL, herald INT NOT NULL, profil_icon_id INT NOT NULL, player_level INT NOT NULL, lane VARCHAR(255) NOT NULL, participant_id VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, summoner_id VARCHAR(255) NOT NULL, account_id VARCHAR(255) NOT NULL, puuid VARCHAR(255) NOT NULL, summoner_name VARCHAR(255) NOT NULL, profil_icon_id VARCHAR(255) NOT NULL, summoner_level INT NOT NULL, access_token VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_game_history (id INT AUTO_INCREMENT NOT NULL, game_id VARCHAR(255) NOT NULL, user_id VARCHAR(255) NOT NULL, game_date INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE player_individual_match_data');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_game_history');
    }
}
