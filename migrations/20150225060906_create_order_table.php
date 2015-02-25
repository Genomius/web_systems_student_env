<?php

use Phinx\Migration\AbstractMigration;

class CreateOrderTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `Order` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `Date` datetime DEFAULT NULL,
        `From` char(50) DEFAULT NULL,
        `To` char(50) DEFAULT NULL,
        `Price` char(50) DEFAULT NULL,
        `Wishes` text,
        `Status` char(50) DEFAULT NULL,
        `id_client` int(11) DEFAULT NULL,
        `Order_count_of_client` int(10) DEFAULT NULL,
        `id_driver` int(11) DEFAULT NULL,
        `Black_list` binary(1) DEFAULT NULL,
        `id_dispatcher` int(11) DEFAULT NULL,
        PRIMARY KEY (`id`),
        KEY `Order_fk1` (`id_client`),
        KEY `Order_fk2` (`id_driver`),
        KEY `Order_fk3` (`id_dispatcher`)
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