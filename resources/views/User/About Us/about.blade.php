@extends('User.web')


@section('content')
    <section class="___class_+?0___">
        <h4 class="text-center">Profil Masjid</h4>
        <div class="card-profile-masjid">
            <div class="row text-md-center">
                <div class="col-md-6">
                    <h4>Luas Tanah : 500M</h4>
                    <h4>Status Tanah : WAQAF</h4>
                </div>
                <div class="col-md-6">
                    <h4>Luas Bangunan : 4500M</h4>
                    <h4>Daya Tampung Jamaah : 250</h4>
                </div>
            </div>
        </div>

        <div class="container shadow card-sejarah-masjid">
            <h4>Sejarah Masjid</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, laborum aspernatur quaerat qui consequatur
                similique, ex quod reiciendis ducimus exercitationem commodi magni dicta beatae eum quae? Ipsum deleniti
                quis hic. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus molestiae quas eaque optio
                doloremque velit dolor sit eos, maiores at. Aliquam officiis quos consequuntur, ad velit similique eos sequi
                quibusdam.</p>
        </div>

    </section>
    <div class="container-fluid container-lg">




        <section class="___class_+?8___">
            <h4 class="text-center">Pengurus Harian Takmir</h4>

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
                        <h3>Sekretaris 2</h3>
                        <h4>P. Anton</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Bendahara 1</h3>
                        <h4>P. Saiful</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/pengurus.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Bendahara 2</h3>
                        <h4>Naufal Farros</h4>
                        <p>09123123132</p>
                        <p> Jaln Kaca Piring</p>
                    </div>
                </div>
            </div>



        </section>


        <section class="___class_+?29___">
            <h4 class="text-center">Seksi-seksi Dll</h4>

            <div class="list-card-takmirs">
                {{-- < Kebersihan > --}}
                <div class="d-flex" id="kebersihan_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Kebersihan</h3>
                            <h4>4 Orang</h4>
                            <button class="rounded-pill" id="kebersihan">Show</button>
                        </div>
                    </div>
                </div>


                {{-- </ Kebersihan> --}}

                <div class="bg-warning kebersihan_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Kebersihan 1</h3>
                                <h4>Bpk. Saripin </h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-warning kebersihan_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Kebersihan 2</h3>
                                <h4>Bpk. Anton </h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-warning kebersihan_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Kebersihan 3</h3>
                                <h4>Bpk. David </h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-warning kebersihan_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Kebersihan 4</h3>
                                <h4>Bpk. Kir </h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- < Humas > --}}
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Humas</h3>
                        <h4>4 Orang</h4>
                        <button class="rounded-pill" id="humas"> Show </button>
                    </div>
                </div>


                {{-- </ Humas > --}}

                {{-- < Imam > --}}
                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Imam </h3>
                        <h4>4 Orang</h4>
                        <button class="rounded-pill" id="imam"> Show</button>
                    </div>
                </div>


                {{-- </ Imam > --}}

                <div class="card-takmirs">
                    <img class="card-img" src="{{ asset('image/ngaji.jpg') }}" alt="">
                    <div class="container-card-takmirs">
                        <h3>Guru Ngaji</h3>
                        <h4>2 Orang</h4>
                    </div>
                </div>

                <div class="list-card-takmirs" id="humas_epl">
                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Humas 1</h3>
                            <h4>Bpk. 1 </h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
                    </div>

                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Humas 2</h3>
                            <h4>Bpk. 2 </h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
                    </div>
                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Humas 3</h3>
                            <h4>Bpk. 3</h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
                    </div>
                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Humas 4</h3>
                            <h4>Bpk. 4</h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
                    </div>
                </div>
                <div class="list-card-takmirs" id="imam_epl">
                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Imam 1</h3>
                            <h4>Bpk. 1 </h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
                    </div>

                    <div class="card-takmirs">
                        <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Imam 2</h3>
                            <h4>Bpk. 2 </h4>
                            <p>091231231388</p>
                            <p> Jaln Kaca Piring</p>
                        </div>
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

        </section>
    </div>
@endsection
@section('script')


@endsection
