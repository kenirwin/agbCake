<?php
use Migrations\AbstractMigration;

class AddFieldsToWomen extends AbstractMigration
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
        $table = $this->table('women');
        $table->addColumn('birth_place', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'birth_year',
        ]);
        $table->addColumn('death_place', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'death_year',
        ]);
        $table->addColumn('binche', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'religious_order',
        ]);
        $table->addColumn('binche_note', 'text', [
            'default' => null,
            'null' => true,
	    'after' => 'binche',
        ]);
        $table->addColumn('read_diana', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'binche_note',
        ]);
        $table->addColumn('diana_note', 'text', [
            'default' => null,
            'null' => true,
	    'after' => 'read_diana',
        ]);
        $table->addColumn('sources', 'text', [
            'default' => null,
            'null' => true,
	    'after' => 'notes',
        ]);
        $table->update();
    }
}
