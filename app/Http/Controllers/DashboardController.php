<?php

namespace App\Http\Controllers;

use App\Models\Tamu;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $tamu = Tamu::getAllTamu();
        return view('dashboard.main', [
            'tamus' => $tamu
        ]);
    }
}