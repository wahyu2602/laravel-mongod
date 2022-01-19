<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KendaraanController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $kendaraan)
    {
        if (!empty($kendaraan->kategori)) {
            return Kendaraan::where('kendaraan', $kendaraan->kategori)->get();
        } else {
            return Kendaraan::get();
        }
    }
}
