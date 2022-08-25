<?php

namespace App\Http\Resources;

use App\Models\Timeline;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @mixin Timeline
 */
class TimelineResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
