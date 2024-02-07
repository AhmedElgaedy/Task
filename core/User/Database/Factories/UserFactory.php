<?php

namespace Core\User\Database\Factories;

use Core\User\Models\User as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
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
            'first_name' => $this->faker->text(100),
            'last_name' => '',
            'password' => $this->faker->text(100),
            'e-mail' => $this->faker->text(100),
            'phone' => $this->faker->phoneNumber(),

        ];
    }
}
