<?php

use Phinx\Migration\AbstractMigration;

class CreateTestimonialsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $users = $this->table('testimonials');
        $users->addColumn('title', 'string')
            ->addColumn('testimonial', 'text')
            ->addColumn('user_id', 'integer')
            //Get id from users table of poster and when deleted or updated, cascaade
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'cascade', 'update' => 'cascade'])
            ->addColumn('created_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->save();
    }
    
    public function down()
    {
        $this->dropTable('testimonials');
    }
}

//php vendor/bin/phinx create CreateTestimonials
//php vendor/bin/phinx migrate -e development
//php vendor/bin/phinx migrate -e production
//php vendor/bin/phinx rollback -e development
//php vendor/bin/phinx rollback -e production
