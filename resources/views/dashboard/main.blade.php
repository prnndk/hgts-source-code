@extends('dashboard.layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <form action="/dashboard" method="get">
                        <label for="tanggal" class="form-label">Tanggal Kunjungan</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            <button class="btn btn-outline-primary mx-3" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat Rumah</th>
                        <th>Keperluan Kunjungan</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tamus as $tamu)
                    <tr>
                        <td>{{$tamu['nama']}}</td>
                        <td>{{$tamu['no_telp']}}</td>
                        <td>{{$tamu['alamat']}}</td>
                        <td>{{\App\Models\KeperluanKunjungan::getKeperluanById($tamu['keperluan_kunjungan_id'])}}</td>
                        <td>{{$tamu['created_at']}}</td>
                        <td>
                            <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                            <button class="btn btn-warning btn-sm"><i class="fas fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection