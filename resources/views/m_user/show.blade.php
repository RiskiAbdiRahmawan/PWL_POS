@extends('m_user/template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" style="background-color: rgb(249, 0, 0);">
                <h3 class="card-title"> <i class="fas fa-text-width"></i> Show User Details</h3>
            </div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-4">User ID:</dt>
                    <dd class="col-sm-8">{{ $useri->user_id }}</dd>
                    <dt class="col-sm-4">Level ID:</dt>
                    <dd class="col-sm-8">{{ $useri->level_id }}</dd>
                    <dt class="col-sm-4">Username:</dt>
                    <dd class="col-sm-8">{{ $useri->username }}</dd>
                    <dt class="col-sm-4">Nama:</dt>
                    <dd class="col-sm-8">{{ $useri->nama }}</dd>
                    <dt class="col-sm-4">Password:</dt>
                    <dd class="col-sm-8">{{ $useri->password }}</dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <a class="btn btn-warning" href="{{ route('m_user.index') }}">Kembali</a>
    </div>
</div>
@endsection
