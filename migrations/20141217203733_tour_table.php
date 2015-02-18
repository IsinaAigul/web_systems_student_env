<?php

use Phinx\Migration\AbstractMigration;

class TourTable extends AbstractMigration
{
  
    
    /**
     * Migrate Up.
     */
    public function up()
    {
	$sql = <<<SQL
	CREATE TABLE IF NOT EXISTS `Tour` (
  `Id_tour` bigint(255) NOT NULL,
  `id_supplier` int(100) NOT NULL,
  `Name_tour` varchar(50) NOT NULL,
  `Type_tour` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Hotel_stars` int(5) NOT NULL,
  `purchase_price` int(6) NOT NULL,
  PRIMARY KEY (`Id_tour`),
  UNIQUE KEY `Id_tour` (`Id_tour`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SQL;
      $this->execute($sql);
	  }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}