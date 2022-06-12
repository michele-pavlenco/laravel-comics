@extends('layouts.base')

@section('pageTitle')
DC comics - Home
@endsection

@section('mainContent')
<main class="center">
    <h3>Current series</h3>
    <div class="cards">
    @foreach ($comic as $comics)
        <div class="card">
            <div class="img">
                <img src="{{$comics['thumb']}}" alt="{{$comics['type']}}">
            </div>
            <h2>{{$comics['series']}}</h2>
        </div>
    @endforeach
    <button>load more</button>
    </div>
</main>
@endsection
