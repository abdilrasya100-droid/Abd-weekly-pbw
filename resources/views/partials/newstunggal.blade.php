@extends('layouts.main')

@section('content')

<div class="text-center">
    <h1>{{ $berita["judul berita"] }}</h1>
    <h5>{{ $berita["Penulis"] }}</h5>
</div>
<div>
    <div class="text-justify">
        <p>{{ $berita["konten"] }}</p>
    </div>
</div>
@endsection