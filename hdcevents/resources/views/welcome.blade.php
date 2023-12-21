@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@foreach ($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control">
    </form>
</div>

@endsection
