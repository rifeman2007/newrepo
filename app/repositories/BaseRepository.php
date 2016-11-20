<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 */
class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param $id
     * @return mixed|static
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function findAll()
    {
        return $this->model->all();
    }

    /**
     * @param array $data
     * @return static
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param Model $model
     * @param $data
     * @return Model
     */
    public function update(Model $model, $data)
    {
        $model->update($data);

        return $model;
    }
}