<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
  //deklarasikan model GUEST
    protected $model = Guest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'username'=>$this->faker->name(),
            'role'=>$this->faker->company(),
            'fullname'=>$this->faker->name(),
            'job'=>$this->faker->jobTitle(),
            'department'=>$this->faker->company(),
            'status'=>'Single'
        ];
    }
}
