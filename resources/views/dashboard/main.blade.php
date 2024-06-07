@extends('dashboard.layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
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
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{request('tanggal')}}">
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
                        <td>{{$tamu->keperluan_kunjungan->keperluan}}</td>
                        <td>{{$tamu['created_at']->format('Y-m-d')}}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{route('tamu.view',$tamu->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> </a>
                                <a href="{{route('tamu.edit',$tamu->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> </a>
                                <form action="{{route('tamu.destroy',$tamu->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$tamus->links()}}
            </div>
        </div>
    </div>
@endsection