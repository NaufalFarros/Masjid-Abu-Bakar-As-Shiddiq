@extends('admin.index')

@section('head')
   
@endsection

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Photo Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tambah Photo Masjid</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Photo Masjid</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <div class="col-6">
                                <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                     <div class="form-group row">
                                            <div class="custom-file">
                                                <input type="file" accept="image/png, image/jpeg" class="custom-file-input" id="exampleInputFile" name="image" required>
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                     

                    </div>

                </div>

                {{-- /. Row --}}
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>


@endsection


@section('script')
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    
    <!-- bs-custom-file-input -->
    <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection
