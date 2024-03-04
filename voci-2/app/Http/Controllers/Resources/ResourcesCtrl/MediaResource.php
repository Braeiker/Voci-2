<?php

namespace App\Http\Resources\Ctrl;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
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
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
            'file' => $this->file,
            'posts' => PostsResource::collection($this->whenLoaded('posts')) // Include posts using the PostsResource collection
        ];
    }
}
