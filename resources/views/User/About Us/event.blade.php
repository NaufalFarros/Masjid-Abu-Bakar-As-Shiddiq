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
                                    {{-- <div class="carousel-item active">
                                        <img src="{{ asset('image/foto_takmir.jpg') }}" class="d-block w-100" alt="...">
                                    </div> --}}

                                    @foreach ($data as $d)
                                        @foreach ($d->photo as $key => $photo)
                                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">


                                                <img src="{{ '/storage/' . $photo->photo_event_path }}"
                                                    class="d-block w-100" alt="">

                                            </div>
                                        @endforeach
                                    @endforeach

                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md my-3">
                            @foreach ($data as $d)

                                <h4>Judul </h4>
                                <h5> {{ $d->judul }} </h5>
                                <h4> Tanggal </h4>
                                <h5> @datetime($d->tanggal) </h5>
                                <h4> Deskripsi </h4>
                                <h5> {{ $d->deskripsi }} </h5>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row mt-5 mx-auto">
                    @foreach ($event as $e)


                        <div class="col-lg-6 pe-4">
                            <div class="row p-4 border align-items-center mb-3 rounded">
                                <div class="col">
                                    <div class="border-end">
                                        <h5 class="date">@datetime($e->tanggal)</h5>
                                        <p class="day">{{ $e->tanggal->translatedFormat('l j F Y') }}</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5>{{ $e->judul }}</h5>
                                    <p>{{ $e->deskripsi }}, Masjid Abu Bakar As-Shiddiq</p>
                                </div>
                                <div class="col">
                               <a href="{{('/event/'.$e->id)}}">  <button class="rounded-pill btn-show-details">View Details</button></a> 
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{ $event->links('pagination::bootstrap-4')  }}


            </div>
        </div>

    </section>

    <section>

    </section>
@endsection
