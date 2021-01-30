@extends('bootstrap.bootstrap')

@section('title', 'Spaces')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<!-- Espaciado
				p - Padding
				m - Margin

				t - Top
				b - Bottom
				l - Left
				r - Right

				y - Eje Y (Arriba y Abajo)
				x - Eje X (Izquierda y Derecha)
			-->

			<!-- Anchos
				.w-25 - Ancho del 25%
				.w-50 - Ancho del 50%
				.w-75 - Ancho del 75%
				.w-100 - Ancho del 100%
			-->

			<!-- Altos
				.h-25 - Alto del 25%
				.h-50 - Alto del 50%
				.h-75 - Alto del 75%
				.h-100 - Alto del 100%
			-->

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="bg-success text-white w-25 p-2 my-2">25%</div>
            <div class="bg-success text-white w-50 p-2 my-2">50%</div>
            <div class="bg-success text-white w-75 p-2 my-2">75%</div>
            <div class="bg-success text-white w-100 p-2 my-2">100%</div>
        </div>
        <div class="col-6">
            <div style="height: 200px" class="bg-dark">
                <div class="bg-primary text-white p-2 mx-2 d-inline-block h-25">25%</div>
                <div class="bg-primary text-white p-2 mx-2 d-inline-block h-50">50%</div>
                <div class="bg-primary text-white p-2 mx-2 d-inline-block h-75">75%</div>
                <div class="bg-primary text-white p-2 mx-2 d-inline-block h-100">100%</span></div>
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