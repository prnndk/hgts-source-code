@extends('dashboard.layouts.main')

@section('title', 'Edit Data Tamu')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit data tamu : {{ $tamu->id }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('tamu.update',$tamu->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama"
                                placeholder="Masukkan Nama Lengkap..." aria-label="nama"
                                value="{{old('nama',$tamu->nama)}}" required/>
                    </div>
                    @error('nama')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <div class="input-group">
                        <input type="tel"
                                class="form-control @error('no_telp') is-invalid @enderror"
                                id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon"
                                aria-label="no_telp" value="{{old('no_telp',$tamu->no_telp)}}" required
                                minlength="10" maxlength="15"/>
                    </div>
                    @error('no_telp')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Rumah</label>
                    <div class="input-group">
                        <input type="text"
                                class="form-control @error('alamat') is-invalid @enderror"
                                id="alamat" name="alamat" value="{{old('alamat',$tamu->alamat)}}"
                                placeholder="Masukkan Alamat Rumah..." aria-label="alamat" required/>
                    </div>
                    @error('alamat')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keperluan_kunjungan_id" class="form-label">Keperluan
                        Kunjungan</label>
                    <div class="input-group">
                        <select
                            class="custom-select @error('keperluan_kunjungan_id') is-invalid @enderror"
                            id="keperluan_kunjungan_id"
                            name="keperluan_kunjungan_id" aria-label="keperluan_kunjungan_id"
                            required>
                            @foreach($keperluan_kunjungans as $keperluan_kunjungan)
                            @if (old('keperluan_kunjungan_id') == $tamu->keperluan_kunjungan_id)
                                <option value="{{$keperluan_kunjungan['id']}}" selected>{{$keperluan_kunjungan['keperluan']}}</option>
                            @endif
                                <option value="{{$keperluan_kunjungan['id']}}">{{$keperluan_kunjungan['keperluan']}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('keperluan_kunjungan_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <div class="input-group">
                        <textarea class="form-control @error('pesan') is-invalid @enderror"
                                    id="pesan"
                                    name="pesan" placeholder="Masukkan Pesan..." aria-label="pesan"
                                    required>{{ old('pesan',$tamu->pesan) }}</textarea>
                    </div>
                    @error('pesan')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Edit data</button>
                </div>
            </form>
        </div>
    </div>
@endsection