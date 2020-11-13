<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Barang;
use App\Models\Transaksi;
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
        $transaksis = Transaksi::factory(10)->create();

        foreach ($kategoris as $kategori){
            $barangs = Barang::factory(10)->create(['kategori_id' => $kategori->id]);
            foreach ($barangs as $barang){
                foreach ($transaksis as $transaksi){
                    TransaksiDetail::factory(10)->create([
                        'barang_id' => $barang->id,
                        'transaksi_id' => $transaksi->id
                    ]);
                }
            }
        }
    }
}
