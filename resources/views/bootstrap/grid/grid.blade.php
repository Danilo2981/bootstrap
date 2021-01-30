@extends('bootstrap.bootstrap')

@section('title', 'Grid')

@section('style')
<style>
    .row > div {
        text-align: center;
        background: #f2f2f2;
        margin: 10px 0;
    }    
</style>
@endsection

@section('content')

    {{-- Grid consta de 3 partes, contenedor, fila(row) y columna --}}
    {{-- Con el contenedor se puede centrar la pagina --}}
    {{-- todo contenedor debe tener una fila(row) REGLA --}}
    {{-- toda fila debe tener una columna(col) --}}

    <div class="container">
        {{-- Las filas (row) son los horizontales de la pagina --}}
        <div class="row">
            <div class="col-12">
                <h1>Hola mundo</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora aperiam asperiores a corporis quo maxime reprehenderit impedit quam, hic vitae delectus commodi praesentium nesciunt distinctio saepe ipsa minus voluptatum iste.</p>
            </div>
            <div class="col-6">
                <h1>Hola mundo</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora aperiam asperiores a corporis quo maxime reprehenderit impedit quam, hic vitae delectus commodi praesentium nesciunt distinctio saepe ipsa minus voluptatum iste.</p>
            </div>
            <div class="col-6">
                <h1>Hola mundo</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora aperiam asperiores a corporis quo maxime reprehenderit impedit quam, hic vitae delectus commodi praesentium nesciunt distinctio saepe ipsa minus voluptatum iste.</p>
            </div>
        </div>      
    </div>

    <div class="row">
        <div class="col">
            <p><a href="{{ route('index') }}">INDICE</a></p>
        </div>
    </div>

    <!-- NUEVO:
	    Los tamaños de Columna en Bootsrap 4 son:
            .col 		Extra Pequeño (Extra Small) - Smartphones Vertical		Menos de 544px
            .col-sm 	Pequeño (Small) - Smartphones Vertical	 				Mas de 544px y Menos de 768px
            .col-md 	Mediano (Medium) - Tablets 								Mas de 768px y Menos de 992px
            .col-lg 	Largo (Large) - Computadoras							Mas de 992px y Menos de 1200px
            .col-xl 	Extra Largo (Extra Large) - Computadoras				Mas de 1200px
    -->
    
@endsection





