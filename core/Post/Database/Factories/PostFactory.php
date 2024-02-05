<?php

namespace Core\Post\Database\Factories;

use Core\Post\Models\Post as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(100),
            'description' => '',
            'priority' => '',
            'is_done' => $this->faker->boolean(),

        ];
    }
}
