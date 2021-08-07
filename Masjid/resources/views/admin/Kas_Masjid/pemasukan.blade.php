@extends('admin.index')

@section('head')
     <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- daterange picker -->
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">




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
            <li class="breadcrumb-item active">Pemasukan</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
 
  <section class="content">
    
    <div class="col">
        <!-- small card -->
        <div class="small-box bg-success">
          <div class="inner">
            <h4><i class="fas fa-plus-square"></i> Total Pemasukan Kas</h4>

            <h1>@currency($pemasukan->sum('pemasukan'))</h1>
          </div>
          
               
        </div>
      </div>
      {{-- Table  --}}

                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title ">Data Pemasukan Kas Masjid</h3>
                        </div>
                        
                        <!-- /.card-header -->
                        
                        <div class="card-body">
                      
                          <div class="mb-3">
                            <button type="button" class="btn btn-primary" id="tambah_data">
                              <i class="fas fa-info"></i>  Tambah Data Pemasukan
                            </button>

                          </div>
                         
                        
                          

                            <table id="tb_pemasukan" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th class="col-2">Tanggal</th>
                                <th class="col-5">Keterangan</th>
                                <th class="col-2">Jumlah</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach ($pemasukan as $pms )
                                @if ($pms->jenis == 'masuk')
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>@datetime($pms->tanggal)</td>
                                  <td>{{ $pms ->keterangan}}</td>
                                  <td>@currency($pms ->pemasukan)</td>
                                  <td>
                                    <a href="#" class="text-primary" id="edit_data"> <i class="fas fa-edit">Edit </i></a>
                                    <a href="#" class="text-danger"> <i class="fas fa-trash-alt">Hapus</i></a>
                                  </td>
                                </tr>
                                @endif
                              @endforeach
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
          <h5 class="modal-title">Tambah Data Kas Masjid</h5>
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
                          <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" >
                    
                  </div>
                  <div class="form-group">
                              <label for="pemasukan">Jumlah Pemasukan</label>
                              <input type="text" class="form-control" id="pemasukan" name="pemasukan" placeholder="pemasukan" >        
                           
                    </div>
                <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                        <input type="text" name="tanggal" id="tanggal" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                        <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpan_pemasukan">Simpan</button>
                {{-- <a href="{{route('kas_masjid.store')}}"></a> --}}
              </div>
            </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



   {{-- modal --}}
   <div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Data Kas Masjid</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            @csrf
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" id="keterangan_edit" placeholder="Keterangan">
            </div>
            <div class="form-group">
              <label for="pemasukan">Jumlah Pemasukan</label>
              <input type="text" class="form-control " id="pemasukan_edit" placeholder="pemasukan">
            </div>
           <!-- Date -->
           <div class="form-group">
            <label>Date:</label>
              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" name="tanggal_edit" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
          </div>
            

          </form>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
 
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



@endsection

@section('script')
{{-- sweet ALert Github --}}
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
 <!-- jQuery -->
 <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- InputMask/Moment JS -->
<script src="{{asset('AdminLTE/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('js/Data_Pemasukan/buttons.html5.js')}}"></script>
<script src="{{asset('js/Data_Pemasukan/buttons.print.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


{{-- open modals pemasukan --}}
<script>
  $(document).ready(function () {
    $('#tambah_data').click(function (e) { 
      e.preventDefault();
      $('#modal-default').modal('show');   
    });
  });
</script>



<script>

$(document).ready(function () {
  
  function datapemasukan()
  {
        $.ajax({
          type: "GET",
          url: "/data-pemasukan",
          dataType: "json",
          success: function (response) {
            // console.log(response.pemasukan);


          }
        });
  }


  $('#simpan_pemasukan').click(function (e) { 
    e.preventDefault();
    var data =
      {
        'keterangan': $('#keterangan').val(),
        'pemasukan': $('#pemasukan').val(),
        'tanggal' : $('#tanggal').val(),
      }
        console.log(data);
      
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

      $.ajax({
        type: "POST",
        url: "{{route('kas-masjid.store')}}",
        data: data,
        dataType: "json",
        success: function (response){
          console.log(response);
          if(response.status == 400)
                {
                      $('#saveform_errList').html("");
                      $('#saveform_errList').addClass('alert alert-danger');
                      $.each(response.errors, function (key, err_value) { 
                         $('#saveform_errList').append("<li>"+err_value+"</li>");
                      // console.log(err_value);

                        });
                        
                }
                else
                {
                  
                   $('#saveform_errList').html(""); 
                   $('#modal-default').modal('hide');
                  //  $('#tb_pemasukan').DataTable().ajax.reload();
                  Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Data Berhasil Di Tambah',
                      showConfirmButton: false,
                      timer: 1500
                    });
                    
                  

                   $('#modal-default').find('input').val();
                    
                }
        }

      });
  });
});
</script>



{{-- format rupiah Modal Pemasukan --}}
<script type="text/javascript">		
  var rupiah = document.getElementById('pemasukan');
  rupiah.addEventListener('keyup', function(e){
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, 'Rp. ');
  });
  /* Fungsi formatRupiah */
  function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
  }
</script>





{{-- date picker --}}
<script type="text/javascript">
  $(function () {
      
    $('#reservationdate,#reservationdate1').datetimepicker({
        format: 'DD/MM/YYYY'
      });
    // $('#reservationdate1').datetimepicker({
    //     format: 'L'
    // });
  });
</script>




<!-- Page specific script -->
<script>
   $(document).ready(function () {
    $("#tb_pemasukan").DataTable({   
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tb_pemasukan_wrapper .col-md-6:eq(0)');
   }); 
  </script>












@endsection