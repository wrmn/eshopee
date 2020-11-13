<?php

namespace Database\Factories;

use App\Models\TransaksiDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetailFactory extends Factory
{
    protected $model = TransaksiDetail::class;

    public function definition()
    {
        return [
            'jumlah' => $this->faker->numberBetween(1,100),
            'harga_beli' => $this->faker->randomNumber(),
            'discount' => 0,
            'transaksi_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
