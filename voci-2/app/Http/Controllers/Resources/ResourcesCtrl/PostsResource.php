<?php

namespace App\Http\Resources\Ctrl;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Define the structure of the transformed resource
        return [
            'id' => $this->id,
            'post_name' => $this->post_name,
            'author_id' => $this->author_id,
            'media_id' => $this->media_id,
        ];
    }
}
