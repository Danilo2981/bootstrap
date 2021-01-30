@extends('bootstrap.bootstrap')

@section('title', 'Formularios con Grid')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <form action="">
                {{-- form-control hace que el campo ocupe el 100% --}}
                {{-- form-label da css al label, from-group ya no se usa en B5 --}}
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
                    </div>                    
                </div>
                <div class="row mb-3">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                    </div>
                    <div class="col-12 col-md-3 mb-3 ">
                        <label for="sexo" class="form-label">Sexo</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hombre" id="hombre">
                            <label class="form-check-label" for="hombre">
                              Hombre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mujer" id="mujer">
                            <label class="form-check-label" for="mujer">
                              Mujer
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 mb-3">
                        <div class="mb-3">
                            <label for="pais" class="form-label">Pais</label>
                            <select name="pais" id="pais" class="form-control">
                                <option value="mexico">Mexico</option>
                                <option value="españa">España</option>
                                <option value="colombia">Colombia</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-check text-center align-self-center">
                            <input class="form-check-input float-none mr-2 mb-3" type="checkbox" value="acepto" id="acepto">
                            <label class="form-check-label" for="acepto">
                              Acepto los terminos.
                            </label>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-9 col-md-4 d-grid gap-2">
                                <button class="btn btn-dark" type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection