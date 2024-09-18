<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function indexProvinsi()
    {
        $provinsi = Provinsi::all();
        return response()->json($provinsi);
    }

    public function indexKtp()
    {
        $ktp = Ktp::with('provinsi')->get();
        return response()->json($ktp);
    }

    public function show($nik)
    {
        $ktp = Ktp::with('provinsi')->where('nik', $nik)->first();

        if (!$ktp) {
            return response()->json(['message' => 'KTP not found'], 404);
        }

        return response()->json($ktp);
    }

    public function storeProvinsi(Request $request)
    {
        $validatedData = $request->validate([
            'nama_prop' => 'required|string|max:255',
            'jumlah_penduduk' => 'required|integer',
        ]);

        $provinsi = Provinsi::create($validatedData);
        return response()->json($provinsi, 201);
    }

    public function storeKtp(Request $request)
    {
        $validatedData = $request->validate([
            'Id_prop' => 'required|integer|exists:provinsi,id',
            'nik' => 'required|string|max:16|unique:ktp,nik',
            'nama' => 'required|string|max:255',
        ]);

        $ktp = Ktp::create($validatedData);
        return response()->json($ktp, 201);
    }

    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            return response()->json(['message' => 'Database connection successful']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Database connection failed: ' . $e->getMessage()], 500);
        }
    }
}
