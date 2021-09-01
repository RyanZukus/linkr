<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'external' => $this->faker->url(),
            'viewcount' => $this->faker->randomNumber(5, false),
            'nsfw' => $this->faker->boolean(),
        ];
    }
}
