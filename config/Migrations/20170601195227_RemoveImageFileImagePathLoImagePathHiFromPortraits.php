<?php
use Migrations\AbstractMigration;

class RemoveImageFileImagePathLoImagePathHiFromPortraits extends AbstractMigration
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
        $table->removeColumn('image_file');
        $table->removeColumn('image_path_lo');
        $table->removeColumn('image_path_hi');
        $table->update();
    }
}
