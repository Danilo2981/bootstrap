@extends('bootstrap.bootstrap')

@section('title', 'Media Object')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Media Object</h1>
            <hr>
            {{-- Lugar para poner fotos y texto  d-flex remplaza a class media   --}}
            <div class="d-flex">
                <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                <div class="p-3">
                    <h4 class="mt-0">Encabezado</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, alias nam facere ab facilis sed iste ex ullam doloribus tenetur nobis repellat aliquid autem earum laborum quisquam, suscipit commodi odit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, consequuntur nesciunt repellat quam ad voluptatem unde hic nobis explicabo eius laudantium porro adipisci placeat pariatur recusandae necessitatibus magnam blanditiis vel.</p>
                    <hr>
                    <div class="d-flex">
                        <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                        <div class="p-3">
                            <h4 class="mt-0">Comentario 1</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, alias nam facere ab facilis sed iste ex ullam doloribus tenetur nobis repellat aliquid autem earum laborum quisquam, suscipit commodi odit.</p>
                            <hr>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                        <div class="p-3">
                            <h4 class="mt-0">Comentario 2</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, alias nam facere ab facilis sed iste ex ullam doloribus tenetur nobis repellat aliquid autem earum laborum quisquam, suscipit commodi odit.</p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex">
                <div class="p-3 text-end">
                    <h4 class="mt-0">Encabezado</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea, alias nam facere ab facilis sed iste ex ullam doloribus tenetur nobis repellat aliquid autem earum laborum quisquam, suscipit commodi odit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, consequuntur nesciunt repellat quam ad voluptatem unde hic nobis explicabo eius laudantium porro adipisci placeat pariatur recusandae necessitatibus magnam blanditiis vel.</p>
                </div>
                <hr>
                <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">        
            </div>
            <hr>
            <div class="col">
                <a href="{{ route('index') }}">INDICE</a>
            </div>
        </div>
    </div>
</div>

@endsection