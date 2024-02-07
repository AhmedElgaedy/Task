<?php

namespace Core\User\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class UserResource extends Resource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'password' => $this->password,
            'e-mail' => $this->e-mail,
            'phone' => $this->phone,

            $this->mergeWhen($request->route()->getName() == 'api.v1.users.show', [

            ])
        ];
    }
}
