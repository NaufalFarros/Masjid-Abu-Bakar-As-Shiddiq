@extends('admin.index')

@section('head')
    <script>




    </script>
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
                {{-- @if (session('success'))
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
                @endif --}}
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
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->username }}</td>
                                            <td>{{ hideEmailAddress($d->email)}}</td>
                                            <td>{{ $d->role }}</td>
                                            <td>
                                                <form action="{{ route('users.destroy', $d->id) }} " method="post">
                                                    <a href="{{ route('users.edit', $d->id) }}"
                                                        class="btn btn-warning btn-sm">
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
                            </table>

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
