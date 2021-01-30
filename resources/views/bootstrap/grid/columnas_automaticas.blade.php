@extends('bootstrap.bootstrap')

@section('title', 'Columnas automaticas')

@section('style')
    
    <style>
        .row > div {
            text-align: center;
            margin: 10px 0;
        }

        .uno {
            background: #f2f2f2;
        }   

        .dos {
            background: #a2a2a2;
            padding: 0 20px;
        }

        .tres {
            background: #f2f2f2;
        }        
</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        {{-- col = columna automatica en relacion al grid 3 columnas cada 4 --}}
        <div class="col uno">
            <h3>Columna #1</h3>
        </div>
        {{-- col-auto columna automatica en realacion al tamaño del elemento que contiene --}}
        <div class="col dos col-auto">
            <h3>Columna #1</h3>
        </div>
        <div class="col tres">
            <h3>Columna #1</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        {{-- col-lg-auto se ajusta al elemento de lg para arriba --}}
        <div class="col uno col-lg-auto">
            <h3>Columna #1</h3>
        </div>
        <div class="col dos col-lg-auto">
            <h3>Columna #1</h3>
        </div>
        <div class="col tres">
            <h3>Columna #1</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col uno">
            <h4>Columna #1</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
        <div class="col uno">
            <h4>Columna #2</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
        {{-- Columna con un ancho de 100 que divide las dos columnas --}}
        <div class="w-100"></div>
        <div class="col uno">
            <h4>Columna #3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
        <div class="col uno">
            <h4>Columna #4</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col uno">
            <h4>Columna #1</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
        <div class="col uno">
            <h4>Columna #2</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
    {{-- al dividir con otra fila row da el mismo efecto     --}}
    <div class="row">    
        <div class="col uno">
            <h4>Columna #3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
        <div class="col uno">
            <h4>Columna #4</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ad quod vero natus, explicabo corrupti fuga adipisci facere, placeat id ipsa. Eligendi repellat minus obcaecati error laboriosam? Quos, dignissimos ullam.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <p><a href="{{ route('index') }}">INDICE</a></p>
    </div>
</div>

@endsection