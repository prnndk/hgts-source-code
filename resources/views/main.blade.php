@extends('layouts.main')
@section('title', "Home")
@section('content')
@include('layouts.header')
<div class="container-fluid">
    <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card rounded-4 mb-5" style="margin-top: 80px">
                    <div class="d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">Form Buku Tamu</h5>
                            <form action="/tamu" method="post">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                               placeholder="Masukkan Nama Lengkap..." aria-label="nama" required/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomor Telephone</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" id="no_telp" name="no_telp" aria-label="no_telp" required minlength="10" maxlength="15"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat Rumah</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="alamat" name="alamat"
                                               placeholder="Masukkan Alamat Rumah..." aria-label="alamat" required/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan_kunjungan_id" class="form-label">Keperluan Kunjungan</label>
                                    <div class="input-group">
                                        <select class="form-select" id="keperluan_kunjungan_id"
                                                name="keperluan_kunjungan_id" aria-label="keperluan_kunjungan_id"
                                                required>
                                            <option value="" selected disabled>Pilih Keperluan Kunjungan</option>
                                            @foreach($keperluan_kunjungans as $keperluan_kunjungan)
                                                <option
                                                    value="{{$keperluan_kunjungan['id']}}">{{$keperluan_kunjungan['keperluan']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <div class="input-group">
                                        <textarea class="form-control" id="pesan" name="pesan" placeholder="Masukkan Pesan..." aria-label="pesan" required></textarea>
                                    </div>
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