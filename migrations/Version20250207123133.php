<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250207123133 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal_employee DROP FOREIGN KEY FK_9B1C737C8E962C16');
        $this->addSql('ALTER TABLE animal_employee DROP FOREIGN KEY FK_9B1C737C8C03F15C');
        $this->addSql('DROP TABLE animal_employee');
        $this->addSql('ALTER TABLE animal ADD employee_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231F8C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231F8C03F15C ON animal (employee_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal_employee (animal_id INT NOT NULL, employee_id INT NOT NULL, INDEX IDX_9B1C737C8C03F15C (employee_id), INDEX IDX_9B1C737C8E962C16 (animal_id), PRIMARY KEY(animal_id, employee_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE animal_employee ADD CONSTRAINT FK_9B1C737C8E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal_employee ADD CONSTRAINT FK_9B1C737C8C03F15C FOREIGN KEY (employee_id) REFERENCES employee (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231F8C03F15C');
        $this->addSql('DROP INDEX IDX_6AAB231F8C03F15C ON animal');
        $this->addSql('ALTER TABLE animal DROP employee_id');
    }
}
