@extends('m_user/template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" style="background-color: rgb(255, 0, 0)">
                <h2 class="card-title" style="text-align: center">CRUD User</h2>
                <div class="float-right">
<a class="btn btn-success" href="{{ route('m_user.create') }}"> Input 
User</a>
</div>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 200px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered text-nowrap">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Level</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($useri as $m_user)
                        <tr>
                            <th scope="row">{{ $m_user->user_id }}</th>
                            <td>{{ $m_user->level_id }}</td>
                            <td>{{ $m_user->username }}</td>
                            <td>{{ $m_user->nama }}</td>
                            <td class="text-center">
                                <a href="{{ route('m_user.show', $m_user->user_id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('m_user.edit', $m_user->user_id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>
@endsection
