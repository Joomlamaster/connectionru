<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150128171858 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('UPDATE user_profile SET zodiac = 1 WHERE zodiac IS NULL');
        $this->addSql('UPDATE user_profile SET profession = 1 WHERE profession IS NULL');
    }

    public function down(Schema $schema) {}
}
