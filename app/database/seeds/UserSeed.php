<?php

/**
 * Class OrderSeed
 */
class OrderSeed
{
    function run()
    {
        $user               = new Order();
        $user->firstname    = "Aldwin";
        $user->lastname     = "Sabornido";
        $user->email        = "angle14201482@gmail.com";
        $user->phone        = "09202222222";
        $user->save();
    }
}