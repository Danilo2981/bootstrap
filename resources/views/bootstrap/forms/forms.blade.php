@extends('bootstrap.bootstrap')

@section('title', 'Formularios')

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
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password">
                </div>
                <div class="mb-3">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label">Pais</label>
                    <select name="pais" id="pais" class="form-control">
                        <option value="mexico">Mexico</option>
                        <option value="españa">España</option>
                        <option value="colombia">Colombia</option>
                    </select>
                </div>
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="acepto" id="acepto">
                    <label class="form-check-label" for="acepto">
                      Acepto los terminos.
                    </label>
                </div>
                <button class="btn btn-dark" type="submit">Enviar</button>
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