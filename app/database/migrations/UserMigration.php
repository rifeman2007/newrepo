<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class UserMigration
 */
class UserMigration
{
    function run()
    {
        Capsule::schema()->dropIfExists('users');
        Capsule::schema()->create('users', function($table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }
}
