<?php

use Phinx\Migration\AbstractMigration;

class SeedUsersTable extends AbstractMigration
{
    public function up()
    {
        $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);
        
        $this->execute("
            insert into users (username, first_name, last_name, email, password)
            values
            ('RTSketch', 'Robert', 'Thomson', 'rtsketch@gmail.com', '$password_hash')
        ");
    }
    
    public function down()
    {
        
    }
}
