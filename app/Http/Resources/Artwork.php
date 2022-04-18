<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Artwork extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image_name' => env('IMG_URL') . $this->image_name,
            'artwork_name' => $this->artwork_name,
            'created_at' => $this->created_at->format('Y.m.d H:i:s'),
            'updated_at' => $this->updated_at->format('Y.m.d H:i:s'),
        ];
    }
}
