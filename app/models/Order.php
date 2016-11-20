<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Order
 */
class Order extends Eloquent
{
    const STATUS_ORDERED    = 1;
    const STATUS_CANCELLED  = 2;

    /**
     * @var string
     */
	protected $table = 'orders';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'total',
        'date',
        'status'
    ];

    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }
}
