<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$settings   = require_once __DIR__ . '/../app/settings.php';

/**
 * Configure the database and boot Eloquent
 */
$capsule = new Capsule;

$capsule->addConnection($settings['settings']['db']);

$capsule->setAsGlobal();

$capsule->bootEloquent();

// set timezone for timestamps etc
date_default_timezone_set('UTC');
