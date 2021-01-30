@extends('bootstrap.bootstrap')

@section('title', 'Checkbox y Radio Buttons')

@section('style')
<style>
    .contenedor {
        margin-bottom: 20px;
        background: #0275d8;
        color: #ffffff;
    }

    .contenedor div {
        background: rgba(255, 255, 255, .2);
        padding: 15px; 
    }
</style>
@endsection

@section('content')

<div class="container">

{{-- .d-flex
.d-inline-flex
.d-sm-flex
.d-sm-inline-flex
.d-md-flex
.d-md-inline-flex
.d-lg-flex
.d-lg-inline-flex
.d-xl-flex
.d-xl-inline-flex
.d-xxl-flex
.d-xxl-inline-flex --}}

<div class="row mt-3">
        <div class="col">
            <h4>Tipos de display flex</h4>
            <hr>
            {{-- d-flex permite utilizar Flex y permiter usar el 100%--}}
            <div class="d-flex p-3 bg-primary text-white">
                <p class="mb-0">Display Flex <strong>d-flex</strong> </p>
            </div>
            {{-- d-inline-flex permite utilizar Flex y permiter usar el ancho del elemento--}}
            <div class="d-inline-flex p-3 bg-primary text-white">
                <p class="mb-0">Display Flex <strong>d-inline-flex</strong> </p>
            </div>
        </div>
    </div>

    {{-- .flex-row
    .flex-row-reverse
    .flex-column
    .flex-column-reverse
    .flex-sm-row
    .flex-sm-row-reverse
    .flex-sm-column
    .flex-sm-column-reverse
    .flex-md-row
    .flex-md-row-reverse
    .flex-md-column
    .flex-md-column-reverse
    .flex-lg-row
    .flex-lg-row-reverse
    .flex-lg-column
    .flex-lg-column-reverse
    .flex-xl-row
    .flex-xl-row-reverse
    .flex-xl-column
    .flex-xl-column-reverse
    .flex-xxl-row
    .flex-xxl-row-reverse
    .flex-xxl-column
    .flex-xxl-column-reverse --}}

    <div class="row mt-4">
        <div class="col">
            <h4>Direcciones flex</h4>
            <hr>
            {{-- para poder utilizar dentro de flex hay que encerrarlo con cajas(div) --}}
            <p>.flex-row</p>
            <div class="contenedor d-flex flex-row">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.flex-row-reverse</p>
            <div class="contenedor d-flex flex-row-reverse">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.flex-column</p>
            <div class="contenedor d-flex flex-column">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.flex-column-reverse</p>
            <div class="contenedor d-flex flex-column-reverse">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
        </div>
    </div>

    {{-- .justify-content-start
    .justify-content-end
    .justify-content-center
    .justify-content-between
    .justify-content-around
    .justify-content-evenly
    .justify-content-sm-start
    .justify-content-sm-end
    .justify-content-sm-center
    .justify-content-sm-between
    .justify-content-sm-around
    .justify-content-sm-evenly
    .justify-content-md-start
    .justify-content-md-end
    .justify-content-md-center
    .justify-content-md-between
    .justify-content-md-around
    .justify-content-md-evenly
    .justify-content-lg-start
    .justify-content-lg-end
    .justify-content-lg-center
    .justify-content-lg-between
    .justify-content-lg-around
    .justify-content-lg-evenly
    .justify-content-xl-start
    .justify-content-xl-end
    .justify-content-xl-center
    .justify-content-xl-between
    .justify-content-xl-around
    .justify-content-xl-evenly
    .justify-content-xxl-start
    .justify-content-xxl-end
    .justify-content-xxl-center
    .justify-content-xxl-between
    .justify-content-xxl-around
    .justify-content-xxl-evenly --}}

    <div class="row mt-4">
        <div class="col">
            <h4>Justify Content</h4>
            <hr>
            <p>.justify-content-start</p>
            <div class="contenedor d-flex flex-row justify-content-start">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.justify-content-center</p>
            <div class="contenedor d-flex flex-row justify-content-center">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.justify-content-end</p>
            <div class="contenedor d-flex flex-row justify-content-end">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.justify-content-around</p>
            <div class="contenedor d-flex flex-row justify-content-around">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            <p>.justify-content-between</p>
            <div class="contenedor d-flex flex-row justify-content-between">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
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