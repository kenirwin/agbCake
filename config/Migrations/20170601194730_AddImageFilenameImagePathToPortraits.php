<?php
use Migrations\AbstractMigration;

class AddImageFilenameImagePathToPortraits extends AbstractMigration
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
        $table = $this->table('portraits');
        $table->addColumn('image_filename', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'notes'
        ]);
        $table->addColumn('image_path', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
	    'after' => 'notes'
        ]);
        $table->update();
    }
}
