<?php

use Phinx\Migration\AbstractMigration;

class CreateChangeTable extends AbstractMigration
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
      CREATE TABLE IF NOT EXISTS `Change` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `Date` date DEFAULT NULL,
      `Change_begin` time DEFAULT NULL,
      `Change_end` time DEFAULT NULL,
      `id_dispatcher` int(11) DEFAULT NULL,
      PRIMARY KEY (`id`),
      KEY `Change_fk1` (`id_dispatcher`)
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