<?php
use Migrations\AbstractMigration;

class TryAgainNullValuesInRoles extends AbstractMigration
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
      $table->removeColumn('role');
      $table->addColumn('role', 'string', ['null'=>'true','default' => null, 'after'=>'convent_id']);
      $table->removeColumn('start_year');
      $table->addColumn('start_year', 'string', ['null'=>'true','default' => null, 'after'=>'role']);
      $table->removeColumn('end_year');
      $table->addColumn('end_year', 'string', ['null'=>'true','default' => null, 'after'=>'start_year']);
      $table->save();

    }
}
