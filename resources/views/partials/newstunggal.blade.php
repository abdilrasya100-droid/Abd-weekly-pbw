@extends('layouts.main')

@section('content')

<div class="text-center">
    <h1>{{ $news["judul berita"] }}</h1>
    <h5>{{ $news["Penulis"] }}</h5>
</div>
<div>
    <div class="text-justify">
        <p>{{ $news["konten"] }}</p>
    </div>
</div>
@endsection