<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTiket extends Model
{
    protected $table        = 'tiket'; // nama tabel 
    protected $primaryKey   = 'id_tiket'; // primary key tabel 
    protected $fillable     = ['id_pemesanan', 
    							'id_wisata', 
    							'nomor_tiket', 
    							'tanggal_wisata',
    							'waktu_hari']; //field tabel

   	public function TempatWisata() { //wisata dimiliki oleh tiket
        return $this->belongsTo(ModelTempatWisata::class,'id_wisata');
        //nama_modelTabelrelasinya,foreignkey di tabel tiket
    }
}
