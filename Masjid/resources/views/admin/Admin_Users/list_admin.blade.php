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
                    <h1>Admin Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin Users</a></li>
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
                            <h3 class="card-title">Admin Users</h3>
                        </div>
                        <div class="card-body">
                           <a href="{{route('Admin-Users.create')}}" class="btn btn-primary my-3"><i class="fas fa-user-plus"></i>Tambah Admin Users</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="col-1">1</th>
                                        <td class="col-3">Mark</td>
                                        <td class="col-4">Otto</td>
                                        <td class="col-2">Otto</td>
                                        <td class="col-2">
                                            <a href="" class="btn btn-warning btn-sm"> <i class="fas fa-user-edit"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Hapus </a>
                                        </td>
                                    </tr>
                                
                                </tbody>
                            </table>
                        
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
