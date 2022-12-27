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

        return view('dasawisma-dashboard', compact('warga', 'keluarga', 'krt', 'dasawisma', 'namaKecamatan'));
    }
}
