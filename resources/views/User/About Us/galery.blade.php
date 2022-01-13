@extends('User.web')

@section('content')
    <div class="container">
        <section class="photo photo-page">
            <div class="container container">
                <h4>Photo Gallery</h4>
                <div class="row mt-2 pt-4">
                    @foreach ($photo as $p)
                        <div class="col-md-4 my-3">
                            <div class="rounded overflow-hidden image-wrapper">
                                <img src="{{ '/storage/' . $p->photo_galery_path }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')


@endsection
