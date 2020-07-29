@extends('layouts.primary')

@section('content')
        @php
            // var_dump($listCars)
        @endphp

        <h1> Prva Strana </h1>
        <div id="vueSelector">
            <select name="cars" id="cars" v-model='selector' @change="swichPage">
                <option value="all">All of Them</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->nazivBrenda }}">{{ $brand->nazivBrenda }}</option>
                @endforeach
            </select>
        </div>
        
        @foreach ($listCars as $car)
            <div>
                <p>Naziv: {{ $car->naziv }}</p>
                <p>Brend: {{ $car->nazivBrenda }} </p>
                <p>Cena: {{ $car->cena }} </p>
                <p> <a href="/info/{{ $car->id }}">Detaljnije </a> </p>
                
                
            </div>
        @endforeach
        

        {{ $listCars->links() }}


        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="{{ asset('/js/selector.js') }}"></script>
    
@endsection