@extends('admin.index')

@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
                        <li class="breadcrumb-item active">Rekap</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <section class="content">

        <div class="col">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h4><i class="fas fa-file-alt"></i> Saldo Kas Masjid</h4>
                    <div>
                        <h4>Saldo Awal : @currency($saldo->saldo)</h4>
                    </div>
                    <div class="bg-white">
                        <hr>
                    </div>
                    <h4 id=""> Pemasukan : @currency($rekap->sum('pemasukan'))</h4>

                    <h4 id="">Pengeluaran : @currency($rekap->sum('pengeluaran'))</h4>
                    <div class="bg-white">
                        <hr>
                    </div>
                    <h4 id="">Saldo Akhir : @currency( $saldo->saldo  + $rekap->sum('pemasukan') - $rekap->sum('pengeluaran')) </h4>
                </div>

            </div>
        </div>
        {{-- Table --}}

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Data Rekap Kas Masjid</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="rekap" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="col-1">No</th>
                                        <th class="col-2">Tanggal</th>
                                        <th class="col-5">Keterangan</th>
                                        <th class="col-2">Pemasukan</th>
                                        <th class="col-2">Pengeluaran</th>
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




@endsection

@section('script')
    {{-- AJAX REKAP --}}
    <script src="{{ asset('js/Kas_Masjid/Rekap/rekap.js') }}"></script>
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
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page specific script -->





@endsection
