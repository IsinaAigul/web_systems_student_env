<?php

use Phinx\Migration\AbstractMigration;

class StuffTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `stuff` (
  `id_stuff` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `patronimic` varchar(20) NOT NULL,
  `Login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `salary` int(10) NOT NULL,
  `e-mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id_stuff`)
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