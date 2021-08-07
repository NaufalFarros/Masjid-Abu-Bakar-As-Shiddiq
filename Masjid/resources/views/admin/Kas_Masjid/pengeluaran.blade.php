@extends('admin.index')

@section('head')
     <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
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
            <li class="breadcrumb-item active">Pengeluaran</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
 
  <section class="content">
    
    <div class="col">
        <!-- small card -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h4><i class="fas fa-minus-square"></i> Total Pengeluaran Kas</h4>

            <h1>Rp. 1.000.000</h1>
          </div>
        
        </div>
      </div>
      {{-- Table  --}}

                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                        <div class="card-header bg-primary">
                            <h3 class="card-title">Data Pemasukan Kas Masjid</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                              <i class="fas fa-info"></i>  Tambah Data Pengeluaran
                            </button>
                          </div>
                            <table id="tb_pengeluaran" class="table table-bordered table-striped">
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
                            <tr>
                                <td>1</td>
                                <td>27/08/2021
                                </td>
                                <td>Jariyah Jumat 4 </td>
                                <td>Rp.400.000</td>
                                <td>
                                    <a href="#" class="text-primary" id="edit_data"> <i class="fas fa-edit">Edit </i></a>
                                    <a href="#" class="text-danger"> <i class="fas fa-trash-alt">Hapus</i></a>
                                </td>
                            </tr>
                            
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
            <form>
              @csrf
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Keterangan">
              </div>
              <div class="form-group">
                <label for="pengeluaran">Jumlah Pengeluaran</label>
                <input type="text" class="form-control" id="pengeluaran" placeholder="pengeluaran">
              </div>
             <!-- Date -->
             <div class="form-group">
              <label>Date:</label>
                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                    <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
              
  
            </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Simpan</button>
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
            <form>
              @csrf
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="Keterangan">
              </div>
              <div class="form-group">
                <label for="pengeluaran">Jumlah pengeluaran</label>
                <input type="text" class="form-control" id="pengeluaran" placeholder="pengeluaran">
              </div>
             <!-- Date -->
             <div class="form-group">
              <label>Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
              
  
            </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Simpan</button>
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
 <!-- jQuery -->
 <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- InputMask/Moment JS -->
<script src="{{asset('AdminLTE/plugins/moment/moment.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
<script src="{{asset('js/Data_Pengeluaran/buttons.html5.js')}}"></script>
<script src="{{asset('js/Data_Pengeluaran/buttons.print.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


{{-- date picker --}}
<script type="text/javascript">
  $(function () {
      
    $('#reservationdate,#reservationdate1').datetimepicker({
          format: 'L'
      });
    // $('#reservationdate1').datetimepicker({
    //     format: 'L'
    // });
  });
</script>


<script type="text/javascript">
$(document).ready(function () {
  $('#edit_data').click(function () { 
      $('#modal-edit').modal('show');
  });
});
</script>


<!-- Page specific script -->
<script>
    $(function () {
      $("#tb_pengeluaran").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["pdf", "print", "colvis"]
      }).buttons().container().appendTo('#tb_pengeluaran_wrapper .col-md-6:eq(0)');
    });
  </script>




@endsection