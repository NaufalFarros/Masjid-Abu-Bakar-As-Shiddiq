 @extends('User.web')

 @section('head')
     <!-- DataTables -->
     <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
     <link rel="stylesheet"
         href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
     <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
     <!-- Tempusdominus Bootstrap 4 -->

     <link rel="stylesheet"
         href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
     <!-- daterange picker -->
     <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
     <!-- jQuery -->
     <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

 @endsection
 @section('content')

     <div class="container container">
         <section class="mt-3 banner">
             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                         class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                         aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                         aria-label="Slide 3"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                         aria-label="Slide 4"></button>
                 </div>
                 <div class="carousel-inner">
                     <div class="carousel-item active">
                         <div class="row">
                             <div class="col-md order">
                                 <h1 class="title">Website Masjid Abu Bakar As-Shiddiq</h1>
                                 <p class="subtitle">Website Ini Dibuat Agar Seluruh Masyarakat Dapat Melihat Secara
                                     Langsung Kegiatan Maupun Laporan Kas Masjid </p>
                                 <div class="d-flex justify-content-center d-md-block">

                                 </div>
                             </div>
                             <div class="col-md order">
                                 <img src="{{ asset('image/masjid-png-clipart-best-3.png') }}" alt="">
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row">
                             <div class="col-md order">
                                 <h1 class="title">Sejarah Masjid Abu Bakar As-Shiddiq</h1>
                                 <p class="subtitle">Sejarah Masjid Abu Bakar As-Shiddiq Lorem ipsum dolor sit amet
                                     consectetur adipisicing elit. Error architecto facilis assumenda accusamus expedita rem
                                     quo eligendi amet consequatur sit nulla, maxime in sapiente explicabo necessitatibus
                                     corporis quibusdam nemo? Non.</p>
                                 <div class="d-flex justify-content-center d-md-block">

                                 </div>
                             </div>
                             <div class="col-md order">
                                 <img src="{{ asset('image/Mosque-PNG-Image-HD.png') }}" alt="">
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row">
                             <div class="col-md order">
                                 <h1 class="title">Mari Beramal Jariyah</h1>
                                 <p class="subtitle">Kami Selaku Pengurus Takmir Masjid Abu Bakar As-Shiddiq,
                                     Mengucapkan Banyak Terimakasih Atas Amal Jariyah Yang Di Berikan Oleh Masyarakat.
                                     Berkat Bantuan Dan DO'A Masyarakat, Masjid Abu Bakar As-Shiddiq Dapat Berkembang Hingga
                                     Saat Ini .</p>
                                 <div class="d-flex justify-content-center d-md-block">

                                 </div>
                             </div>
                             <div class="col-md order">
                                 <img src="{{ asset('image/masjid-png-clipart-best-3.png') }}" alt="">
                             </div>
                         </div>
                     </div>
                     <div class="carousel-item">
                         <div class="row">
                             <div class="col-md order">
                                 <h1 class="title">Mari Kita Dukung Bersama Pelayanan Masjid</h1>
                                 <p class="subtitle">Kami Pengurus Takmir Masjid Akan Terus Bekerja Semaksimal Mungkin
                                     Untuk Memberikan Pelayanan Terbaik Kepada Masyarakat . Terimaksih :)</p>
                                 <div class="d-flex justify-content-center d-md-block">
                                     {{-- <button type="button" class="btn btn-light rounded-pill px-4 carousel-button">Read
                                             More</button>
                                         <button type="button"
                                             class="btn btn-outline-light rounded-pill px-3 ms-3 carousel-button">Get
                                             Involved</button> --}}
                                 </div>
                             </div>
                             <div class="col-md order">
                                 <img src="{{ asset('image/Mosque-PNG-Image-HD.png') }}" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>


         <section class="quick-links">
             <div>
                 <h4>Quick Links</h4>
                 <button class="rounded-pill btn-show-details">Show all</button>
             </div>
             <div class="link-wrapper">
                 <a href="{{ url('/') }}" class="card-list">
                     <i class="fas fa-home donate-icon"></i>
                     <p class="title">Home</p>
                     <p class="view-details">View Details</p>
                 </a>
                 <a href="{{ url('/about') }}" class="card-list">
                     <i class="fas fa-mosque donate-icon"></i>
                     <p class="title">About Us</p>
                     <p class="view-details">View Details</p>
                 </a>
                 <a href="{{ url('/event') }}" class="card-list">
                     <i class="far fa-calendar-alt donate-icon"></i>
                     <p class="title">Event</p>
                     <p class="view-details">View Details</p>
                 </a>
                 <a href="{{ url('/donate') }}" class="card-list">
                     <i class="fas fa-hand-holding-usd donate-icon"></i>
                     <p class="title">Donate</p>
                     <p class="view-details">View Details</p>
                 </a>
                 <a href="{{ url('/service') }}" class="card-list">
                     <i class="fas fa-concierge-bell donate-icon"></i>
                     <p class="title">Service</p>
                     <p class="view-details">View Details</p>
                 </a>

             </div>
         </section>

         <section class="prayer-times">
             <h4>Waktu Sholat</h4>
             <div class="row">
                 <div class="col-md ps-5 ps-md-0">
                     <div class="float-md-end">
                         <h3>Jember,</h3>
                         <h5>Indonesia</h5>
                     </div>
                 </div>
                 <div class="col-md-7 px-5">
                     <h3>Jam</h3>
                     <h5><span id="time">--:--</span> WIB</h5>
                     <div class="row times mt-4">
                         <div class="col">
                             <img src="{{ asset('image/fajr.png') }}" alt="">
                             <h5>SUBUH</h5>
                             <h5 id="subuh">--:--</h5>
                         </div>
                         <div class="col">
                             <img src="{{ asset('image/zhur.png') }}" alt="">
                             <h5>ZUHUR</h5>
                             <h5 id="zuhur">--:--</h5>
                         </div>
                         <div class="col">
                             <img src="{{ asset('image/asr.png') }}" alt="">
                             <h5>ASAR</h5>
                             <h5 id="asar">--:--</h5>
                         </div>
                         <div class="col">
                             <img src="{{ asset('image/maghrib.png') }}" alt="">
                             <h5>MAGRIB</h5>
                             <h5 id="magrib">--:--</h5>
                         </div>
                         <div class="col">
                             <img src="{{ asset('image/isha.png') }}" alt="">
                             <h5>ISYA'</h5>
                             <h5 id="isya">--:--</h5>
                         </div>
                     </div>
                 </div>
             </div>
         </section>


         <section class="event">
             <h4>Events</h4>
             <button class="rounded-pill btn-show-details">Show all</button>
             <div class="row m-auto mt-5 pt-4">
                 <div class="col-lg-8 pe-4">
                     <div class="row p-4 border align-items-center mb-3 rounded">
                         <div class="col">
                             <div class="border-end">
                                 <h5 class="date">Feb 22</h5>
                                 <p class="day">Tues</p>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5>Dua Tawassul</h5>
                             <p>5.30pm, Balishira Resort</p>
                         </div>
                         <div class="col">
                             <button class="rounded-pill btn-show-details">View Details</button>
                         </div>
                     </div>
                     <div class="row p-4 border align-items-center mb-3 rounded">
                         <div class="col">
                             <div class="border-end">
                                 <h5 class="date">Feb 22</h5>
                                 <p class="day">Tues</p>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5>Dua Tawassul</h5>
                             <p>5.30pm, Balishira Resort</p>
                         </div>
                         <div class="col">
                             <button class="rounded-pill btn-show-details">View Details</button>
                         </div>
                     </div>
                     <div class="row p-4 border align-items-center mb-3 rounded">
                         <div class="col">
                             <div class="border-end">
                                 <h5 class="date">Feb 22</h5>
                                 <p class="day">Tues</p>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5>Dua Tawassul</h5>
                             <p>5.30pm, Balishira Resort</p>
                         </div>
                         <div class="col">
                             <button class="rounded-pill btn-show-details">View Details</button>
                         </div>
                     </div>
                     <div class="row p-4 border align-items-center mb-3 rounded">
                         <div class="col">
                             <div class="border-end">
                                 <h5 class="date">Feb 22</h5>
                                 <p class="day">Tues</p>
                             </div>
                         </div>
                         <div class="col-6">
                             <h5>Dua Tawassul</h5>
                             <p>5.30pm, Balishira Resort</p>
                         </div>
                         <div class="col">
                             <button class="rounded-pill btn-show-details">View Details</button>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg upcoming-event">
                     <div class="border rounded p-4">
                         <h5>Upcoming</h5>
                         <h5>Event</h5>
                         <div id="carouselExampleIndicators2" class="carousel slide mt-3" data-bs-ride="carousel">

                             <div class="carousel-inner rounded border overflow-hidden">
                                 <div class="carousel-item active">
                                     <img src="{{ asset('image/BDwLWz.png') }}" class="d-block w-100" alt="...">
                                     <h5 class="p-4">The Ten Most Common Misconceptions about Islam</h5>
                                 </div>
                                 <div class="carousel-item">
                                     <img src="{{ asset('image/BDwLWz.png') }}" class="d-block w-100" alt="...">
                                     <h5 class="p-4">The Ten Most Common Misconceptions about Islam</h5>
                                 </div>
                                 <div class="carousel-item">
                                     <img src="{{ asset('image/BDwLWz.png') }}" class="d-block w-100" alt="...">
                                     <h5 class="p-4">The Ten Most Common Misconceptions about Islam</h5>
                                 </div>
                             </div>
                             <div class="carousel-indicators">
                                 <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0"
                                     class="carousel-indicator active" aria-current="true" aria-label="Slide 1"></button>
                                 <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1"
                                     class="carousel-indicator " aria-label="Slide 2"></button>
                                 <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2"
                                     class="carousel-indicator " aria-label="Slide 3"></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="kas">
             <h4>Kas Masjid Abu Bakar As-Shiddiq</h4>
             <div class="card">
                 <div class="row p-3">
                     <div class="col-md-6">
                         <h4>Total Pemasukan :@currency($kasWeek->sum('pemasukan')) </h4>
                         <h4>Total Pengeluaran : @currency($kasWeek->sum('pengeluaran')) </h4>
                     </div>
                     <div class="col-md-6">
                         {{-- @foreach ($saldoMinggu as $s) --}}

                         <h4>Saldo Minggu Lalu : @currency($saldoMinggulalu->saldo) </h4>
                         {{-- @endforeach --}}
                         <h4>Total Saldo : @currency( $saldoMinggulalu->saldo + $kasWeek->sum('pemasukan') -
                             $kasWeek->sum('pengeluaran')) </h4>
                     </div>
                 </div>
                 {{-- <div class=" col-md-6 my-4 mx-5">
                    <div class="">        
                    </div>
                </div> --}}

                 <!-- /.card-header -->
                 <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Tanggal</th>
                                 <th>Keterangan</th>
                                 <th>Pemasukan</th>
                                 <th>Pengeluaran</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($kasWeek as $d)
                                 @if ($d->jenis == 'masuk')
                                     <tr>
                                         <td>{{ $loop->iteration }}</td>
                                         <td>@datetime($d->tanggal)</td>
                                         <td>{{ $d->keterangan }}</td>
                                         <td>@currency($d->pemasukan)</td>
                                         <td>-</td>
                                     </tr>
                                 @elseif ($d->jenis == 'keluar')
                                     <tr>
                                         <td>{{ $loop->iteration }}</td>
                                         <td>@datetime($d->tanggal)</td>
                                         <td>{{ $d->keterangan }}</td>
                                         <td>-</td>
                                         <td>@currency($d->pengeluaran)</td>
                                     </tr>
                                 @endif
                             @endforeach
                         </tbody>
                     </table>
                 </div>
                 <!-- /.card-body -->
             </div>
         </section>
     </div>
     <section class="photo">
         <div class="container container">
             <h4>Photo Gallery</h4>
             <button class="rounded-pill btn-show-details">Show all</button>
             <div class="row mt-5 pt-4">

                 @foreach ($photo as $p)
                     <div class="col-md-4 my-3">
                         <div class="rounded overflow-hidden image-wrapper">
                             <img src="{{ '/storage/' . $p->photo_galery_path }}" alt="">
                         </div>
                     </div>
                 @endforeach


                 {{-- <div class="col-md-4 my-3">
                     <div class="rounded overflow-hidden image-wrapper">
                         <img src="{{ asset('image/BDwLWz.png') }}" alt="">
                     </div>
                 </div>
                 <div class="col-md-4 my-3">
                     <div class="rounded overflow-hidden image-wrapper">
                         <img src="{{ asset('image/BDwLWz.png') }}" alt="">
                     </div>
                 </div> --}}
             </div>
         </div>
     </section>

     <section class="donation-subcribe text-center">
         <div class="donation-wrapper">
             <div class="donation">
                 <h1>Bantu Kami Dalam Memberikan Pelayan Terbaik</h1>
                 <p>Dengan Bantuan dan Do'a Masyarakat Kami Takmir Masjid Akan Bekerja Semaksimal Mungkin Dalam Manyediakan
                     dan Memberikan Pelayanan </p>
                 <a href="{{ url('/donate') }}"><button class="btn rounded-pill px-4">Mari Beramal
                         Jariyah:)</button></a>
             </div>
         </div>
         <div class="container container shadow subcribe">
             <h3>Lihat Terus Event/Acara Ter-Update Di Website Ini</h3>
             <p>Kami Akan Update Event/Acara Yang Ada Di Masjid Abu Bakar As-Shiddiq</p>
             {{-- <div class="subcribe-input">
                     <input type="email" name="" class="rounded-pill border" placeholder="Email" id="email">
                     <button class="rounded-pill w-100 get-involved my-2 btn-subcribe">
                         Subcribe
                     </button>
                 </div> --}}
         </div>

     </section>

 @endsection

 @section('script')

     <!-- InputMask/Moment JS -->
     <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
     <!-- DataTables  & Plugins -->
     <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
     <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
     <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
     <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
     {{-- Jss Praytime --}}
     {{-- <script src="{{asset('js/FeMasjid/prayTime.js')}}"></script> --}}
     <script src="{{ asset('js/FeMasjid/api/PrayTime.js') }}"></script>

     <script>
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     </script>
 @endsection
