@extends('bootstrap.bootstrap')

@section('title', 'Variables de Imput')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h4>Tamaños</h4>
            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <hr>
            <h4>Disabled</h4>
            <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
            <input class="form-control" type="text" placeholder="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <hr>
            <h4>Readonly</h4>
            <input class="form-control" type="text" placeholder="Readonly input here..." aria-label="readonly input example" readonly>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <hr>
            <h4>Readonly plain text</h4>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <hr>
            <h4>File input</h4>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="mb-3">
                <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                <input class="form-control" type="file" id="formFileDisabled" disabled>
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Small file input example</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <div>
                <label for="formFileLg" class="form-label">Large file input example</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <hr>
            <h4>Color</h4>
            <label for="exampleColorInput" class="form-label">Color picker</label>
            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col">
            <a href="{{ route('index') }}">INDEX</a>
        </div>
    </div>
</div>

@endsection