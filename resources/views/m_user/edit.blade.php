@extends('m_user/template')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary" style="margin-top: 50px">
                <div class="card-header" style="background-color: rgb(255, 0, 0)">
                    <h3 class="card-title" style="text-align: center">Edit User</h3>
                </div>
                <form action="{{ route('m_user.update', $useri->user_id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="userid">User ID</label>
                            <input type="text" class="form-control" id="userid" name="userid" value="{{ $useri->user_id }}" placeholder="Enter User ID" readonly>
                        </div>
                        <div class="form-group">
                            <label for="levelid">Level ID</label>
                            <input type="text" class="form-control" id="levelid" name="levelid" value="{{ $useri->level_id }}" placeholder="Enter Level ID">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{ $useri->username }}" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $useri->nama }}" placeholder="Enter Nama">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
