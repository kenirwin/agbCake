<?php
use Migrations\AbstractMigration;

class CreateArchitecturalImages extends AbstractMigration
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
        $table = $this->table('architectural_images');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('convent_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('image_type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('image_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'default' => null,
        ]);
        $table->addColumn('image_dir', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'default' => null,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'default' => null,
        ]);
        $table->addColumn('image_source', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'default' => null,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
	$table->addForeignKey('convent_id', 'convents', array('id'), array('constraint'=>'convent_image_fk'));
        $table->create();
    }
}
