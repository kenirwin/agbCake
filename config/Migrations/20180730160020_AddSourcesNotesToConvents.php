<?php
use Migrations\AbstractMigration;

class AddSourcesNotesToConvents extends AbstractMigration
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
        $table = $this->table('convents');
        $table->addColumn('sources', 'text', [
            'default' => null,
            'null' => true,
	    'after' => 'longitude',
        ]);
        $table->addColumn('notes', 'text', [
            'default' => null,
            'null' => true,
	    'after' => 'sources'
        ]);
        $table->update();
    }
}
