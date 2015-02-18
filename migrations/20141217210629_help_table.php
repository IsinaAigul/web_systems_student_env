<?php

use Phinx\Migration\AbstractMigration;

class HelpTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `help` (
  `id_oder` int(255) NOT NULL,
  `id_permit` int(255) NOT NULL,
  `id_tourist` int(255) NOT NULL,
  KEY `id_oder` (`id_oder`),
  KEY `id_permit` (`id_permit`),
  KEY `id_tourist` (`id_tourist`)
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