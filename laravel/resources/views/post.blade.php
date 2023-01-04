@extends('layouts.main')
@section('container')
<h1>{{ $post->title }}</h1>
<div>
    {!! $post->body !!}
</div>
@endsection
