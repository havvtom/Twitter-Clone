<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MediaResource;

class MediaResource extends JsonResource
{
    public $collects = MediaResource::class;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'url' => $this->baseMedia->getFullUrl(),
            'type' => $this->baseMedia->type()
        ];
    }
}
