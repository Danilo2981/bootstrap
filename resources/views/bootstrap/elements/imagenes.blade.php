@extends('bootstrap.bootstrap')

@section('title', 'Imagenes')

@section('style')
<style>
    .columna {
        margin-top: 20px;
        background: #f2f2f2f2;
        border: 1px solid #42424242;
    }
</style>
@endsection

@section('content')

<div class="container-fluid">
    {{-- Bootstrap asigna paddin left and right de 15px no-gutters(g-0) los elimina. Aplicar en la fila     --}}
    <div class="row g-0">
        <div class="col-4 columna">
            <img src="http://placeimg.com/200/200/any" alt="">
        </div>
    </div>
    <div class="row g-0">
        <div class="col-4 columna">
            {{-- img-fluid hace que la imagen se adapte al 100% de la columna --}}
            <img class="img-fluid" src="http://placeimg.com/800/800/any" alt="">
        </div>
    </div>
    <div class="row g-0">
        <div class="col-4 columna">
            {{-- float ubica las imagenes start center end --}}
            <img class="img-fluid float-start" src="http://placeimg.com/200/200/any" alt="">
            <img class="img-fluid float-end" src="http://placeimg.com/200/200/any" alt="">
        </div>
    </div>
    <div class="row g-0">
        <div class="col-8 columna">
            <img class="img-fluid rounded float-start" src="http://placeimg.com/300/300/any" alt="">
            <img class="img-fluid img-thumbnail float-end" src="http://placeimg.com/300/300/any" alt="">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <figure class="figure">
                <img src="http://placeimg.com/300/300/any" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A caption for the above image.</figcaption>
              </figure>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="http://placeimg.com/300/300/any" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection