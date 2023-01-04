@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
@foreach ($abouts as $about)
<div>{{ $about->name }}</div>
<div>{{ $about->email }}</div>
@endforeach

@endsection
