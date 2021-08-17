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
                    <h1>Laporan Kas-Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                        <li class="breadcrumb-item active">Laporan Kas-Masjid</li>
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
                                        <h3 class="card-title">Laporan Kas-Masjid</h3>
                                    </div>
                                    <div class="card-body">
                                        <!-- Date -->
                                    
                                         <form action="{{url('/download-pdf-periode')}}" method="GET" target="_blank">
                                        <div class="form-group col-md-6">
                                            <label> Tanggal Awal </label>
                                            <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" id="tgl_awal"
                                                    data-target="#reservationdate1" placeholder="Tanggal Awal" name="tglawal" required/>
                                                    
                                                <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Tanggal Akhir </label>
                                            <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" name="tglakhir"
                                                    data-target="#reservationdate2" placeholder="Tanggal Akhir" id="tgl_akhir" required/>
                                                    
                                                <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.card-body -->
                                        <a href=""  id="cetak_periode" ><button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Cetak Periode</button></a>                    
                                    </form>
                                        <a href="{{url('/download-pdf')}}" target="_blank" ><button type="submit" class="btn btn-primary mt-3"><i class="fas fa-print"></i> Cetak Semua</button></a>
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

<script>
    //  Timepicker
    $('#reservationdate1,#reservationdate2').datetimepicker({
      format: 'DD-MM-YYYY',
    });
  
    // $('#reservationdate1,#reservationdate2').datetimepicker({
    //     changeMonth: true,
    //     changeYear: true,
    //     yearRange: '2011:2037',
    //     Format: 'dd/mm/yy',
    //     minDate: 0,
    //     defaultDate: null
    // }).on('change', function() {
    //     if($(this).valid()){
    //    $(this).removeClass('invalid').addClass('success');   
    // }else{
    //     $(this).addClass('invalid');
    // }
    // });

   
</script>
{{-- 
<script>
    $(document).on('click','#cetak_periode', function () {
       
   
        var data = {
            'tglawal': $('#tgl_awal').val(),
            'tglakhir': $('#tgl_akhir').val(),
        }
        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
        $.ajax({
            type: "GET",
            url: "/download-pdf-periode/",
            data: data,
            dataType: "json",
            success: function (response) {
                alert('Berhasil');
            }
        });
        
    });
</script> --}}

@endsection
