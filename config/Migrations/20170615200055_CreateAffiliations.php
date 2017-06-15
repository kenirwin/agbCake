<?php
use Migrations\AbstractMigration;

class CreateAffiliations extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('affiliations');
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

	$table->removeColumn('id');
	$table->addPrimaryKey(['convent_id','religious_order_id']);
	$table->addForeignKey('convent_id','convents', array('id'),array('constraint'=>'convent_order_fk'));
	$table->addForeignKey('religious_order_id','religious_orders', array('id'),array('constraint'=>'religious_order_convent_fk'));
	$table->save();
    }
}
