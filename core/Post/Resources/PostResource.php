<?php

namespace Core\Post\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'priority' => $this->priority,
            'is_done' => $this->is_done,

            $this->mergeWhen($request->route()->getName() == 'api.v1.posts.show', [

            ])
        ];
    }
}
