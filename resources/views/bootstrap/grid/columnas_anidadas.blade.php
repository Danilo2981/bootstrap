@extends('bootstrap.bootstrap')

@section('title', 'Columnas automaticas')

@section('style')
    
    <style>
        .container {
            margin-top: 20px;
        }

        .row {
           background: #e8e8e8;
        }

        .columna {
            background: #f2f2f2;
            text-align: center;
            border: 1px solid #4d5601
        }

        .columna-interior {
            background: #e8e8e8;
            border: 1px solid #4d5601;
            padding: 10px;
        }
</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="columna col-md-6">Columna #1
            {{-- para insertar mas columnas dentro de otras hay que respetar la regla container-row-columna --}}
            <div class="row">
                <div class="col columna-interior">Columna A</div>
                <div class="col columna-interior">Columna B</div>
            </div>
        </div>
        {{-- usa el formato de columna pero le liminta a 4 para poder distribuir el ancho --}}
        <div class="columna col-md-6">Columna #2
            <div class="row justify-content-around">
                <div class="columna columna-interior col-4">Columna A</div>
                <div class="columna columna-interior col-4">Columna B</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <p><a href="{{ route('index') }}">INDICE</a></p>
    </div>
</div>


@endsection