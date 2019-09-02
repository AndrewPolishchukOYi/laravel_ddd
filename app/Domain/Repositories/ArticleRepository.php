<?php

namespace App\Domain\Repositories;

use App\Domain\Models\Article;
use App\Infrastructure\Repositories\EloquentRepository;
use App\Domain\Contracts\ArticleRepository as ArticleRepositoryInterface;

class ArticleRepository extends EloquentRepository implements ArticleRepositoryInterface
{
    /**
     * @var Article
     */
    private $model = null;

    /**
     * ArticleRepository constructor.
     */
    public function __construct()
    {
        $this->model = Article::class;
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
