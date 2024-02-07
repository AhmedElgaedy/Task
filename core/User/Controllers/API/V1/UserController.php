<?php

namespace Core\User\Controllers\API\V1;

use Illuminate\Foundation\Http\FormRequest as FormRequest;
use Core\User\Models\User ;
use Core\User\Resources\UserResource as Resource;

class UserController extends \Core\Base\Controllers\API\Controller
{

    public function index()
    {
        $users = User::all();
        return Resource::collection($users);
    }
}
