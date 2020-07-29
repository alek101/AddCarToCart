@extends('layouts.primary')

@section('content')
        @php
            // var_dump($car)
        @endphp

        <h1> Detalje Strana </h1>
        
            <div>
                <p>Naziv: {{ $car->naziv }}</p>
                <p>Brend: {{ $car->nazivBrenda }} </p>
                <p>Cena: {{ $car->cena }} </p>
                <p>Godiste: {{ $car->godiste }} </p>
            </div>
       
        <a href="/add">Dodaj u Korpu</a>

    
@endsection