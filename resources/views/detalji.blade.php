@extends('layouts.primary')

@section('content')
        @php
            // var_dump($car)
        @endphp

        <h4> Detaljnije o {{ $car->naziv }} </h4>
        
            <div class="border">
                <p>Naziv: {{ $car->naziv }}</p>
                <p><img src={{ $car->slika }} alt="jok"></p>
                <p>Brend: {{ $car->nazivBrenda }} </p>
                <p>Cena: {{ $car->cena }} </p>
                <p>Godiste: {{ $car->godiste }} </p>
                <a href="/add"><img src="/images/korpa.png" alt="Dodaj U Korpu"></a>
            </div>
       
            <a href="/">Povratak</a>

    
@endsection