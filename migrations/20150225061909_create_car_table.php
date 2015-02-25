<?php

use Phinx\Migration\AbstractMigration;

class CreateCarTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `Car` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `Mark` char(50) DEFAULT NULL,
      `Model` char(50) DEFAULT NULL,
      `Year` int(4) DEFAULT NULL,
      `Number` char(50) DEFAULT NULL,
      `Carcass_type` char(50) DEFAULT NULL,
      `Color` char(50) DEFAULT NULL,
      `Foreign_car` binary(1) DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;    
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