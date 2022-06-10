@extends('layouts.base')

@section('pageTitle')
DC comics - Home
@endsection

@section('mainContent')
<main>
<h1>Current series</h1>

@foreach ($comic as $comics)
<div class="card">
    <img src="{{$comics['thumb']}}" alt="{{$comics['type']}}">
    <h2>{{$comics['series']}}</h2>
</div>
@endforeach

<button>load more</button>


</main>
@endsection
