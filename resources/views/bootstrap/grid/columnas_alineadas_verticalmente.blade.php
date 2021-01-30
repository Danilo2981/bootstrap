@extends('bootstrap.bootstrap')

@section('title', 'Columnas alineadas verticalmente')

@section('style')
    <style>
        .row {
            background: #e8e8e8;
            height: 150px;
            margin-top: 20px;
        }

        .col {
            background: #f2f2f2;
            text-align: center;
            padding: 10px;
            border: 1px solid #4d5061
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            {{-- las columnas adquieren el alto automaticamente de su padre en este caso row --}}
            <div class="col">Columna #1</div>
            <div class="col">Columna #2</div>
            <div class="col">Columna #3</div>
        </div>
        <div class="row align-items-start">
            {{-- alinea los items de la columna al principio dejando el alto propio de row --}}
            {{-- pading en col es necesario --}}
            <div class="col">Columna #1</div>
            <div class="col">Columna #2</div>
            <div class="col">Columna #3</div>
        </div>
        <div class="row align-items-center">
            {{-- alinea los items de la columna al centro dejando el alto propio de row --}}
            <div class="col">Columna #1</div>
            <div class="col">Columna #2</div>
            <div class="col">Columna #3</div>
        </div>
        <div class="row align-items-end">
            {{-- alinea los items de la columna al final dejando el alto propio de row --}}
            <div class="col">Columna #1</div>
            <div class="col">Columna #2</div>
            <div class="col">Columna #3</div>
        </div>
        <br><br>
        <h2>Alineacion Independiente</h2>
        <div class="row">
            {{-- alinea los items de la columna independientemente de su propio de row --}}
            <div class="col align-self-start">Columna #1</div>
            <div class="col align-self-center">Columna #2</div>
            <div class="col align-self-end">Columna #3</div>
        </div>
        <br>
    </div>

    <div class="row">
        <div class="col">
            <p><a href="{{ route('index') }}">INDICE</a></p>
        </div>
    </div>
    
@endsection