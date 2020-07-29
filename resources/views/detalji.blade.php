@extends('layouts.primary')

@section('content')
        @php
            // var_dump($car)
        @endphp

        <h1> Detalji Strana </h1>
        
            <div>
                {{ $car->naziv }}
                {{ $car->nazivBrenda }}
            </div>
       
        

    
@endsection