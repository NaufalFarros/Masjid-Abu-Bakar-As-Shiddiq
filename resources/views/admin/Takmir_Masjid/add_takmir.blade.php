@extends('admin.index')

@section('head')
   
@endsection

@section('content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Takmir Masjid</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tambah Takmir Masjid</a></li>
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
                            <h3 class="card-title">Tambah Takmir Masjid</h3>
                        </div>
                        <div class="card-body">
                            <!-- Date -->
                            <div class="col-6">
                                <form action="{{route('takmir.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control @error('nama')
                                            is-invalid
                                        @enderror" id="nama"  value="{{old('nama')}}"
                                            aria-describedby="emailHelp" placeholder="Nama" name="nama">
                                            @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor">Nomor Telepon</label>
                                        <input type="text" class="form-control @error('nomor')
                                            is-invalid
                                        @enderror" id="nomor"  value="{{old('nomor')}}"
                                            aria-describedby="emailHelp" placeholder="Nomor Telepon" name="nomor">
                                            @error('nomor')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control @error('alamat')
                                            is-invalid
                                        @enderror" id="alamat"  value="{{old('alamat')}}"
                                            aria-describedby="emailHelp" placeholder="Alamat" name="alamat">
                                            @error('alamat')
                                            <div class="invalid-feedback">{{ $message }}</div>     
                                            @enderror
                                            
                                    </div>
                                   
                
                                    <div class="form-group">
                                        <label for="selectRole">Jabatan/Bidang</label>
                                       <select class="form-control select2 @error('jabatan')
                                           is-invalid
                                       @enderror" style="width: 100%;" id="selectRole" name="jabatan">
                                        <option selected="selected">-- Pilih Jabatan/Bidang --</option>
                                        <option value="ketua takmir">Ketua Takmir</option>
                                        <option value="wakil ketua">Wakil Ketua</option>
                                        <option value="bendahara">Bendahara</option>
                                        <option value="sekretaris">Sekretaris</option>
                                        <option value="kebersihan">Kebersihan</option>
                                        <option value="humas">Humas</option>
                                        <option value="imam">Imam</option>
                                        <option value="ustadz">Ustadz</option>
                                        <option value="muadzin">Muadzin</option>
                                        <option value="penasehat">Penasehat</option>
                                        <option value="khatib">Khatib</option>
                                        <option value="remas">Remas</option>
                                        <option value="ubudiyah">Ubudiyah</option>
                                        <option value="pelindung">Pelindung</option>
                                    </select>
                                            @error('jabatan')                
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
    
@endsection
