@extends('layouts.main')

@section('content')
    <h1>Lorem ipsum</h1>

    <h2> Car List</h2>

    <ul>
        @foreach ($cars as $car)
            <li>
                <h3>{{ $car->modello }}</h3>
                <div class="brand">{{ $car->marca }}</div>
                <div class="plate">{{ $car->targa }}</div>
                {{-- Loop variable --}}
                @if($loop->last)
                    <hr>
                @endif
            </li>
        @endforeach
    </ul>

@endsection
