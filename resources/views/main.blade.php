@extends('layouts.main')
@section('content')
    @include('layouts.header')
    <div class="container-fluid">
        <div class="container py-2 h-100 mt-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card rounded-4 mb-5" style="margin-top: 80px;">
                        <div class="d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{session('success')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Form Buku Tamu</h5>
                                <form action="/tamu" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                   id="nama" name="nama"
                                                   placeholder="Masukkan Nama Lengkap..." aria-label="nama"
                                                   value="{{old('nama')}}" required/>
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
                                                   aria-label="no_telp" value="{{old('no_telp')}}" required
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
                                                   id="alamat" name="alamat" value="{{old('alamat')}}"
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
                                                class="form-select @error('keperluan_kunjungan_id') is-invalid @enderror"
                                                id="keperluan_kunjungan_id"
                                                name="keperluan_kunjungan_id" aria-label="keperluan_kunjungan_id"
                                                required>
                                                <option value="" selected disabled>Pilih Keperluan Kunjungan</option>
                                                @foreach($keperluan_kunjungans as $keperluan_kunjungan)
                                                    <option
                                                        value="{{$keperluan_kunjungan['id']}}">{{$keperluan_kunjungan['keperluan']}}</option>
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
                                                      required></textarea>
                                        </div>
                                        @error('pesan')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection