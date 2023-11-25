@extends('layouts.main')

@include('partials.navbar')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center:">
    <div class="container">
      <h1>Selamat Datang</h1>
      <h2>Di Website Resmi Antricare</h2>
      <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
    </div>
  </section><!-- End Hero -->
<main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Antricare</h3>
              <p>
              Di Web Antricare, kami berkomitmen untuk merevolusi pengalaman Anda dalam menunggu dan mengantri
              </p>
              <div class="text-center">
                <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-plus-medical"></i>
                    <h4>Poli Umum</h4>
                    <p>Pelayanan Poli Umum adalah pelayanan pemeriksaan medis berupa pemeriksaan kesehatan, pengobatan, dan edukasi kepada pasien dalam rangka meningkatkan kesehatan perorangan dan masyarakat.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-dna"></i>
                    <h4>Poli Gigi</h4>
                    <p>Pelayanan Kesehatan Gigi dan Mulut merupakan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bxs-first-aid"></i>
                    <h4>Poli THT</h4>
                    <p>Pelayanan Kesehatan THT atau Telinga Hidung Tenggorokan berupa pemeriksaan kesehatan, pengobatan, dan pemberian tindakan medis pada Telinga Hidung Tenggorokan</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


  </main><!-- End #main -->
@endsection

@include('partials.footer')