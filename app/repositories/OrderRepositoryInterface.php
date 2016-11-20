<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Interface OrderRepositoryInterface
 */
interface OrderRepositoryInterface
{
    /**
     * @param Model $model
     * @param $status
     * @return Model
     */
    public function updateStatus(Model $model, $status);

    /**
     * @param $id
     * @return mixed|static
     */
    public function find($id);
}