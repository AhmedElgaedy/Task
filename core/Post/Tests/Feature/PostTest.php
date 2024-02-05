<?php

namespace Core\Post\Tests\Feature;

use Core\Base\Tests\ApiTestCase;
use Core\Post\Models\Post as Model;

class PostTest extends ApiTestCase
{
    /**
     * setting up
     *
     * @throws \ReflectionException
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->base_url     = $this->getApiBaseUrl() . 'posts/';
        $this->model        = new Model();
        $this->data         = $this->model::factory()->make()->toArray();
        $this->json         = $this->getJsonStructure();
        $this->json['data'] = ['id'];

        foreach ($this->data as $key => $value) {
            $this->json['data'][] = $key;
        }
    }
}
