<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DasawismaController extends Controller
{
    public function index()
    {
        $wargaCount = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=data-warga');
        $warga = $wargaCount->json();

        $keluargaCount = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=data-keluarga');
        $keluarga = $keluargaCount->json();

        $krtCount = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=data-krt');
        $krt = $krtCount->json();

        $dasawismaCount = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=data-dasawisma');
        $dasawisma = $dasawismaCount->json();

        $kecamatanName = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=nama-kecamatan');
        $namaKecamatan = $kecamatanName->json();

        $kecamatanWarga = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=kecamatan-warga');
        $wargaKecamatan = $kecamatanWarga->json();

        $kecamatanKeluarga = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=kecamatan-keluarga');
        $keluargaKecamatan = $kecamatanKeluarga->json();

        $kecamatanKrt = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=kecamatan-krt');
        $krtKecamatan = $kecamatanKrt->json();

        $kecamatanDasawisma = Http::get('https://dasawisma.batubarakab.go.id/api/routes-api.php?r=kecamatan-dasawisma');
        $dasawismaKecamatan = $kecamatanDasawisma->json();

        return view('dasawisma-dashboard', compact('warga', 'keluarga', 'krt', 'dasawisma', 'namaKecamatan', 'wargaKecamatan', 'keluargaKecamatan', 'krtKecamatan', 'dasawismaKecamatan'));
    }
}
