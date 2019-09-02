<?php

namespace App\UI\Api\Controllers;

use App\Domain\Models\Category;
use App\Domain\Repositories\CategoryRepository;
use App\UI\Api\Requests\CreateCategoryRequest;
use App\UI\Api\Requests\UpdateCategoryRequest;
use App\UI\Api\Resources\CategoryResource;

class CategoryController
{
    /**
     * @var CategoryRepository|null
     */
    private $categoryRepository = null;

    /**
     * CategoryController constructor.
     *
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param CreateCategoryRequest $request
     *
     * @return CategoryResource
     */
    public function create(CreateCategoryRequest $request)
    {
        $category = $this->categoryRepository->create($request->validated());

        return new CategoryResource($category);
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function all()
    {
        $categories = $this->categoryRepository->all();

        return CategoryResource::collection($categories);
    }

    /**
     * @param Category $category
     *
     * @return CategoryResource
     */
    public function get(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * @param Category $category
     * @param UpdateCategoryRequest $request
     *
     * @return CategoryResource
     */
    public function update(Category $category, UpdateCategoryRequest $request)
    {
        $category = $this->categoryRepository->update($category, $request->validated());

        return new CategoryResource($category);
    }

    /**
     * @param Category $category
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Category $category)
    {
        $this->categoryRepository->delete($category);

        return response()->json(['msg' => 'OK']);
    }
}
