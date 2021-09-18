<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pasien'=>$this->faker->name(),
            'tanggal_lahir_pasien'=>$this->faker->date(),
            'tempat_lahir_pasiens'=>$this->faker->sentence(mt_rand(4,7)),
            'jenis_kelamin'=>$this->faker->word(),
            'tindakan'=>$this->faker->sentence(mt_rand(5,7)),
            'hasil_diagnosa'=>$this->faker->sentence(mt_rand(7,10)),
            
        ];
    }
}
