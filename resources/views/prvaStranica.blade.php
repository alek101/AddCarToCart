@extends('layouts.primary')

@section('content')
        @php
            // var_dump($listCars)
        @endphp

        <h1> Prva Strana </h1>
        @foreach ($listCars as $car)
            <div>
                {{ $car->naziv }}
                {{ $car->nazivBrenda }}
            </div>
        @endforeach
        

        {{ $listCars->links() }}
    
@endsection