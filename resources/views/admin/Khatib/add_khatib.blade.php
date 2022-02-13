@extends('admin.index')

@section('head')
 <!-- jQuery -->
 <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet"
     href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
 <!-- daterange picker -->
 <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Jadwal Khatib</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tambah Jadwal Khatib</a></li>
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
                            <h3 class="card-title">Tambah Jadwal Khatib</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <div class="col-6">
                                <form action="{{ route('khatib.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text"
                                            class="form-control @error('nama')
                                            is-invalid
                                        @enderror"
                                            id="nama" value="{{ old('nama') }}" aria-describedby="emailHelp"
                                            placeholder="Nama" name="nama">
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input  @error('tanggal')
                                            is-invalid
                                        @enderror"
                                                data-target="#reservationdate" name="tanggal" />
                                            <div class="input-group-append" data-target="#reservationdate"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            @error('tanggal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </div>
                                       
                                    </div>

                                    <div class="form-group ">
                                        <label for="">Foto Khatib</label>
                                        <div class="custom-file">
                                            <input type="file" accept="image/png, image/jpeg" class="custom-file-input"
                                                id="exampleInputFile" name="images" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>





                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- InputMask/Moment JS -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    
      <!-- bs-custom-file-input -->
      <script src="{{ asset('AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
      
      <script>
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    </script>
      
      <script>
          $(function() {
              bsCustomFileInput.init();
          });
      </script>
    
    

@endsection
