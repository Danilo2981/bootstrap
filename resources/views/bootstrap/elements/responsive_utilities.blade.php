@extends('bootstrap.bootstrap')

@section('title', 'Responsive Utilities')

@section('style')
<style>
    .columna {
        background: #2191fb;
        color: #ffffff;
        padding: 20px;
        scroll-margin-bottom: 20px;
    }
</style>
@endsection

@section('content')

<!-- NUEVO:
	    Los tamaños de Columna en Bootsrap 4 son:
            .col 		Extra Pequeño (Extra Small) - Smartphones Vertical		Menos de 544px
            .col-sm 	Pequeño (Small) - Smartphones Vertical	 				Mas de 544px y Menos de 768px
            .col-md 	Mediano (Medium) - Tablets 								Mas de 768px y Menos de 992px
            .col-lg 	Largo (Large) - Computadoras							Mas de 992px y Menos de 1200px
            .col-xl 	Extra Largo (Extra Large) - Computadoras				Mas de 1200px
    -->

   <div class="container">
        <div class="row">
            {{-- display block hace que se muestre none hace que no aparezca --}}
            {{-- los largos van del mas pequeño al mas grande --}}
            <div class="col columna d-block d-sm-none">XS - Extra Small</div>
            <div class="col columna d-none d-sm-block d-md-none">SM - Small</div>
            <div class="col columna d-none d-md-block d-lg-none">MD - Medio</div>
            <div class="col columna d-none d-lg-block d-xl-none">LG - Large</div>
            <div class="col columna d-none d-xl-block">XL - Extra Largo</div>
        </div>
   </div>

   <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('index') }}">INDICE</a>
            </div>
        </div>
   </div>
    
@endsection