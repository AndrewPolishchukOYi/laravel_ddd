<?php

namespace App\UI\Api\Controllers;

use App\Domain\Models\Article;
use App\Domain\Repositories\ArticleRepository;
use App\UI\Api\Requests\CreateArticleRequest;
use App\UI\Api\Requests\UpdateArticleRequest;
use App\UI\Api\Resources\ArticleResource;

class ArticleController
{
    /**
     * @var ArticleRepository|null
     */
    private $articleRepository = null;

    /**
     * ArticleResourceController constructor.
     *
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param CreateArticleRequest $request
     *
     * @return ArticleResource
     */
    public function create(CreateArticleRequest $request)
    {
        $article = $this->articleRepository->create($request->validated());

        return new ArticleResource($article);
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        $articles = $this->articleRepository->all();

        return ArticleResource::collection($articles);
    }

    /**
     * @param Article $article
     *
     * @return ArticleResource
     */
    public function get(Article $article)
    {
        return new ArticleResource($article);
    }

    /**
     * @param Article $article
     * @param UpdateArticleRequest $request
     *
     * @return ArticleResource
     */
    public function update(Article $article, UpdateArticleRequest $request)
    {
        $article = $this->articleRepository->update($article, $request->validated());

        return new ArticleResource($article);
    }

    /**
     * @param Article $article
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Article $article)
    {
        $this->articleRepository->delete($article);

        return response()->json(['msg' => 'OK']);
    }
}
