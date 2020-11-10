<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'kategori_id' => 1,
            'harga_jual' => $this->faker->randomNumber(),
            'harga_beli' => $this->faker->randomNumber(),
            'jumlah' => $this->faker->numberBetween(1, 1000),
            'discount' => 0
        ];
    }
}
