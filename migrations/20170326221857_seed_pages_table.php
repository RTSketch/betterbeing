<?php

use Phinx\Migration\AbstractMigration;

class SeedPagesTable extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            insert into pages (browser_title, page_content, created_at, slug)
            values
            ('About Acme', '<h1>About Acme</h1><p>All about this company.</p>', '2015-08-26 19:15:43', 'about')
        ");
        $this->execute("
            insert into pages (browser_title, page_content, created_at, slug)
            values
            ('Success', '<h1>Success</h1><p>Welcome to Acme!</p>', '2015-08-26 19:15:43', 'success')
        ");
        $this->execute("
            insert into pages (browser_title, page_content, created_at, slug)
            values
            ('Not Found', '<h1>Page Not Found!</h1><p>Page not found!</p>', '2015-08-26 19:15:43', 'page-not-found')
        ");
        $this->execute("
            insert into pages (browser_title, page_content, created_at, slug)
            values
            ('Account Activated', '<h1>Acount Now Active</h1><p>Your account is now active, and you can log in.</p>', '2015-08-26 19:15:43', 'account-activated')
        ");
        $this->execute("
            insert into pages (browser_title, page_content, created_at, slug)
            values
            ('Saved', '<h1>Testimonial Saved</h1><p>Your testimonial has been saved.</p>', '2015-08-26 19:15:43', 'testimonial-saved')
        ");
    }
    public function down()
    {
    }
}
