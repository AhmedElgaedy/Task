<?php

namespace Core\Post\Controllers\API\V1;

use Core\Post\Requests\PostRequest as FormRequest;
use Core\Post\Models\Post as Model;
use Core\Post\Resources\PostResource as Resource;

class PostController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model       $model
     * @param string      $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
