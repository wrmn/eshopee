<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    protected $table = 'transaksi_detail';

    public $timestamps = false;

    public function transaksi() {
        return $this->belongsTo('App\Models\Transaksi');
    }
    public function barang() {
        return $this->belongsTo('App\Model\Barang');
    
    } 

}
