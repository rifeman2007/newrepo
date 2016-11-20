<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseManager
 */
class BaseManager
{
    /**
     * @var
     */
    protected $repository;

    /**
     * @param $repository
     */
    public function __construct($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getFind($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @return mixed
     */
    public function getFindAll()
    {
        return $this->repository->findAll();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create( array $data)
    {
        return $this->repository->create($data);
    }

    /**
     * @param Model $model
     * @param array $data
     * @return mixed
     */
    public function update(Model $model, array $data)
    {
        return $this->repository->update($model, $data);
    }
}