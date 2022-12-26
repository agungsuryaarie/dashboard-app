<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class PendudukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function penduduk_count()
    {
        return response()->json(Penduduk::count());
    }

    public function kecamatan_count()
    {
        return response()->json(Kecamatan::where('kode_kab_capil', '1219')->count());
    }

    public function kelurahan_count()
    {
        return response()->json(Kecamatan::leftJoin('master_kelurahan', 'master_kecamatan.kode_kec_capil', '=', 'master_kelurahan.kode_kec_capil')->where('kode_kab_capil', '1219')->count());
    }

    public function kecamatan_name()
    {
        return response()->json(Kecamatan::where('kode_kab_capil', '1219')->pluck('nama'));
    }

    public function penduduk_kecamatan()
    {
        return response()->json(Kecamatan::withCount('penduduk')
            ->where('kode_kab_capil', '1219')
            ->pluck('penduduk_count'));
    }

    public function keluarga_kecamatan()
    {
        return response()->json(Kecamatan::where('kode_kab_capil', '1219')->leftJoin('master_penduduk', 'master_kecamatan.id', '=', 'master_penduduk.id_kec_ktp'));
    }

    public function kecamatan($kecamatan)
    {
        return response()->json(Penduduk::where('id_kec_ktp', $kecamatan)->get());
    }

    public function desa($desa)
    {
        return response()->json(Penduduk::where('id_kel_ktp', $desa)->get());
    }
}