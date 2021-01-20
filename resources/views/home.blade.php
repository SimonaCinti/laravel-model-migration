@extends('layouts.main')

@section('content')
    <h1>Lorem ipsum</h1>
    <section class="php-print">
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
    </section>

    <section id="app">
        <h2> Bikes List App</h2>
        <ul>
            <li v-for="bike in bikes">
                <h3> @{{ bike.marca }}</h3>
                <div class="brand">@{{ bike.modello}}</div>
                <div class="plate"> @{{bike.targa}}</div>
            </li>
        </ul>
    </section>
    {{-- JS --}}
    <script src="{{asset('js/app.js')}}"></script>
@endsection
