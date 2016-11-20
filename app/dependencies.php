<?php
// DIC configuration

$container = $app->getContainer();

/**
 * Configure the database and boot Eloquent
 */
$capsule = new \Illuminate\Database\Capsule\Manager();

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'testslim',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => ''
));

$capsule->setAsGlobal();

$capsule->bootEloquent();

// set timezone for timestamps etc
date_default_timezone_set('UTC');

// monolog
/*$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};*/

/*$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};*/

/*$container[OrderRepository::class] = function ($c) {

    return new OrderRepository(new Order());
};

$container[UserRepository::class] = function ($c) {

    return new OrderRepository(new User());
};*/


$container['user_manager'] = function ($c) {

    return new UserManager(new UserRepository(new User()));
};

$container['order_manager'] = function ($c) {

    return new OrderManager(new OrderRepository(new Order()));
};