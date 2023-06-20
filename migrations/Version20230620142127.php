<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230620142127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, author VARCHAR(255) NOT NULL, INDEX IDX_23A0E66A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_category (article_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_53A4EDAA7294869C (article_id), INDEX IDX_53A4EDAA12469DE2 (category_id), PRIMARY KEY(article_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_video (category_id INT NOT NULL, video_id INT NOT NULL, INDEX IDX_94F4956512469DE2 (category_id), INDEX IDX_94F4956529C1004E (video_id), PRIMARY KEY(category_id, video_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE filter_marker (filter_id INT NOT NULL, marker_id INT NOT NULL, INDEX IDX_AFE47E80D395B25E (filter_id), INDEX IDX_AFE47E80474460EB (marker_id), PRIMARY KEY(filter_id, marker_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT NOT NULL, level INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article_category ADD CONSTRAINT FK_53A4EDAA7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_category ADD CONSTRAINT FK_53A4EDAA12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_video ADD CONSTRAINT FK_94F4956512469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category_video ADD CONSTRAINT FK_94F4956529C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE filter_marker ADD CONSTRAINT FK_AFE47E80D395B25E FOREIGN KEY (filter_id) REFERENCES filter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE filter_marker ADD CONSTRAINT FK_AFE47E80474460EB FOREIGN KEY (marker_id) REFERENCES marker (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE articles_blog');
        $this->addSql('ALTER TABLE category ADD title VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL, DROP category_title, DROP category_slug');
        $this->addSql('ALTER TABLE filter ADD title VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL, DROP filter_title, DROP filter_slug');
        $this->addSql('ALTER TABLE marker ADD user_id INT DEFAULT NULL, ADD title VARCHAR(255) NOT NULL, ADD image VARCHAR(255) DEFAULT NULL, ADD email VARCHAR(255) DEFAULT NULL, ADD slug VARCHAR(255) NOT NULL, ADD zip VARCHAR(255) DEFAULT NULL, DROP marker_title, DROP marker_image, DROP marker_email, DROP marker_slug, DROP zip_code, CHANGE tel tel VARCHAR(255) DEFAULT NULL, CHANGE street street VARCHAR(255) DEFAULT NULL, CHANGE marker_description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE marker ADD CONSTRAINT FK_82CF20FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_82CF20FEA76ED395 ON marker (user_id)');
        $this->addSql('DROP INDEX UNIQ_8D93D649D95D3A0A ON user');
        $this->addSql('ALTER TABLE user ADD name VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL, DROP user_admin_slug, DROP user_admin_email, CHANGE user_admin_name email VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('ALTER TABLE video ADD user_id INT NOT NULL, ADD title VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL, ADD author VARCHAR(255) NOT NULL, ADD image VARCHAR(255) DEFAULT NULL, ADD url VARCHAR(255) NOT NULL, DROP video_title, DROP video_slug, DROP video_name, DROP video_author, DROP video_image, CHANGE video_description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CA76ED395 ON video (user_id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles_blog (id INT AUTO_INCREMENT NOT NULL, art_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, art_slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, art_text LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, art_image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, art_author VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66A76ED395');
        $this->addSql('ALTER TABLE article_category DROP FOREIGN KEY FK_53A4EDAA7294869C');
        $this->addSql('ALTER TABLE article_category DROP FOREIGN KEY FK_53A4EDAA12469DE2');
        $this->addSql('ALTER TABLE category_video DROP FOREIGN KEY FK_94F4956512469DE2');
        $this->addSql('ALTER TABLE category_video DROP FOREIGN KEY FK_94F4956529C1004E');
        $this->addSql('ALTER TABLE filter_marker DROP FOREIGN KEY FK_AFE47E80D395B25E');
        $this->addSql('ALTER TABLE filter_marker DROP FOREIGN KEY FK_AFE47E80474460EB');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_category');
        $this->addSql('DROP TABLE category_video');
        $this->addSql('DROP TABLE filter_marker');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user ADD user_admin_slug VARCHAR(255) NOT NULL, ADD user_admin_email VARCHAR(255) NOT NULL, DROP name, DROP slug, CHANGE email user_admin_name VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649D95D3A0A ON user (user_admin_name)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD category_title VARCHAR(255) NOT NULL, ADD category_slug VARCHAR(255) NOT NULL, DROP title, DROP slug');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CA76ED395');
        $this->addSql('DROP INDEX IDX_7CC7DA2CA76ED395 ON video');
        $this->addSql('ALTER TABLE video ADD video_title VARCHAR(255) NOT NULL, ADD video_name VARCHAR(255) NOT NULL, ADD video_author VARCHAR(255) DEFAULT NULL, ADD video_image VARCHAR(255) DEFAULT NULL, DROP user_id, DROP title, DROP slug, DROP author, DROP url, CHANGE description video_description LONGTEXT NOT NULL, CHANGE image video_slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE filter ADD filter_title VARCHAR(255) NOT NULL, ADD filter_slug VARCHAR(255) NOT NULL, DROP title, DROP slug');
        $this->addSql('ALTER TABLE marker DROP FOREIGN KEY FK_82CF20FEA76ED395');
        $this->addSql('DROP INDEX IDX_82CF20FEA76ED395 ON marker');
        $this->addSql('ALTER TABLE marker ADD marker_title VARCHAR(255) NOT NULL, ADD marker_image VARCHAR(255) DEFAULT NULL, ADD marker_email VARCHAR(255) DEFAULT NULL, ADD marker_slug VARCHAR(255) NOT NULL, ADD zip_code VARCHAR(255) NOT NULL, DROP user_id, DROP title, DROP image, DROP email, DROP slug, DROP zip, CHANGE tel tel INT DEFAULT NULL, CHANGE street street VARCHAR(255) NOT NULL, CHANGE description marker_description LONGTEXT NOT NULL');
    }
}
