<?php

use Phinx\Migration\AbstractMigration;

class CreateDriverTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `Driver` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Name` char(50) DEFAULT NULL,
        `Last_name` char(50) DEFAULT NULL,
        `Patronymic` char(50) DEFAULT NULL,
        `Birthday` date DEFAULT NULL,
        `Passport` char(50) DEFAULT NULL,
        `Sex` char(1) DEFAULT NULL,
        `Address` char(50) DEFAULT NULL,
        `Phone` char(50) DEFAULT NULL,
        `Rights_type` char(50) DEFAULT NULL,
        `Infringement` text,
        `id_car` int(11) DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `Driver_fk1` (`id_car`)
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