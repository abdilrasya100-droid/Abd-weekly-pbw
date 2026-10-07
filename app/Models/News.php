<?php

namespace App\Models;

use App/Models/News;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private static $data_news = [
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
}
