@extends('user.template.baseUser')

@section('content')
    
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('public/images/ariel_winter.jpg')}})">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda</a></span> <span>Tentang</span></p>
            <h1 class="mb-0 bread">Tentang</h1>
          </div>
        </div>
      </div>
    </div>
<br><br><br>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('public/images/about2.jpg')}})">
            <a href="https://youtu.be/FbKyIYCMHt4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
              <span class="icon-play"></span>
            </a>
          </div>
          <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section-bold mb-4 mt-md-5">
              <div class="ml-md-0">
                <h2 class="mb-4">Rizky Orama, developer BANGSAT.id</h2>
              </div>
            </div>
            <div class="pb-md-5">
              <p>Mun diperatikan bah begian am dien, besak ke gaye. Tapi dak tau lah, tinggal Tuhan gik mah menggerakkan hatinyen.</p>
              <p>Kulak buktikanlah sorang, kali dak pecaye dengan cakap aku bah!</p>
              <p><a href="#" class="btn btn-primary">Belanja Sekarang</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Usah Lupa!</h2>
            <span>Mun pemilu nanti mileh Pak Yasir jak.</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);">
      <div class="container">
        <div class="row justify-content-center py-5">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="10000">0</strong>
                    <span>Pengunjung Hari Ini</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>
                    <span>Cabang</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="1000">0</strong>
                    <span>Rekan</span>
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>
                    <span>Penghargaan</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Testimoni</span>
            <h2 class="mb-4">Bukan Gak Cakap Sombong Bah</h2>
            <p>Manak diasi bujor ak omong sidak nan.</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">LANJUTKAN!</p>
                    <p class="name">Martin Rantan</p>
                    <span class="position">Calon Bupati Ketapang 2 Periode</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Hai Gaes, terima kasih buat lo semua *******!</p>
                    <p class="name">Mamank Garox</p>
                    <span class="position">Sejarawan</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">BANGSAT KAU!</p>
                    <p class="name">Lord Imam Supriadi</p>
                    <span class="position">Lord Kita Bersama</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Pak-ketipak-ketipung suara gendang bertalu-talu, pura-pura malu padahal memang dak tau malu.</p>
                    <p class="name">Noberto</p>
                    <span class="position">Mahasiswa Tolol</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Kalau bukan kite, siape gik? Kalau bukan sekarang, bile gik?</p>
                    <p class="name">Junaidi-Sahrani</p>
                    <span class="position">Paslon Bupati Ketapang Nomor Urut 2</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection