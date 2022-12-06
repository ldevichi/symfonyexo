<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129150732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classroom ADD school_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE classroom ADD CONSTRAINT FK_497D309DC32A47EE FOREIGN KEY (school_id) REFERENCES school (id)');
        $this->addSql('CREATE INDEX IDX_497D309DC32A47EE ON classroom (school_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classroom DROP FOREIGN KEY FK_497D309DC32A47EE');
        $this->addSql('DROP INDEX IDX_497D309DC32A47EE ON classroom');
        $this->addSql('ALTER TABLE classroom DROP school_id');
    }
}
