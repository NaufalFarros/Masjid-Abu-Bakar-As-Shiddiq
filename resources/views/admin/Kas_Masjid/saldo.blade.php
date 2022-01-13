@extends('admin.index')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>


@endsection



@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kas Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Kas Masjid</a></li>
                        <li class="breadcrumb-item active">Saldo Per Minggu</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">

        <div class="col">
            <!-- small card -->
            <div class="small-box bg-gray">
                <div class="inner">
                    <h4><i class="fas fa-plus-square"></i> Total Saldo Kas Minggu Lalu</h4>
                    <h1 id="total"></h1>
                </div>


            </div>
        </div>
        {{-- Table --}}

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="fails_message"></div>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title ">Data Saldo Kas Masjid / Minggu</h3>
                        </div>

                        <!-- /.card-header -->

                        <div class="card-body">

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" id="tambah_data">
                                    <i class="fas fa-info"></i> Tambah Data Saldo / Minggu
                                </button>

                            </div>



                            <table id="tb_saldo" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-1">No</th>
                                        <th class="col-2">Tanggal</th>
                                        <th class="col-2">Keterangan</th>
                                        <th class="col-2">Jumlah</th>
                                        <th class="col-2">Admin</th>
                                        <th class="col-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tablebody">
                                </tbody>
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

    {{-- modal --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Saldo / Minggu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul id="saveform_errList">

                    </ul>


                    <form>
                        @csrf

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="add_keterangan" name="keterangan"
                                placeholder="Keterangan">

                        </div>
                        <div class="form-group">
                            <label for="saldo">Jumlah Saldo</label>
                            <input type="text" class="form-control" id="add_saldo" name="saldo"
                                placeholder="Saldo / Minggu">

                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                <input type="text" name="tanggal" id="add_tanggal" class="form-control datetimepicker-input"
                                    data-target="#reservationdate1" />
                                <div class="input-group-append" data-target="#reservationdate1"
                                    data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>

                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="simpan_saldo">Simpan</button>
                    {{-- <a href="{{route('kas_masjid.store')}}"></a> --}}
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    {{-- modal --}}
    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Saldo / Minggu </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        @csrf

                        <ul id="updateform_errList"></ul>

                        <div>
                            <input type="hidden" id="edit_saldo_id">
                        </div>
                       <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan_edit" placeholder="Keterangan">
                        </div>
                        <div class="form-group">
                            <label for="pemasukan">Jumlah Saldo</label>
                            <input type="text" class="form-control " id="saldo_edit" placeholder="Saldo / Minggu">
                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="tanggal_edit" id="tanggal_edit"
                                    class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="edit_saldo">Edit</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




@endsection

@section('script')
    {{-- Semua Function AJax --}}
    <script src="{{asset('js/Kas_Masjid/Data_Saldo/allFunctionAjax.js')}}"></script>
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
    <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    {{-- <script src="{{ asset('js/Kas_Masjid/Data_Pemasukan/buttons.html5.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/Kas_Masjid/Data_Pemasukan/buttons.print.js') }}"></script> --}}
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>



@endsection
