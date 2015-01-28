<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150128120232 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('DROP TABLE user_education_ivy_league');
        $this->addSql('ALTER TABLE user_profile DROP FOREIGN KEY FK_D95AB4059B661B29');
        $this->addSql('DROP INDEX IDX_D95AB4059B661B29 ON user_profile');
        $this->addSql('ALTER TABLE user_profile DROP looking_for');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE user_education_ivy_league (id BIGINT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_profile ADD looking_for BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB4059B661B29 FOREIGN KEY (looking_for) REFERENCES user_looking_for (id)');
        $this->addSql('CREATE INDEX IDX_D95AB4059B661B29 ON user_profile (looking_for)');
    }
}
