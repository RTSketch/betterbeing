<?php

use Phinx\Migration\AbstractMigration;

class AddUniqueUsernameToUsers extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addIndex(['username'], ['unique' => true])
            ->save();
    }
}
