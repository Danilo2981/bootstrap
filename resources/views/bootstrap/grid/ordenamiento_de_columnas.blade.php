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
    {{-- order cambia el orden de las columnas --}}
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-2 columna order-4 order-md-1">
                Columna #1
            </div>
            <div class="col-2 columna order-1 order-md-2">
                Columna #2
            </div>
            <div class="col-2 columna order-3 order-md-3">
                Columna #3
            </div>
            <div class="col-2 columna order-2 order-md-4">
                Columna #4
            </div>            
        </div>     
    </div>

    <div class="row">
        <div class="col">
            <p><a href="{{ route('index') }}">INDICE</a></p>
        </div>
    </div>
    
@endsection