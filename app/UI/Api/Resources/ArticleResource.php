<?php

namespace App\UI\Api\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * @inheritDoc
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
