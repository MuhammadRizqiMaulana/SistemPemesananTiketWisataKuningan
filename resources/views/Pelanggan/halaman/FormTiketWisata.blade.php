@extends('Pelanggan.layout.TampilanPelanggan')
@section('content')

<!-- content -->
    
        <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container header-text" id="top">
            <hr>
            <br>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Pemesanan Tiket Wisata</h6>
                        <h2>Wisata Palutungan</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="block-team-member-1 text-left rounded" style="border: 5px solid grey; width: 400px;">
                        <center><h2>Wisata Kuningan</h2><hr>
                            <p class="px-3 mb-4 mt-3">
                                <h6>Wisata Palutungan</h6>
                                <h1 style="color: green">000</h1> <br>
                                <small>Senin, 29 Maret 2021</small>
                            </p>
                        </center>
                    </div>
                </div>

                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                    <label><strong>Id Pemesanan : </strong></label>
                        <input type="text" class="form-control" placeholder="Id Pemesanan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Id Pemesanan'" value=" S-{{ rand() }}" readonly>

                    <input type="text" name="wisata" value="" hidden>
                    
                    <br>
                    <label><strong>Tanggal Berwisata : </strong></label>
                        <input type="text" class="form-control" placeholder="Pilih Tanggal Wisata" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Pilih Tanggal Wisata'">
                        @if ($errors->has('tanggal_sewa'))
                          <span class="text-danger"><p class="text-right">* {{$errors->first('tanggal_sewa') }}</p></span>
                        @endif

                    <br>
                    <label><strong>Jumlah Tiket : </strong></label>
                        <input type="number" min="1" class="form-control" placeholder="Jumlah Tiket" onfocus="this.placeholder = ''"
                                     onblur="this.placeholder = 'Jumlah Tiket'">
                        <span style="color: blue">* Tersedia 20 Tiket</span>
                        @if ($errors->has('tanggal_sewa'))
                          <span class="text-danger"><p class="text-right">* {{$errors->first('tanggal_sewa') }}</p></span>
                        @endif
                    <br><br>
                    <input type="submit" name="" value="Pesan">
                </div>

            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

<!-- content -->

@endsection