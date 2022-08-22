<?php

namespace App\Http\Resources;

use App\Models\Institution;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Institution
 */
class InstitutionResource extends JsonResource
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
