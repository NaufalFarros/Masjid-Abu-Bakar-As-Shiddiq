@extends('admin.index')

@section('head')
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">


@endsection



@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jadwal Khatib </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Jadwal Khatib </a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">


        {{-- Table --}}

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="fails_message"></div>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title ">Data Jadwal Khatib</h3>
                        </div>

                        <!-- /.card-header -->

                        <div class="card-body">

                            <div class="mb-3">

                                <a href="{{ route('khatib.create') }}" class="btn btn-primary my-3"><i
                                        class="fas fa-info"></i> Tambah Data Jadwal Khatib </a>


                            </div>



                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Khatib</th>
                                        <th>Profile</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach ($khatib as $k )
                                        

                                    <tr>
                                        <td>{{$loop->iteration}}</td>

                                        <td>{{$k->khatib->nama}}</td>
                                        <td>@datetime($k->tanggal)</td>
                                        <td>
                                                <img src="{{'/storage/'.$k->khatib->khatib_profile_path}}" alt="">
                                            
                                        </td>

                                        <td>
                                            <form action="" method="post">
                                                <a href="" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-user-edit"></i> Edit
                                                </a>
                                                @csrf
                                                @method('delete')

                                                <button type="submit" class="btn btn-danger btn-sm" id="Hapus"><i
                                                        class="far fa-trash-alt"></i>Hapus</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Telepon</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        {{-- End Table --}}
    </section>
    <!-- /.content -->











@endsection

@section('script')
    {{-- sweet ALert Github --}}
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <!-- InputMask/Moment JS -->
    <script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script>
        $(function() {

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>






@endsection
