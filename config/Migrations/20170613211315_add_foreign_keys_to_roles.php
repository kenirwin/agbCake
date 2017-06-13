<?php

use Phinx\Migration\AbstractMigration;

class AddForeignKeysToRoles extends AbstractMigration
{
    public function change()
    {
      $table = $this->table('roles');
      $table->addForeignKey('woman_id', 'women', array('id'), array('constraint'=>'woman_roles_fk'));
      $table->addForeignKey('convent_id', 'convents', array('id'), array('constraint'=>'convent_roles_fk'));
      $table->save();
    }
}
