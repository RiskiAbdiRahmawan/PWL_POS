@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Dashboard</h1>
@stop
@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Buat Level Baru</h3>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="../level">
                <div class="card-body">
                  <div class="form-group">
                    <label for="level_kode">Level Kode</label>
                    <input type="text" class="@error('level_kode') is-invalid
                    @enderror" id="level_kode" name="level_kode" placeholder="Enter Level Kode">
                    @error('level_nama')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="level_nama">Level Nama</label>
                    <input type="text" class="@error('level_nama')
                      is-invalid
                    @enderror" id="level_nama" name="level_nama" placeholder="Enter Level Nama">
                    @error('level_nama')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@stop
@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop