@extends('bootstrap.bootstrap')

@section('title', 'Borders')

@section('style')
<style>
   .caja {
       width: 100px;
       height: 100px;
       display: inline-block;
       margin: 20px;
       border: 1px solid #000000;
   }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <h3>Border</h3>
        <div class="col-6">
            <div class="caja bg-light"></div>
            <div class="caja bg-light border"></div>
            <div class="caja bg-light border-top"></div>
            <div class="caja bg-light border-end"></div>
            <div class="caja bg-light border-bottom"></div>
            <div class="caja bg-light border-start"></div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <div class="caja bg-light"></div>
            <div class="caja bg-light border-0"></div>
            <div class="caja bg-light border-top-0"></div>
            <div class="caja bg-light border-end-0"></div>
            <div class="caja bg-light border-bottom-0"></div>
            <div class="caja bg-light border-start-0"></div>
        </div>
    </div>
    <div class="row mt-3">
        <h3>Border Color</h3>
        <div class="col-6">
            <div class="caja bg-light border-primary"></div>
            <div class="caja bg-light border-secundary"></div>
            <div class="caja bg-light border-success"></div>
            <div class="caja bg-light border-danger"></div>
            <div class="caja bg-light border-warning"></div>
            <div class="caja bg-light border-info"></div>
            <div class="caja bg-light border-light"></div>
            <div class="caja bg-light border-dark"></div>
            <div class="caja bg-light border-light"></div>
        </div>
    </div>
    <div class="row mt-3">
        <h3>Border Width</h3>
        <div class="col-6">
            <div class="caja bg-light border-1"></div>
            <div class="caja bg-light border-2"></div>
            <div class="caja bg-light border-3"></div>
            <div class="caja bg-light border-4"></div>
            <div class="caja bg-light border-5"></div>
            <div class="caja bg-light border-1"></div>
        </div>
    </div>
    <div class="row mt-3">
        <h3>Border Radius</h3>
        <div class="col-12">
            <img src="http://placeimg.com/128/128/people" class="rounded" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-top" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-end" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-bottom" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-start" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-circle" alt="...">
            <img src="http://placeimg.com/128/128/people" class="rounded-pill" alt="...">
        </div>
    </div>
    <div class="row mt-3">
        <h3>Border Radius</h3>
        <div class="col-12">
            <img src="http://placeimg.com/128/128/any" class="rounded-0" alt="...">
            <img src="http://placeimg.com/128/128/any" class="rounded-1" alt="...">
            <img src="http://placeimg.com/128/128/any" class="rounded-2" alt="...">
            <img src="http://placeimg.com/128/128/any" class="rounded-3" alt="...">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection