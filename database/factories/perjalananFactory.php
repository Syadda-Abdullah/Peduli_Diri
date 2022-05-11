<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JalanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user'=>1,
            'tanggal'=> $this->faker->date(),
            'jam'=> $this->faker->time(),
            'lokasi'->$this->faker->randomeElement
            ([
                'Bandung', 'Surbaya', 'Padang', 'Riau', 'Jakarta', 'Bali', 'Yogyakarta'
            ]),
            'suhu'=> $this->faker->numberBetween(30,40)
        ];
    }
}