@extends('layouts.main')

@section('content')

<h1>{{ $title }}</h1>

@foreach ($newss as $news)
    <h2><a href="/news/{{ $news["slug"] }}">{{ $news["judul berita"] }}</a></h2>
    <h5>{{ $news["Penulis"] }}</h5>
    <p>{{ $news["konten"] }}</p>
@endforeach

@endsection
