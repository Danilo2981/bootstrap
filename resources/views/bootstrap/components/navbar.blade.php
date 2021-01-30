@extends('bootstrap.bootstrap')

@section('title', 'Navbar')

@section('style')
<style>
    /* hace que el container luego del navbar se desplace */
    body {
        padding-top: 80px;
    }

    .jumbotron {
        padding: 4rem 2rem;
        margin-bottom: 2rem;
        background-color: rgba(255, 99, 71, 0.2);
        border-radius: .3rem;  
    }
</style>
@endsection

@section('content')
{{-- si queremos que el navbar utilice el 100% debe ir en el body --- fixed top para que se quede fijo en la parte de arriba --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="row" style="margin-top: 1000px">
        <div class="col">
            <h3>Contenido</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos qui dignissimos reiciendis, rem pariatur possimus, itaque, nam voluptatibus ratione atque unde esse. Harum ipsa repellat quaerat hic. Minus, nulla quo.</p>
        <p>navbar navbar-dark bg-dark</p>
        <p>navbar navbar-dark bg-primary</p>
        <p>navbar navbar-light" style="background-color: #e3f2fd;"</p>
        <p>navbar nanbar-none pone transparente el color del fondo</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
    
</div>

@endsection