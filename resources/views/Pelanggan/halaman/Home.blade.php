@extends('Pelanggan.layout.TampilanPelanggan')
@section('content')

<!-- content -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="pelanggan/assets/images/slide-01.jpg" alt="">
                <div class="text-content">
                  <h3>Selamat Datang di Wisata Kuningan</h3>
                  <h5>Pemesanan Tiket Online</h5>
                  <a href="#" class="main-stroked-button">Lihat Wisata</a>
                  <a href="#" class="main-filled-button">Pesan Tiket</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="pelanggan/assets/images/slide-02.jpg" alt="">
                <div class="text-content">
                  <h3>Integrated Marketing Media</h3>
                  <h5>Pemesanan Tiket Online</h5>
                  <a href="#" class="main-stroked-button">Lihat Wisata</a>
                  <a href="#" class="main-filled-button">Pesan Tiket</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#projects"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-heading">
                    <h6>Galeri</h6>
                    <h2>Kumpulan Galeri Tempat Wisata</h2>
                </div>
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">Semua</li>
                        <li data-filter=".des">Palutungan</li>
                        <li data-filter=".dev">Linggarjati</li>
                        <li data-filter=".gra">Cilengkrang</li>
                        <li data-filter=".tsh">Sukageuri View</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="filters-content">
                    <div class="row grid">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-01.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-01.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-02.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-02.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-03.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-03.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-04.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-04.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-05.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-05.jpg" alt=""></a>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                          <div class="item">
                            <a href="pelanggan/assets/images/project-big-item-06.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="pelanggan/assets/images/project-item-06.jpg" alt=""></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Wisata Kuningan</h6>
                        <h2>Pilihan Wisata di Kuningan</h2>
                    </div>
                </div>
                @foreach($tempatWisata as $wisata)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mobile-bottom-fix-big">
                    <div class="item author-item">
                        <div class="member-thumb">
                        <img src="{{ url('pelanggan/assets/images/fotowisata/'.$wisata->foto) }}" height="400" width="350" alt="">
                            <div class="hover-effect">
                                <div class="hover-content">
                                    <a href="#" class="main-filled-button">Pesan Tiket</a>
                                </div>
                            </div>
                        </div>
                        <h4>{{$wisata->nama_wisata}}</h4>
                        <span>Harga Tiket : @rupiah($wisata->harga)</span><br>
                        <span>Tersedia : 200 tiket / belum bisa</span>
                    </div>
                    <br><br>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="pelanggan/assets/images/contact-info-01.png" alt="">010-020-0860</li>
                            <li><img src="pelanggan/assets/images/contact-info-02.png" alt="">info@company.com</li>
                            <li><img src="pelanggan/assets/images/contact-info-03.png" alt="">www.company.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Your Phone" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Your Email *" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Send Message Now <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

<!-- content -->

@endsection