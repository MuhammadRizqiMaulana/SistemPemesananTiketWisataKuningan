<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPemesanan extends Model
{
    protected $table        = 'pemesanan'; // nama tabel 
    protected $primaryKey   = 'id_pemesanan'; // primary key tabel 
    protected $fillable     = ['id_pelanggan', 
    							'id_admin', 
    							'nama_pelanggan', 
    							'waktu',
    							'status_pesan']; //field tabel

    public function Admin() { //Penyewaan dimiliki oleh Admin
        return $this->belongsTo(ModelAdmin::class,'id_admin');
        //nama_modelTabelrelasinya,foreignkey di tabel pemesanan
    } 

    public function Pelanggan() { //Penyewaan dimiliki oleh User
        return $this->belongsTo(ModelPelanggan::class,'id_pelanggan');
        //nama_modelTabelrelasinya,foreignkey di tabel pemesanan
    }
}
