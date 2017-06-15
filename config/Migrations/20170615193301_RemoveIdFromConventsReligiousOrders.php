<?php
use Migrations\AbstractMigration;

class RemoveIdFromConventsReligiousOrders extends AbstractMigration
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
        $table = $this->table('convents_religious_orders');
	$table->removeColumn('id');
        $table->save();
    }
}
