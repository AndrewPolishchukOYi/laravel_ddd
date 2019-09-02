<?php

namespace App\Infrastructure\Contracts;

interface BaseRepository
{
    /**
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * @param $model
     * @param $data
     * @return mixed
     */
    public function update($model, $data);

    /**
     * @param $model
     * @return mixed
     */
    public function delete($model);

    /**
     * @return mixed
     */
    public function all();
}
