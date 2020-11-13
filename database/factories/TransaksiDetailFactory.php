<?php

namespace Database\Factories;

use App\Models\Transaksi_detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiDetailFactory extends Factory
{
    protected $model = Transaksi_detail::class;

    public function definition()
    {
        return [
            'jumlah' => $this->faker->numberBetween(1,100),
            'harga_beli' => $this->faker->randomNumber(),
            'discount' => 0
        ];
    }
}
