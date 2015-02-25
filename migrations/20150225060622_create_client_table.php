<?php

use Phinx\Migration\AbstractMigration;

class CreateClientTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `Client` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Phone` char(50) DEFAULT NULL,
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