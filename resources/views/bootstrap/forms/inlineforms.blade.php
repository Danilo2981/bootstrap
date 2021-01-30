@extends('bootstrap.bootstrap')

@section('title', 'Formularios')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <input type="text" id="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-auto">
                    <input type="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="col-auto">
                    <div class="form-check mr-3">
                        <input type="checkbox" class="form-check-input" name="recordar" id="recordar">
                        <label for="recordar" class="form-check-label">Recordar Sesion</label>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="submit" value="Iniciar Sesion" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection