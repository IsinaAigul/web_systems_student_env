<?php

use Phinx\Migration\AbstractMigration;

class OderTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `oder` (
  `id_oder` int(255) NOT NULL,
  `id_stuff` int(200) NOT NULL,
  `id_client` int(200) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id_oder`),
  KEY `id_stuff` (`id_stuff`),
  KEY `id_client` (`id_client`)
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