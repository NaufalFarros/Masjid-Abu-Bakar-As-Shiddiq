@extends('admin.index')

@section('head')
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
                    <h1>Tambah Admin Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tambah Admin Users</a></li>
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
                            <h3 class="card-title">Tambah Admin Users</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <div class="col-6">
                                <form action="{{route('users.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control @error('nama')
                                            is-invalid
                                        @enderror" id="nama"  value="{{old('name')}}"
                                            aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                            @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control @error('email')
                                            is-invalid
                                        @enderror" id="email" value="{{old('email')}}"
                                            aria-describedby="emailHelp" placeholder="Email" name="email">
                                            @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control @error('password')
                                            is-invalid
                                        @enderror" id="exampleInputPassword1"
                                            placeholder="Password" name="password">
                                            @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">Confirm Password</label>
                                        <input type="password" class="form-control @error('password_confirmation')
                                            is-invalid
                                        @enderror" id="exampleInputPassword2"
                                            placeholder="Confirm Password" name="password_confirmation">
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="selectRole">Pilih Role</label>
                                       <select class="form-control select2 @error('role')
                                           is-invalid
                                       @enderror" style="width: 100%;" id="selectRole" name="role">
                                        <option selected="selected">-- Pilih Role --</option>
                                        <option value="admin">Admin </option>
                                        <option value="ketua">Ketua</option>
                                        <option value="wakil">Wakil</option>
                                        <option value="bendahara">Bendahara</option>
                                        <option value="sekretaris">Sekretaris</option>
                                    </select>
                                            @error('role')                
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                           
                                           
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                     

                    </div>

                </div>
                {{-- onclick="this.href='/download-pdf-periode/'+document.getElementById('tgl_awal').value+'/'+document.getElementById('tgl_akhir').value" --}}

                {{-- /. Row --}}
            </div>
            <!-- /.container-fluid -->
        </div>
    </section>


@endsection


@section('script')
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- InputMask/Moment JS -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>



@endsection
