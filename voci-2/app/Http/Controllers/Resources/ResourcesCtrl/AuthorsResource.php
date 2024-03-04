<?php

namespace App\Http\Resources\Ctrl;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResource extends JsonResource
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
            'surname' => $this->surname,
            'posts' => PostsResource::collection($this->whenLoaded('posts')) // Include posts using the PostsResource collection
        ];
    }
}
