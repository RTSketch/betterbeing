<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
//    public function change()
//    {
//
//    }
    
    public function up()
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string')
            ->addColumn('first_name', 'string')
            ->addColumn('last_name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('created_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->save();
    }
    
    public function down()
    {
        $this->dropTable('users');
    }
}

//php vendor/bin/phinx create CreateTestimonials
//php vendor/bin/phinx migrate -e development
//php vendor/bin/phinx migrate -e production
//php vendor/bin/phinx rollback -e development
//php vendor/bin/phinx rollback -e production
