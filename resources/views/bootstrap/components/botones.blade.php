@extends('bootstrap.bootstrap')

@section('title', 'Botones')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row pt-3">
        <div class="col-12">
            <h2>Botones</h2>
            <hr>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>

            <button type="button" class="btn btn-link">Link</button>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
            <hr>
            <a class="btn btn-primary" href="">Enlace</a>
            <button class="btn btn-primary">Boton</button>
            <input class="btn btn-primary" type="button" value="Boton">
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
            <h2>Botones outline</h2>
            <hr>
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>

            <button type="button" class="btn btn-outline-link">Link</button>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12">
            <h2>Tamaño</h2>
            <hr>
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-secondary btn-sm">Small button</button>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-8 d-grid gap-2">
            <h2>Bloque</h2>
            <hr>
            <button class="btn btn-primary" type="button">Button</button>
            <button class="btn btn-danger" type="button">Button</button>
        </div>
    </div>
    <div class="row pt-3">
    <div class="col-12">
        <h2>Disabled</h2>
        <hr>
        <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
        <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
    </div>
    <div class="row pt-5">
        <div class="col-6">
            <h2>Checkbox</h2>
            <hr>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-6">
            <h2>Radio</h2>
            <hr>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <h2>Grupos de botones</h2>
        <div class="col-6">
            <hr>
            <div class="btn-group">
                <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                <a href="#" class="btn btn-primary">Link</a>
                <a href="#" class="btn btn-primary">Link</a>
            </div>
        </div>
        <div class="col-6">
            <hr>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
            </div>
        </div>
        <div class="col-6">
            <hr>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
            </div>
        </div>
        <div class="col-6">
            <hr>
            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <button type="button" class="btn btn-outline-secondary">1</button>
                  <button type="button" class="btn btn-outline-secondary">2</button>
                  <button type="button" class="btn btn-outline-secondary">3</button>
                  <button type="button" class="btn btn-outline-secondary">4</button>
                </div>
                <div class="input-group">
                  <div class="input-group-text" id="btnGroupAddon">@</div>
                  <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-6">
            <h2>Tamaños de botones</h2>
            <div class="btn-group-lg" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
            </div>
            <hr>
            <div class="btn-group" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
            </div>
            <hr>
            <div class="btn-group-sm" role="group" aria-label="Basic outlined example">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <a href="{{ route('index') }}">INDICE</a>
    </div>
</div>

@endsection