<?php

namespace App\Http\Controllers;

use App\Models\Tamu;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $tamu = Tamu::latest()->with('keperluan_kunjungan');

        $query_tanggal = request('tanggal');
        if ($query_tanggal) {
            $tamu = $tamu->whereDate('created_at', $query_tanggal);
        }

        return view('dashboard.main', [
            'tamus' => $tamu->paginate(5)->withQueryString()
        ]);
    }
}
