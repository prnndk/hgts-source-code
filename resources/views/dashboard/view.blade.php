@extends('dashboard.layouts.main')
@section('title','Detail Data')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Detail Data Tamu</h1>
</div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>Nama</td>
          <td>{{$tamu['nama']}}</td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td>{{$tamu['no_telp']}}</td>
        </tr>
        <tr>
          <td>Alamat Rumah</td>
          <td>{{$tamu['alamat']}}</td>
        </tr>
        <tr>
          <td>Keperluan Kunjungan</td>
          <td>{{$tamu->keperluan_kunjungan->keperluan}}</td>
        </tr>
        <tr>
          <td>Tanggal Kunjungan</td>
          <td>{{$tamu['created_at']->format('Y-m-d')}}</td>
        </tr>
        <tr>
          <td>Pesan</td>
          <td>{{$tamu->pesan}}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection