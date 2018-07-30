<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180730111015 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tecnologia_candidato');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tecnologia_candidato (tecnologia_id INT NOT NULL, candidato_id INT NOT NULL, INDEX IDX_5F09D6F321F9EE65 (tecnologia_id), INDEX IDX_5F09D6F3FE0067E5 (candidato_id), PRIMARY KEY(tecnologia_id, candidato_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tecnologia_candidato ADD CONSTRAINT FK_5F09D6F321F9EE65 FOREIGN KEY (tecnologia_id) REFERENCES tecnologias (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tecnologia_candidato ADD CONSTRAINT FK_5F09D6F3FE0067E5 FOREIGN KEY (candidato_id) REFERENCES candidatos (id) ON DELETE CASCADE');
    }
}
