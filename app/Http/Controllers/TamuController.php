<?php

namespace App\Http\Controllers;

use App\Models\KeperluanKunjungan;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        return view('main', [
            'keperluan_kunjungans' => KeperluanKunjungan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'no_telp' => 'required|numeric|min_digits:10|max_digits:15',
            'alamat' => 'required|string',
            'keperluan_kunjungan_id' => 'required|exists:App\Models\KeperluanKunjungan,id',
            'pesan' => 'required|string'
        ]);

        Tamu::create($validated);
        return redirect('/')->with('success', 'Berhasil Menulis ke Daftar Tamu');
    }
    public function view($id)
    {
        $tamu = Tamu::where('id', $id)->firstOrFail();
        return view('dashboard.view', compact('tamu'));
    }
    public function edit($id)
    {
        $tamu = Tamu::where('id', $id)->firstOrFail();
        return view('dashboard.edit', [
            'tamu' => $tamu,
            'keperluan_kunjungans' => KeperluanKunjungan::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $tamu = Tamu::where('id', $id)->firstOrFail();
        $validated = $request->validate([
            'nama' => 'required|string',
            'no_telp' => 'required|numeric|min_digits:10|max_digits:15',
            'alamat' => 'required|string',
            'keperluan_kunjungan_id' => 'required|exists:App\Models\KeperluanKunjungan,id',
            'pesan' => 'required|string'
        ]);

        $tamu->update($validated);
        return redirect('/dashboard')->with('success', 'Berhasil Mengubah Data Tamu');
    }


    public function destroy($id)
    {
        $tamu = Tamu::where('id', $id)->firstOrFail();
        $tamu->delete();
        return redirect('/dashboard')->with('success', 'Berhasil Menghapus Data Tamu');
    }
}
