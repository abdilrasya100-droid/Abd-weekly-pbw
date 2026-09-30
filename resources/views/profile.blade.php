@extends('layouts.main')

@section('content')
    <h1>PROFILE KU</h1>
    <p>Nama : {{ $name }}</p>
    <p>Nim : {{ $nim }}</p>
    <p>Prodi : {{ $prodi }}</p>
    <img src="images/{{ $gambar }}" width="200px" /> 
@endsection