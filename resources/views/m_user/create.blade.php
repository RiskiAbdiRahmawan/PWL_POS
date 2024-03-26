@extends('m_user/template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header" style="background-color: rgb(255, 0, 0)">
                        <h3 class="card-title" style="text-align: center">Membuat User</h3>
                    </div>
                    <form action="{{ route('m_user.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Ops!</strong> Input gagal<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Masukkan username">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('m_user.index') }}" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div></section>
@endsection
