<?php
use Migrations\AbstractMigration;

class AddStyleToRoles extends AbstractMigration
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
        $table = $this->table('roles');
        $table->addColumn('style_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
	    'after' => 'end_year'
        ]);
	$table->addForeignKey('style_id','architectural_styles','id',['delete'=>'SET_NULL', 'update'=>'NO_ACTION', 'constraint'=>'architectural_style_fk']);
        $table->update();
    }
}
