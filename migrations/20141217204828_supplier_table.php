<?php

use Phinx\Migration\AbstractMigration;

class SupplierTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` int(255) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `mail` varchar(500) NOT NULL,
  PRIMARY KEY (`id_supplier`),
  UNIQUE KEY `id_supplier` (`id_supplier`)
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