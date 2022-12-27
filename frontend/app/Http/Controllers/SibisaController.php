<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SibisaController extends Controller
{
    public function index()
    {
        $peopleCount = Http::get('http://localhost:9000/api/penduduk/penduduk_count');
        $penduduk = $peopleCount->json();

        $kecamatanCount = Http::get('http://localhost:9000/api/penduduk/kecamatan_count');
        $kecamatan = $kecamatanCount->json();

        $kelurahanCount = Http::get('http://localhost:9000/api/penduduk/kelurahan_count');
        $kelurahan = $kelurahanCount->json();

        $kecamatanName = Http::get('http://localhost:9000/api/penduduk/kecamatan_name');
        $namakecamatan = $kecamatanName->json();

        $peopleKecamatan = Http::get('http://localhost:9000/api/penduduk/penduduk_kecamatan');
        $kecamatanpenduduk = $peopleKecamatan->json();

        return view('sibisa-dashboard', compact('penduduk', 'kecamatan', 'kelurahan', 'namakecamatan', 'kecamatanpenduduk'));
        // dd($penduduk);
    }
}
