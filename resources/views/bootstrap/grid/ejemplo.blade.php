@extends('bootstrap.bootstrap')

@section('title', 'Ejemplo Grid Bootstrap 4.0')

@section('style')

{{-- Estilos propios cada ejercicio --}}
<link rel="stylesheet" href="{{ asset('static/css/grid.css') }}">

@endsection

@section('content')

    <div class="container">
        {{-- Tiene filas para el header, main y aside, columnas y footer --}}
        <header class="row">
            <div class="col">
                <h1>HEADER</h1>
            </div>
        </header>

        <section class="contenedor-main row">
            <main class="col-md-8">
                <h2>MAIN</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, ducimus. Nemo quibusdam ducimus provident, reprehenderit quos modi, id ea laboriosam pariatur nostrum eligendi, eos eius suscipit quidem fugiat. Esse, nesciunt?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam cupiditate iusto, laudantium sapiente accusantium iure ab numquam corrupti sit, in commodi veritatis expedita? Amet rerum voluptate quod necessitatibus! Magni, veritatis.</p>
            </main>
            <aside class="col-md-4 align-self-center">
                <h3>ASIDE</h3>
            </aside>
        </section>

        <section class="widgets row justify-content-between">
            <div class="col-12 col-md-4 col-lg-3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi magni culpa minima quae nobis eum, beatae recusandae nulla laborum iusto non.</p>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi magni culpa minima quae nobis eum, beatae recusandae nulla laborum iusto non.</p>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi magni culpa minima quae nobis eum, beatae recusandae nulla laborum iusto non.</p>
            </div>    
        </section>

        <footer class="row">
            <div class="col">
                <h4>Footer</h4>
                <p><a href="{{ route('index') }}">INDICE</a></p>
            </div>
        </footer>

    </div>
    

@endsection