<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderRepository
 */
class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    /**
     * @param Model $model
     * @param $status
     * @return Model
     */
    public function updateStatus(Model $model, $status)
    {
        return $this->update($model, ['status' => $status]);
    }

    /**
     * @param $id
     * @return mixed|static
     */
    public function find($id)
    {
        return $this->model->with('user')->find($id);
    }
}