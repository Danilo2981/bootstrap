@extends('bootstrap.bootstrap')

@section('title', 'Columnas alineadas verticalmente')

@section('style')
    <style>
       .row {
           background: #e8e8e8;
           margin-top: 40px;
           margin-bottom: 40px;
        }

        .columna {
            background: #f2f2f2;
            text-align: center;
            padding: 10px;
            border: 1px solid #4d5601
        }
    </style>
@endsection

{{-- Importante trabaja en la fila --}}
@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="columna col-4">Columna #1</div>
            <div class="columna col-4">Columna #2</div>
        </div>
        {{-- Pone las columnas en el centro --}}
        <div class="row justify-content-center">
            <div class="columna col-4">Columna #1</div>
            <div class="columna col-4">Columna #2</div>
        </div>
        {{-- Pone las columnas al final --}}
        <div class="row justify-content-end">
            <div class="columna col-4">Columna #1</div>
            <div class="columna col-4">Columna #2</div>
        </div>
        {{-- Pone las columnas a los lados con espacios a los lados y al centro --}}
        <div class="row justify-content-around">
            <div class="columna col-4">Columna #1</div>
            <div class="columna col-4">Columna #2</div>
        </div>
        {{-- Pone las columnas a los lados solo con espacio en el centro --}}
        <div class="row justify-content-between">
            <div class="columna col-4">Columna #1</div>
            <div class="columna col-4">Columna #2</div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <p><a href="{{ route('index') }}">INDICE</a></p>
        </div>
    </div>
    
@endsection