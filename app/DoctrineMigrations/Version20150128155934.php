<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150128155934 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('CREATE TABLE profile_lookingfor (profile_id BIGINT NOT NULL, lookingfor_id BIGINT NOT NULL, INDEX IDX_53A6D746CCFA12B8 (profile_id), INDEX IDX_53A6D746CD99C4D4 (lookingfor_id), PRIMARY KEY(profile_id, lookingfor_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE profile_lookingfor ADD CONSTRAINT FK_53A6D746CCFA12B8 FOREIGN KEY (profile_id) REFERENCES user_profile (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profile_lookingfor ADD CONSTRAINT FK_53A6D746CD99C4D4 FOREIGN KEY (lookingfor_id) REFERENCES user_looking_for (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        
        $this->addSql('DROP TABLE profile_lookingfor');
    }
}
