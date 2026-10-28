@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@foreach ($beritas as $berita)
    <h2><a href="/berita/{{ $berita->slug }}">{{ $berita->judul }}</a></h2>
    <h5>{{ $berita->penulis }}</h5>
    <p>{{ $berita->konten }}</p>
@endforeach

@endsection
