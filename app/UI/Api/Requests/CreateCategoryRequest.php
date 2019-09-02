<?php

namespace App\UI\Api\Requests;

use App\Infrastructure\Requests\BaseRequest;

class CreateCategoryRequest extends BaseRequest
{

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255'
        ];
    }
}
