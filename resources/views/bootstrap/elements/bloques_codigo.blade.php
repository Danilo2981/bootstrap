@extends('bootstrap.bootstrap')

@section('title', 'Bloques de codigo')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2>Bloques de codigo en linea</h2>
            {{-- Premite resaltar eitquetas de codigo y escribir codigo en la pagina --}}
            <p>Lorem ipsum dolor sit amet <code>&lt;consectetur&gt;&lt;consectetur/&gt;</code> adipisicing elit. Veniam, officia.</p>
            {{-- Bloques de codigo --}}
            <hr>
            <h2>Bloques de codigo</h2>
            <p>
<pre>
<code>
{{-- codigo debe escribirse apegado . signos remplazas <> --}}
&lt;h1&gt;Lorem ipsum dolor sit amet.&lt;/h1&gt;
</code>
</pre>
            </p>
            <hr>
            <h2>Teclas</h2>
            <p>Para copiar texto presiona <kbd>Ctrl + C</kbd></p>
            <p>Para pegar texto presiona <kbd>Ctrl + V</kbd></p>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection