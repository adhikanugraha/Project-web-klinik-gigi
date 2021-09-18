<?php

namespace Database\Factories;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendaftarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pendaftar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pasword'=> $this->faker->pasword(),
            'nama_pendaftar'=>$this->faker->name(),
            'tempat_lahir'=>$this->faker->word(),
            'tanggal_lahir'=> $this->faker->date(),
            'alamat_pendaftar'=> $this->faker->sentence(mt_rand(4,7)),
            'jenis_kelamin'=>$this->faker->word(),
            'hp_pendaftar'=>$this->faker->numerify('08-##########'),
        ];
    }
}
