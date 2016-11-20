<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderManager
 */
class OrderManager extends BaseManager
{
    /**
     * @param Model $model
     * @return mixed
     */
    public function markAsCancelled(Model $model)
    {
        return $this->repository->updateStatus($model, Order::STATUS_CANCELLED);
    }

    /**
     * @param Model $model
     * @return mixed
     */
    public function markAsOrdered(Model $model)
    {
        return $this->repository->updateStatus($model, Order::STATUS_ORDERED);
    }
}