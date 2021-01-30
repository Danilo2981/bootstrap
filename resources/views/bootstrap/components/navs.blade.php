@extends('bootstrap.bootstrap')

@section('title', 'Navs')

@section('style')
<style>
   .fm-nav a {
       color: #ffffff;
       padding: 15px:
   }

   .fm-nav a:hover {
       background: rgba(255, 255, 255, 0.2)
   }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-4">
            <h3>Menu con ul</h3>
            <hr>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4">
            <h3>Menu con estilos CSS</h3>
            <hr>
            <ul class="nav fm-nav bg-dark">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4">
            <h3>Menu con Nav</h3>
            <hr>
            <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4">
            <h3>Menu con Nav Vertical</h3>
            <hr>
            <nav class="nav fm-nav bg-dark flex-column">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection