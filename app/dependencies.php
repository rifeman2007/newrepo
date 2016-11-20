<?php
// DIC configuration

$container['user_manager'] = function ($c) {

    return new UserManager(new UserRepository(new User()));
};

$container['order_manager'] = function ($c) {

    return new OrderManager(new OrderRepository(new Order()));
};