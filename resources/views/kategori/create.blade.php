@extends('layouts.app')
{{-- Customize layout section --}}
@section('subtitle','Kategori')
@section('content_header_title','Kategori')
@section('content_header_subtitle','Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori_kode">Kode Kategori</label>
                        <input id="kategori_kode" type="text" name="kategori_kode" class="@error('kategori_kode')
                            is-invalid
                        @enderror">
                        @error('kategori_kode')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input id="kategori_nama" type="text" name="kategori_nama" class="@error('kategori_nama')
                            is-invalid
                        @enderror">
                        @error('kategori_nama')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection