<?php

namespace Core\User\Tests\Feature;

use Core\Base\Tests\ApiTestCase;
use Core\User\Models\User as Model;

class UserTest extends ApiTestCase
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

        $this->base_url     = $this->getApiBaseUrl() . 'users/';
        $this->model        = new Model();
        $this->data         = $this->model::factory()->make()->toArray();
        $this->json         = $this->getJsonStructure();
        $this->json['data'] = ['id'];

        foreach ($this->data as $key => $value) {
            $this->json['data'][] = $key;
        }
    }
}
