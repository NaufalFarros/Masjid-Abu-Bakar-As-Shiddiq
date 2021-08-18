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
                  @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('delete'))
                            <div class="alert alert-danger">
                                {{ session('delete') }}
                            </div>
                        @endif
                        @if (session('edit'))
                            <div class="alert alert-success">
                                {{ session('edit') }}
                            </div>
                        @endif
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
                            <a href="{{ route('users.create') }}" class="btn btn-primary my-3"><i
                                    class="fas fa-user-plus"></i>Tambah Admin Users</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="col-1">No</th>
                                        <th scope="col" class="col-2">Nama</th>
                                        <th scope="col" class="col-2">Username</th>
                                        <th scope="col" class="col-2">Email</th>
                                        <th scope="col" class="col-2">Role</th>
                                        <th scope="col" class="col-2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $d)
                                        
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td >{{ $d->name }}</td>
                                            <td >{{ $d->username}}</td>
                                            <td >{{ $d->email }}</td>
                                            <td >{{ $d->role }}</td>
                                            <td >
                                                <a href="{{ route('users.edit', $d->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-user-edit"></i> Edit
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>
                                                    Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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

    <script>
        $(document).ready(function() {
            function mask($str, $first, $last) {
                $len = strlen($str);
                $toShow = $first + $last;
                return substr($str, 0, $len <= $toShow ? 0 : $first).str_repeat("*", $len - ($len <= $toShow ? 0 :
                    $toShow)).substr($str, $len - $last, $len <= $toShow ? 0 : $last);
            }

            function mask_email($email) {
                $mail_parts = explode("@", $email);
                $domain_parts = explode('.', $mail_parts[1]);

                $mail_parts[0] = mask($mail_parts[0], 2, 1); // show first 2 letters and last 1 letter
                $domain_parts[0] = mask($domain_parts[0], 2, 1); // same here
                $mail_parts[1] = implode('.', $domain_parts);

                return implode("@", $mail_parts);
            }
        });
    </script>


@endsection
