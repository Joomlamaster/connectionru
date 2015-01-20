<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20150120113811 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("UPDATE user_smoking SET name = 'Occasionally' WHERE name = 'Casually';");
    }

    public function down(Schema $schema)
    {
        $this->addSql("UPDATE user_smoking SET name = 'Casually' WHERE name = 'Occasionally';");
    }
}
