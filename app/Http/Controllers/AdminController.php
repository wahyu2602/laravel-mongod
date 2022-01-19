<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function create(Request $request)
    {
        if ($request->kategori == 'motor' && auth()->user()->role == 'admin') {
            $validator = Validator::make($request->all(), [
                'tahun_keluaran' => 'required',
                'warna' => 'required',
                'harga' => 'required',
                'mesin' => 'required',
                'tipe_suspensi' => 'required',
                'tipe_transmisi' => 'required'
            ]);

            if (!$validator->fails()) {
                Kendaraan::create(array_merge(
                    ['tahun_keluaran' => $request->tahun_keluaran],
                    ['warna' => $request->warna],
                    ['harga' => $request->harga],
                    ['kendaraan' => 'motor'],
                    ['mesin' => $request->mesin],
                    ['tipe_suspensi' => $request->tipe_suspensi],
                    ['tipe_transmisi' => $request->tipe_transmisi]
                ));
            }
        }

        if ($request->kategori == 'mobil' && auth()->user()->role == 'admin') {
            $validator = Validator::make($request->all(), [
                'tahun_keluaran' => 'required',
                'warna' => 'required',
                'harga' => 'required',
                'mesin' => 'required',
                'kapasitas_penumpang' => 'required',
                'tipe' => 'required'
            ]);

            if (!$validator->fails()) {
                Kendaraan::create(array_merge(
                    ['tahun_keluaran' => $request->tahun_keluaran],
                    ['warna' => $request->warna],
                    ['harga' => $request->harga],
                    ['kendaraan' => 'mobil'],
                    ['mesin' => $request->mesin],
                    ['kapasitas_penumpang' => $request->kapasitas_penumpang],
                    ['tipe' => $request->tipe]
                ));
            }
        }

        if (auth()->user()->role == 'user') {
            return response()->json([
                'pesan' => 'Tidak ada akses!'
            ]);
        }

        if ($validator->fails()) {
            return response()->json([
                $validator->errors()
            ], 422);
        }

        return response()->json([
            'pesan' => 'Data kendaraan berhasil di buat', 'role' => auth()->user()->role
        ]);
    }
}
