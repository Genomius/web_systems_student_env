<?php

use Phinx\Migration\AbstractMigration;

class CreateForeign extends AbstractMigration
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
      ALTER TABLE `Order`
        ADD CONSTRAINT `Order_fk1` FOREIGN KEY (`id_client`) REFERENCES `Client` (`id`),
        ADD CONSTRAINT `Order_fk2` FOREIGN KEY (`id_driver`) REFERENCES `Driver` (`id`),
        ADD CONSTRAINT `Order_fk3` FOREIGN KEY (`id_dispatcher`) REFERENCES `Dispatcher` (`id`);

      ALTER TABLE `Driver`
        ADD CONSTRAINT `Driver_fk1` FOREIGN KEY (`id_car`) REFERENCES `Car` (`id`);

      ALTER TABLE `Change`
        ADD CONSTRAINT `Change_fk1` FOREIGN KEY (`id_dispatcher`) REFERENCES `Dispatcher` (`id`);
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