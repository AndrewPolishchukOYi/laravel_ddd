<?php

namespace App\UI\Api\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * @inheritDoc
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
