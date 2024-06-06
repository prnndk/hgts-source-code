<?php

namespace App\Http\Controllers;

use App\Models\KeperluanKunjungan;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        return view('main', [
            'keperluan_kunjungans' => KeperluanKunjungan::getAllKeperluanKunjungan()
        ]);
    }
}
