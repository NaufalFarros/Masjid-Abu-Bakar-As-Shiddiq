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
            <h4 class="text-center">Sejarah Masjid</h4>
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
                {{-- </kebersihan> --}}



                {{-- < Humas > --}}
                <div class="d-flex" id="humas_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/humas.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Humas</h3>
                            <h4>4 Orang</h4>
                            <button class="rounded-pill" id="humas">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-primary humas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Humas 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary humas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Humas 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary humas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Humas 3</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary humas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/kebersihan.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Humas 4</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- </ Humas > --}}

                {{-- < Imam > --}}
                <div class="d-flex" id="imam_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Imam </h3>
                            <h4>4 Orang</h4>
                            <button class="rounded-pill" id="imam">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-success imam_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Imam 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-success imam_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Imam 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-success imam_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Imam 3</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-success imam_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/imam.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Imam 4</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- </ Imam > --}}

                {{-- <Ustadz> --}}
                <div class="d-flex" id="gurungaji_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/ngaji.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Ustadz</h3>
                            <h4>2 Orang</h4>
                            <button class="rounded-pill" id="gurungaji">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary gurungaji_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/ngaji.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Ustadz 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary gurungaji_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/ngaji.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Ustadz 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </Ustadz> --}}


                {{-- <Muadzin> --}}
                <div class="d-flex" id="muadzin_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/muadzin.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Muadzin</h3>
                            <h4>2 Orang</h4>
                            <button class="rounded-pill" id="muadzin">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-info muadzin_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/muadzin.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Muadzin 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-info muadzin_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/muadzin.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Muadzin 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- </Muadzin> --}}

                {{-- <Penasehat> --}}
                <div class="d-flex" id="penasehat_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/penasehat.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Penasehat</h3>
                            <h4>2 Orang</h4>
                            <button class="rounded-pill" id="penasehat">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-danger penasehat_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/penasehat.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Penasehat 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-danger penasehat_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/penasehat.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Penasehat 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- </Penasehat> --}}

                {{-- <Khatib> --}}
                <div class="d-flex" id="khatib_content">
                    <div class="card-takmirs p-0 py-4">
                        <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                        <div class="container-card-takmirs">
                            <h3>Khatib</h3>
                            <h4>10 Orang</h4>
                            <button class="rounded-pill" id="khatib">Show</button>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 3</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 4</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 5</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 6</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 7</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 8</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 9</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-indigo khatib_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/khatib.jpg') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Khatib 10</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- </Khatib> --}}

                {{-- <remas> --}}
                    <div class="d-flex" id="remas_content">

                        <div class="card-takmirs p-0 py-4">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas</h3>
                                <h4>6 Orang</h4>
                                <button class="rounded-pill" id="remas">Show</button>
                            </div>
                        </div>
                    </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 1</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 2</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 3</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 4</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 5</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cyan remas_epl">
                    <div class="py-2">
                        <div class="card-takmirs">
                            <img class="card-img" src="{{ asset('image/remas.png') }}" alt="">
                            <div class="container-card-takmirs">
                                <h3>Remas 6</h3>
                                <h4>Bpk...</h4>
                                <p>091231231388</p>
                                <p> Jaln Kaca Piring</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- </remas> --}}


            </div>

        </section>
    </div>
@endsection
@section('script')


@endsection
