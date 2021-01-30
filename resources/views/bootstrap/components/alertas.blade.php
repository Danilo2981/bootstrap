@extends('bootstrap.bootstrap')

@section('title', 'Alertas')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-success mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-info mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-warning mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-danger mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-primary mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-secondary mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-light mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-dark mt-3">
                <strong>Aviso</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="" class="alert-link">Enim, impedit?</a>
            </div>
            <div class="alert alert-success mt-5">
                <h2>Encabezado</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae repellat quia consectetur dicta fugiat quidem praesentium atque incidunt modi pariatur. Exercitationem blanditiis numquam quae? Magnam reiciendis illo dignissimos aperiam reprehenderit.</p>
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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