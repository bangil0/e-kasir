<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StokModel extends Model
{
    protected $table = 'stok';
    protected $fillable = ['id_barang','jumlah_stok_masuk','tanggal_masuk','tanggal_kadaluarsa','sisa_stok','harga_beli','harga_jual'];
    protected $primaryKey = 'id_stok';
}