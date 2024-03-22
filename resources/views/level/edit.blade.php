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
                <h3 class="card-title">Ubah Level</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="kodeLevel">Level ID</label>
                    <input type="text" class="form-control" id="kodeLevel" name="kodeLevel" value="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="kodeLevel">Level Kode</label>
                    <input type="text" class="form-control" id="kodeLevel" name="kodeLevel" value="">
                  </div>
                  <div class="form-group">
                    <label for="namaLevel">Level Nama</label>
                    <input type="text" class="form-control" id="namaLevel" value="">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-warning">Cancel</button>
                  <button type="submit" class="btn btn-info">Kembali</button>
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