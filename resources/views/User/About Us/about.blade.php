@extends('User.web')


@section('content')
    <div class="container-fluid container-lg">

        <section>
            <h4 class="text-center">Profil Masjid</h4>
        </section>


        <section>
            <h4 class="text-center">Pengurus Harian Takmir</h4>
            <div class="row">
                
                    <div class="list-card-takmirs">
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Ketua Takmir</h3>
                        <h4>H.Ariman</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Wakil Takmir</h3>
                        <h4>P.Zen</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring perum griya gebang permai block C/7a</p>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Sekretaris 1</h3>
                        <h4>P.Agus</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Bendahara 1</h3>
                        <h4>P.saiful</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
            </div>
            </div>
            




            <div>
                <button class="rounded-pill btn-show-details">Lihat Semua</button>
            </div>
        </section>


        <section>
            <h4 class="text-center">Seksi-seksi Dll</h4>
            <div class="list-card-takmirs">
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Kebersihan</h3>
                        <h4>4 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Humas</h3>
                        <h4>4 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Imam </h3>
                        <h4>4 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/ngaji.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Guru Ngaji</h3>
                        <h4>2 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/muadzin.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Muadzin</h3>
                        <h4>2 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/penasehat.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Penasehat</h3>
                        <h4>2 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Khatib</h3>
                        <h4>10 Orang</h4>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Remas</h3>
                                <h4>6 Orang</h4>
                    </div>
                </div>
            </div>
            <div>
                <button class="rounded-pill btn-show-details">Lihat Semua</button>
            </div>
        </section>
      
@endsection
