@extends('User.web')

@section('content')
<section class="donation-subcribe text-center">
    <div class="donation-wrapper">
                 <div class="donation">
                     <h1>Event/Acara Dapat Berubah Sewaktu-waktu</h1>
                     <p>" Untuk Detail Informasi Bisa Menghubungi Takmir Masjid "</p>
                     
                 </div>
             </div>
</section>
    
    <section class="m-0">
        <div class="hal-event ">
            <div class="event-carousel">
                <div class="container">
                    <div class="m-auto row shadow rounded-3 bg-white">
                        <div class="col-md my-3 ">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('image/foto_takmir.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/imam.png') }}" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('image/masjid2.jpg') }}" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md my-3">
                            <h4>Judul : </h4>
                            <p>Hataman Minggu Kliwon</p>
                            <h4>Tanggal : </h4>
                            <p>28-09-2021</p>
                            <h4>DESKRIPSI :</h4>
                            <p>Bertempat Di Masjid Abu bakar</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row mt-5 mx-auto">
                    <div class="col-lg-6 pe-4">
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
                    <div class="col-lg-6 pe-4">
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
                    <div class="col-lg-6 pe-4">
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
                    <div class="col-lg-6 pe-4">
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

                </div>


            </div>
        </div>

    </section>

    <section>

    </section>
@endsection
