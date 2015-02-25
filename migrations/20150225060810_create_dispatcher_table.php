<?php

use Phinx\Migration\AbstractMigration;

class CreateDispatcherTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `Dispatcher` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Name` char(50) DEFAULT NULL,
        `Last_name` char(50) DEFAULT NULL,
        `Patronymic` char(50) DEFAULT NULL,
        `Birthday` date DEFAULT NULL,
        `Sex` char(1) DEFAULT NULL,
        `Passport` char(50) DEFAULT NULL,
        `Address` char(50) DEFAULT NULL,
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