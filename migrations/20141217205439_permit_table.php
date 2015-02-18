<?php

use Phinx\Migration\AbstractMigration;

class PermitTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `permit` (
  `id_permit` bigint(255) NOT NULL,
  `id_tour` bigint(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` bigint(10) NOT NULL,
  PRIMARY KEY (`id_permit`),
  UNIQUE KEY `id_permit` (`id_permit`)
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