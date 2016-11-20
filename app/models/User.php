<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    /**
     * @var string
     */
	protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lsstname',
        'email',
        'phone'
    ];

    /**
     * @var array
     */
    protected $guarded = ['id'];
}
