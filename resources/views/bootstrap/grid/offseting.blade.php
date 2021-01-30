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
        <div class="row">
            {{-- Offset le da el espacio deseado a la columna dentro de la fila del 1 al 11 --}}
            <div class="col-auto offset-1 columna">Columna #1</div>
        </div>
        <div class="row">
            {{-- Al añadir un offset de 4 se centra el contenido no se usa ya, usar alineacion horizontal --}}
            <div class="columna offset-4 col-4">Columna #2</div>
        </div>
        <div class="row">
            {{-- Cada offset separa con 1 espacio las columnas de la fila --}}
            <div class="columna offset-1 col-2">
                Columna #1.1
            </div>
            <div class="columna offset-1 col-2">
                Columna #1.1
            </div>
            <div class="columna offset-4 col-2">
                Columna #1.1
            </div>
        </div>
        <div class="row">
            {{-- Se mueve de acuerdo a los tamaños sm-md-lg-xl --}}
            <div class="columna col-4 offset-1 offset-md-4 offset-lg-0">
                Columna
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col">
            <p><a href="{{ route('index') }}">INDICE</a></p>
        </div>
    </div>
    
@endsection