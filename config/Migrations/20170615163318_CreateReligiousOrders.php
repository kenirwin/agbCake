<?php
use Migrations\AbstractMigration;

class CreateReligiousOrders extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('religious_orders');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('viaf_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }

    public function down() {
      $this->dropTable('religious_orders');
    }
}
