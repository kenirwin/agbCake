<?php
use Migrations\AbstractMigration;

class CreateConventsReligiousOrders extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table('convents_religious_orders');
        $table->addColumn('convent_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('religious_order_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
	
	$table->addForeignKey('convent_id','convents', array('id'),array('constraint'=>'convent_order_fk'));
	$table->addForeignKey('religious_order_id','religious_orders', array('id'),array('constraint'=>'religious_order_convent_fk'));
	$table->save();
    }

    public function down() 
    {
      $table= $this->dropTable('convents_religious_orders');
    }
}
