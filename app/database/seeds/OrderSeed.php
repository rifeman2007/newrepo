<?php

/**
 * Class UserSeed
 */
class UserSeed
{
    function run()
    {
        $user               = new User();
        $user->user_id      = 1;
        $user->total        = 200;
        $user->status       = "09202222222";
        $user->save();
    }
}