<?php

/**
 * Class OrderSeed
 */
class OrderSeed
{
    function run()
    {
        $order               = new Order();
        $order->user_id      = 1;
        $order->total        = 200;
        $order->status       = Order::STATUS_ORDERED;
        $order->save();
    }
}