<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150202161226 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("UPDATE user_drinking SET name = 'Socially' WHERE name = 'Casually'");
        $this->addSql("INSERT INTO user_profession (name) VALUES ('Transportation')");
        $this->addSql("INSERT INTO event_category (name) VALUES ('Singles')");
    }

    public function down(Schema $schema)
    {
        $this->addSql("UPDATE user_drinking SET name = 'Casually' WHERE name = 'Socially'");
        $this->addSql("DELETE FROM user_profession WHERE name LIKE 'Transportation'");
        $this->addSql("DELETE FROM event_category WHERE name LIKE 'Singles'");
    }
}
