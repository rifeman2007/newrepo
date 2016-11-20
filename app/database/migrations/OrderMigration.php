<?php

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class OrderMigration
 */
class OrderMigration
{
    function run()
    {
        Capsule::schema()->dropIfExists('orders');
        Capsule::schema()->create('orders', function($table) {
            $table->increments('id');
            $table->string('user_id')->index();
            $table->float('total', 8, 2);
            $table->integer('status');
            $table->timestamps();
        });
    }
}
