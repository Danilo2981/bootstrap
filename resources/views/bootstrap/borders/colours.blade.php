@extends('bootstrap.bootstrap')

@section('title', 'Borders')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <a href="#" class="link-primary">Primary link</a>
            <a href="#" class="link-secondary">Secondary link</a>
            <a href="#" class="link-success">Success link</a>
            <a href="#" class="link-danger">Danger link</a>
            <a href="#" class="link-warning">Warning link</a>
            <a href="#" class="link-info">Info link</a>
            <a href="#" class="link-light">Light link</a>
            <a href="#" class="link-dark">Dark link</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p class="text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-success">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-danger">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-warning">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p class="text-white bg-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-success">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-danger">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-warning">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
            <p class="text-white bg-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, magnam.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection