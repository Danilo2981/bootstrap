@extends('bootstrap.bootstrap')

@section('title', 'Checkbox y Radio Buttons')

@section('style')
<style>
    .contenedor {
        margin-bottom: 20px;
        background: #0275d8;
        color: #ffffff;
        height: 100px;
    }

    .contenedor div {
        background: rgba(255, 255, 255, .2);
        padding: 15px;
        border: 1px solid #000000; 
    }
</style>
@endsection

@section('content')

<div class="container">

    {{-- .align-items-start
    .align-items-end
    .align-items-center
    .align-items-baseline
    .align-items-stretch
    .align-items-sm-start
    .align-items-sm-end
    .align-items-sm-center
    .align-items-sm-baseline
    .align-items-sm-stretch
    .align-items-md-start
    .align-items-md-end
    .align-items-md-center
    .align-items-md-baseline
    .align-items-md-stretch
    .align-items-lg-start
    .align-items-lg-end
    .align-items-lg-center
    .align-items-lg-baseline
    .align-items-lg-stretch
    .align-items-xl-start
    .align-items-xl-end
    .align-items-xl-center
    .align-items-xl-baseline
    .align-items-xl-stretch
    .align-items-xxl-start
    .align-items-xxl-end
    .align-items-xxl-center
    .align-items-xxl-baseline
    .align-items-xxl-stretch --}}

    <div class="row mt-4">
        <div class="col">
            <h4>Align</h4>
        <hr>
            <p>.align-items-start</p>
            <div class="contenedor d-flex align-items-start">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            
            <p>.align-items-center</p>
            <div class="contenedor d-flex align-items-center">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div> 

            <p>.align-items-end</p>
            <div class="contenedor d-flex align-items-end">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            
            <p>.align-items-baseline se usa con tipografia diferente</p>
            <div class="contenedor d-flex align-items-baseline">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div>
            
            <p>.align-items-stretch</p>
            <div class="contenedor d-flex align-items-stretch">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
            </div> 
        </div>
    </div>

    {{-- .align-self-start
    .align-self-end
    .align-self-center
    .align-self-baseline
    .align-self-stretch
    .align-self-sm-start
    .align-self-sm-end
    .align-self-sm-center
    .align-self-sm-baseline
    .align-self-sm-stretch
    .align-self-md-start
    .align-self-md-end
    .align-self-md-center
    .align-self-md-baseline
    .align-self-md-stretch
    .align-self-lg-start
    .align-self-lg-end
    .align-self-lg-center
    .align-self-lg-baseline
    .align-self-lg-stretch
    .align-self-xl-start
    .align-self-xl-end
    .align-self-xl-center
    .align-self-xl-baseline
    .align-self-xl-stretch
    .align-self-xxl-start
    .align-self-xxl-end
    .align-self-xxl-center
    .align-self-xxl-baseline
    .align-self-xxl-stretch --}}

    <div class="row mt-4">
        <div class="col">
            <h4>Align self </h4>
        <hr>
            <div class="contenedor d-flex">
                <div class=" align-self-start">.align-self-start</div>
                <div class=" align-self-center">.align-self-center</div>
                <div class=" align-self-end">.align-self-end</div>
                <div class=" align-self-baseline">.align-self-baseline</div>
                <div class=" align-self-stretch">.align-self-stretch</div>
            </div>
            
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <h4>Auto margins</h4>
            <hr>

            <div class="contenedor d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">Caja1</div>
                <div class="p-2 bd-highlight">Caja2</div>
                <div class="p-2 bd-highlight">Caja3</div>
            </div>
            
            <div class="contenedor d-flex bd-highlight mb-3">
                <div class="me-auto p-2 bd-highlight">.me-auto</div>
                <div class="p-2 bd-highlight">Caja2</div>
                <div class="p-2 bd-highlight">Caja3</div>
            </div>
            
            <div class="contenedor d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight">Caja1</div>
                <div class="p-2 bd-highlight">Caja2</div>
                <div class="ms-auto p-2 bd-highlight">.ms-auto</div>
            </div>

            <div class="contenedor d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                <div class="mb-auto p-2 bd-highlight">.mb-auto</div>
                <div class="p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
            </div>
            
            <div class="contenedor d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                <div class="p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
                <div class="mt-auto p-2 bd-highlight">.mt-auto</div>
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