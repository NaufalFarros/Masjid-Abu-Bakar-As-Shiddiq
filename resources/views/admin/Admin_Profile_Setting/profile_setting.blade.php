@extends('admin.index')

@section('head')

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Profile Setting</a></li>
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
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('AdminLTE/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>

                            <p class="text-muted text-center">{{ Auth::user()->role }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Email :</b> <a class="float-right">{{ Auth::user()->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Uername :</b> <a class="float-right">{{ Auth::user()->username }}</a>
                                </li>

                            </ul>



                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">

                                <li class="nav-item"><a class="nav-link" href="#settings1" data-toggle="tab">Ubah
                                        Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings2" data-toggle="tab">Ubah
                                        Password</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="tab-pane" id="settings1">
                                    <form class="form-horizontal" action="{{ route('profile-setting.update', Auth::user()->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('name')
                                                            is-invalid
                                                    @enderror" id="inputName" name="name" placeholder="Name" value="{{Auth::user()->name}}" required>
                                            </div>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <label for="Username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control @error('username')
                                                    is-invalid
                                                @enderror" id="Username" name="username"
                                                    placeholder="Username" value="{{Auth::user()->username}}" required>
                                            </div>
                                             @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="settings2">
                                    <form class="form-horizontal" action="{{route('profile-setting.update',Auth::user()->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="password" class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control @error('password')
                                                    is-invalid
                                                @enderror" id="password"
                                                    placeholder="Password Baru" name="password" required>
                                            </div>
                                            @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message}}
                                                    </div>
                                            @enderror      
                                        </div>
                                        <div class="form-group row">
                                            <label for="password2" class="col-sm-2 col-form-label">Ketik Ualang Password
                                                Baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control @error('password_confirmation')
                                                    is-invalid
                                                @enderror" id="password2"
                                                    placeholder=" Ketik Ulang Password Baru" name="password_confirmation" required>
                                            </div>
                                            @error('password_confirmation')
                                                    <div class="invalid-feedback">
                                                        {{ $message}}
                                                    </div>
                                            @enderror  
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>


@endsection


@section('script')
    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>






@endsection
