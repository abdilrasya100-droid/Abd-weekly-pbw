<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile",
        "name" => "Muhammad Fadhlan",
        "nim" => "123456789",
        "prodi" => "Teknologi Pertanian",
        "gambar" => "picture.jpg",
    ]);
});


Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});

 $data_berita = [
    [
        "judul berita" => "Inovasi Teknologi Terbaru di Tahun 2023",
        "slug" => "inovasi-teknologi-terbaru-di-tahun-2023",
        "Penulis" => "John Doe",
        "Tanggal" => "2023-05-10",
        "konten" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nunc nisl eget nunc. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nunc nisl eget nunc."
    ],
    [
        "judul berita" => "Perkembangan AI dalam Kehidupan Sehari-hari",
        "slug" => "perkembangan-ai-dalam-kehidupan-sehari-hari",
        "Penulis" => "Jane Smith",
        "Tanggal" => "2023-05-12",
        "konten" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nunc nisl eget nunc. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nunc nisl eget nunc."
    ]
];

Route::get('/berita', [BeritaController::class, 'tampillberita']);
///routing untuk handling 1 berita
Route::get('/berita/{slug}',[BeritaController::class, 'tampilberitatunggal']);

