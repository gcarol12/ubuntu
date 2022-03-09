<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UbuntusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'ubuntus_id'=> 1,
            'name'=> $this->faker->sentence,
            'fecha'=> $this->faker->sentence,
            'valor'=> $this->faker->sentence,
            'cedula'=> $this->faker->sentence,
            'email'=> $this->faker->sentence,
            'password'=> $this->faker->sentence,
            'phone'=> $this->faker->sentence,
            'contact_name'=> $this->faker->sentence,
            'ucontac_phone'=> $this->faker->sentence,
            'habitacion_id'=> $this->faker->sentence,
       
        ];
    }
}
