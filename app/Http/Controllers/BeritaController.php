<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public static function tampillberita()
    {
         return view('berita', [
        "title" => "berita",
        "beritas" => Berita::all(),
    ]);
    }

    public static function tampilberitatunggal($slug)
    {
        $berita = Berita::all();

        $singlenews = [];

        foreach ($berita as $berita) {
            if ($berita['slug'] === $slug) {
               $singlenews = $berita;
                break;
            }
        }

        if ($berita === null) {
            abort(404);
        }

        return view('beritaStunggal', [
            "title" => Berita::gedJudul($slug),
            "singlenews" => $singlenews,
        ]);
    }
}
