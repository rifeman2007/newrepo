<?php

/**
 * Class UserSeed
 */
class UserSeed
{
    function run()
    {
        $user               = new User();
        $user->firstname    = "Aldwin";
        $user->lastname     = "Sabornido";
        $user->email        = "angle14201482@gmail.com";
        $user->phone        = "09202222222";
        $user->save();
    }
}