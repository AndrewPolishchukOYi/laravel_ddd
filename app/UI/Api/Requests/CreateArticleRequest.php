<?php

namespace App\UI\Api\Requests;

use App\Infrastructure\Requests\BaseRequest;

class CreateArticleRequest extends BaseRequest
{

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'category_id' => 'required|exists:categories,id'
        ];
    }
}
