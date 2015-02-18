<?php

use Phinx\Migration\AbstractMigration;

class TouristTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
	$sql = <<<SQL
    CREATE TABLE IF NOT EXISTS `tourist` (
  `id_tourist` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `patronimic` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  `pasport_№` int(4) NOT NULL,
  `pasport_series` int(6) NOT NULL,
  PRIMARY KEY (`id_tourist`)
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