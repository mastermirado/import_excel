<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250327064925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE import (id INT AUTO_INCREMENT NOT NULL, business_account VARCHAR(255) DEFAULT NULL, event_account VARCHAR(255) DEFAULT NULL, last_event_account VARCHAR(255) DEFAULT NULL, file_number BIGINT DEFAULT NULL, title VARCHAR(5) DEFAULT NULL, current_vehicle_owner VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, street VARCHAR(255) DEFAULT NULL, address_supplement VARCHAR(255) DEFAULT NULL, zip VARCHAR(10) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, home_phone VARCHAR(30) DEFAULT NULL, mobile_phone VARCHAR(30) DEFAULT NULL, work_phone VARCHAR(30) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, first_registration_date DATETIME DEFAULT NULL, purchase_date DATETIME DEFAULT NULL, last_event_date DATETIME DEFAULT NULL, mark VARCHAR(50) DEFAULT NULL, model VARCHAR(50) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, registration VARCHAR(255) DEFAULT NULL, prospect_type VARCHAR(255) DEFAULT NULL, miles BIGINT DEFAULT NULL, energy VARCHAR(50) DEFAULT NULL, seller_vn VARCHAR(255) DEFAULT NULL, seller_vo VARCHAR(255) DEFAULT NULL, invoice_comment LONGTEXT DEFAULT NULL, type_vnvo VARCHAR(5) DEFAULT NULL, file_number_vnvo VARCHAR(255) DEFAULT NULL, sales_intermediary VARCHAR(255) DEFAULT NULL, event_date DATETIME DEFAULT NULL, event_origin VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE import
        SQL);
    }
}
