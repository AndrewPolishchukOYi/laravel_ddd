<?php

namespace App\UI\Api\Requests;

use App\Infrastructure\Requests\BaseRequest;

class UpdateCategoryRequest extends BaseRequest
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
