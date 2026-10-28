<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function tampillberita(): View
    {
        return view('berita', [
            'title' => 'berita',
            'beritas' => Berita::all(),
        ]);
    }

    public function tampilberitatunggal(string $slug): View
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('partials.newstunggal', [
            'title' => $berita->judul,
            'berita' => $berita,
        ]);
    }
}
