@extends('bootstrap.bootstrap')

@section('title', 'Insignias (Badges)')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Encabezado H1 <span class="badge bg-secondary">Etiqueta</span></h1>
            <h2>Encabezado H2 <span class="badge bg-secondary">Etiqueta</span></h2>
            <h3>Encabezado H3 <span class="badge bg-secondary">Etiqueta</span></h3>
            <h4>Encabezado H4 <span class="badge bg-secondary">Etiqueta</span></h4>
            <h5>Encabezado H5 <span class="badge bg-secondary">Etiqueta</span></h5>
            <h6>Encabezado H6 <span class="badge bg-secondary">Etiqueta</span></h6>
        </div>
        <div class="w-100"></div>
        <div class="col-6">
            <hr>
            <h3>Encabezado H3 <span class="badge bg-primary">Primary</span></h3>
            <h3>Encabezado H3 <span class="badge bg-secondary">Secondary</span></h3>
            <h3>Encabezado H3 <span class="badge bg-success">Success</span></h3>
            <h3>Encabezado H3 <span class="badge bg-danger">Danger</span></h3>
            <h3>Encabezado H3 <span class="badge bg-warning text-dark">Warning</span></h3>
            <h3>Encabezado H3 <span class="badge bg-info text-dark">Info</span></h3>
            <h3>Encabezado H3 <span class="badge bg-light text-dark">Light</span></h3>
            <h3>Encabezado H3 <span class="badge bg-dark">Dark</span></h3>
        </div>
        <div class="col-6">
            <hr>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-primary">Primary</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-secondary">Secondary</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-success">Success</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-danger">Danger</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-warning text-dark">Warning</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-info text-dark">Info</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-light text-dark">Light</span></h3>
            <h3>Encabezado H3 <span class="badge rounded-pill bg-dark">Dark</span></h3>
        </div>
        <div class="w-100"></div>
        <div class="col-6">
            <hr>
            <a href="" class="badge bg-primary">Primary</a>
            <a href="" class="badge bg-secondary">Primary</a>
            <a href="" class="badge bg-success">Primary</a>
            <a href="" class="badge bg-darger">Primary</a>
            <a href="" class="badge bg-warning text-dark">Primary</a>
            <a href="" class="badge bg-info text-dark">Primary</a>
            <a href="" class="badge bg-light text-dark">Primary</a>
            <a href="" class="badge bg-dark">Primary</a>
        </div>
        <div class="col-6">
            <hr>
            <a href="" class="badge rounded-pill bg-primary">Primary</a>
            <a href="" class="badge rounded-pill bg-secondary">Primary</a>
            <a href="" class="badge rounded-pill bg-success">Primary</a>
            <a href="" class="badge rounded-pill bg-darger">Primary</a>
            <a href="" class="badge rounded-pill bg-warning text-dark">Primary</a>
            <a href="" class="badge rounded-pill bg-info text-dark">Primary</a>
            <a href="" class="badge rounded-pill bg-light text-dark">Primary</a>
            <a href="" class="badge rounded-pill bg-dark">Primary</a>
        </div>
        <div class="w-100"></div>
        <div class="col-12 mb-3">
            <hr>
            <button class="btn btn-light mb-2">
                Notificaciones <span class="badge bg-dark">10</span>
            </button>
            <button class="btn btn-dark mb-2">
                Notificaciones <span class="badge bg-light text-dark">10</span>
            </button>
        </div>
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection