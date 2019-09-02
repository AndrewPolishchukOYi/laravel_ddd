<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Category;
use App\Infrastructure\Repositories\EloquentRepository;
use App\Domain\Contracts\CategoryRepository as CategoryRepositoryInterface;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    private $model;

    /**
     * CategoryRepository constructor.
     */
    public function __construct()
    {
        $this->model = Category::class;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
       return $this->model::create($data);
    }

    /**
     * @inheritDoc
     */
    public function delete($model)
    {
        $model->delete();
    }

    /**
     * @inheritDoc
     */
    public function update($model, $data)
    {
        $model->fill($data)->save();

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return $this->model::all();
    }
}
