<?php

namespace App\Http\Controllers;

use App\ModelTiket;
use App\ModelTempatWisata;
use App\ModelPemesanan;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class PemesananController extends Controller
{
    public function index($id)     {  

        $tgl = Carbon::now()->format('Y-m-d');
        $jumlahtiket = ModelTiket::where('tanggal_wisata',$tgl)
        ->where('id_wisata',$id)
        ->count();

        $wisata = ModelTempatWisata::find($id);

        $sisaTiket = $wisata->maks_tiket - $jumlahtiket;
      
        return view('Pelanggan.halaman.FormTiketWisata',compact('wisata','sisaTiket'));     
    }

    public function store( Request $request) {

        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 15 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
            'maks_tiket.min' => 'tiket tidak boleh kurang dari 0',
            'foto.max' => 'tidak boleh lebih 2 Mb'
        ];

    	$this->validate($request, [
    		'id' => 'required|max:100|unique:pemesanan',
    		'nama_pelanggan' => 'required|max:50',
            'id_wisata' => 'required',
            'tanggal_wisata' => 'required|date',
            'jumlah_tiket' => 'required|numeric|min:1',
    	], $messages);

        $pesan = new ModelPemesanan();
        $pesan->id = $request->id;
        $pesan->nama_pelanggan = $request->nama_pelanggan;
        $pesan->status_pesan = "Menunggu Pembayaran";
    	$pesan->save();
        $pesan->id;

        for ($i=0; $i < $request->jumlah_tiket; $i++) { 
            $tgl = Carbon::now()->format('Y-m-d');
            $NomorTiket = ModelTiket::where('tanggal_wisata',$request->tanggal_wisata)
            ->where('id_wisata',$request->id_wisata)
            ->count();

            $tiket = new ModelTiket();
            $tiket->id_pemesanan = $pesan->id;
            $tiket->id_wisata = $request->id_wisata;
            $tiket->nomor_tiket = $NomorTiket + 1;
            $tiket->tanggal_wisata = $request->tanggal_wisata;
            $tiket->status_tiket = "Belum Datang";
            $tiket->save();
        }

    	return redirect('/')->with('alert-success','Data berhasil ditambahkan!');
    }

   	public function edit($id) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelGaleri::find($id);
        	return view('admin.halaman.ubah_data.UbahGaleri',compact('datas'));
        }
    }

    public function update($id, Request $request) {
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 15 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
            'maks_tiket.min' => 'tiket tidak boleh kurang dari 0',
            'foto.max' => 'tidak boleh lebih 2 Mb'
        ];

        $this->validate($request, [
            'nama_wisata' => 'required|max:50|unique:tempat_wisata',
            'foto' => 'required|image|max:2048'
        ], $messages);

        $datas = ModelTempatWisata::find($id_wisata);

        if (empty($request->nama_wisata)){
            $datas->nama_wisata = $datas->nama_wisata;
        }
        else {
            $datas->nama_wisata = $request->nama_wisata;
        }


        if (empty($request->nama_foto)){
            $datas->nama_foto = $datas->nama_foto;
        }
        else{
            unlink('pelanggan/assets/images/fotowisata/'.$datas->foto); //menghapus file lama
            $file = $request->file('foto'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('pelanggan/assets/images/fotowisata',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $datas->foto = $nama_file;

        }
        $datas->save();
        return redirect('/admin/MengelolaGaleri')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id) {
    	$datas = ModelGaleri::find($id);
    	$datas->delete();
    	return redirect('/admin/MengelolaGaleri')->with('alert-success','Data berhasil dihapus!');
    }


}
