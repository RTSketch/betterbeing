<?php

use Phinx\Migration\AbstractMigration;

class CreatePagesTable extends AbstractMigration
{

    public function up()
    {
        $users = $this->table('pages');
        $users->addColumn('browser_title', 'string')
            ->addColumn('page_content', 'text')
            ->addColumn('created_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->save();
    }
    
    public function down()
    {
        $this->dropTable('pages');
    }
}

//php vendor/bin/phinx migrate -e development
//php vendor/bin/phinx migrate -e production
//php vendor/bin/phinx rollback -e development
//php vendor/bin/phinx rollback -e production
//php vendor/bin/phinx create CreateTestimonials