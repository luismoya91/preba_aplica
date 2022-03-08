<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308022216 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('
            INSERT INTO `blog` (`autor`, `titulo`, `fecha`, `imagen`, `texto`)
            VALUES
                (\'Luis Moya\', \'El Carro de mi hermano\', \'2020-02-05\', \'carro-jhon-62269d7e5712f.png\', \'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i\'),
                (\'Luis Moya\', \'Nemesio Camacho "El Campin"\', \'2017-01-01\', \'wallpaper-millos-6226b7165f45e.jpg\', \'Nemesio Camacho Macías fue un abogado, político y empresario colombiano. Fue ministro, senador y gerente del Banco Central, del Tranvía de Bogotá y del Ferrocarril del Pacífico. Su hijo Luis Camacho donó el terreno de su propiedad denominado El Campín par\'),
                (\'Luis Moya\', \'El Bitcoin\', \'2022-03-07\', \'portada-bitcoin-6226b5e6666c8.jpg\', \'Bitcoin​ es una criptomoneda (un tipo de moneda digital​) y un sistema de pago​ sin banco central o administrador único.​ En principio, los usuarios de bitcoin pueden transferir dinero entre sí a través de una red entre iguales usando software libre y de \'),
                (\'Anonimo\', \'La guerra en Ucrania\', \'2022-03-07\', \'guerra-rusia-6226bca39093c.jpg\', \'Ya son doce días desde que Putin decidió invadir Ucrania y la situación, lejos de mejorar, empeora cada día que pasa con muchos inocentes tratando de huir, algo que le impide Rusia no respetando los acuerdos para el alto el fuego en determinados enclaves\');
            '
        );

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
