<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Barang;
use App\Models\TransaksiDetail;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = Kategori::factory(10)->create();

        foreach ($kategoris as $kategori){
            $barangs = Barang::factory(10)->create(['kategori_id' => $kategori->id]);
            foreach ($barangs as $barang){
                TransaksiDetail::factory(10)->create([
                    'barang_id' => $barang->id
                ]);
            }
        }
    }
}
