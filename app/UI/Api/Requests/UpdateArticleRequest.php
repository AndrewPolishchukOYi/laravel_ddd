<?php

namespace App\UI\Api\Requests;

use App\Infrastructure\Requests\BaseRequest;

class UpdateArticleRequest extends BaseRequest
{

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|min:3|max:255',
            'category_id' => 'sometimes|exists:categories,id'
        ];
    }
}
