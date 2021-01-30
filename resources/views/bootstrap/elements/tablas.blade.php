@extends('bootstrap.bootstrap')

@section('title', 'Tablas')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <h5>Tabla normal</h5>
        <div class="col">
            <table class="table">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr>
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr>
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-100"></div>
        <h5>Tabla small</h5>
        <div class="col">
            <table class="table table-sm">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr>
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr>
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5>Tabla Hover</h5>
        <div class="col">
            <table class="table table-hover">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr>
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr>
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5>Tabla Borderd</h5>
        <div class="col">
            <table class="table table-bordered">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr>
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr>
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5>Tabla Responsive sm-md-lg-xl</h5>
        <div class="col">
            <table class="table table-responsive-lg">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr>
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr>
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h5>Tabla Primary</h5>
        <div class="col">
            <table class="table table-primary">
                {{-- tr es fila --}}
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Pais</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <td>Luna</td>
                        <td>25</td>
                        <td>Atuntaqui</td>
                    </tr>
                    <tr class="table-success">
                        <td>Lola</td>
                        <td>30</td>
                        <td>Ibague</td>
                    </tr>
                    <tr class="table-danger">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                    <tr class="table-info">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                    <tr class="table-light">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                    <tr class="table-danger">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                    <tr class="bg-primary text-danger">
                        <td>Pancha</td>
                        <td>45</td>
                        <td>Quito</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

{{-- personalizar color de tabla cob bg- --}}

{{-- <!-- On tables -->
<table class="table-primary">...</table>
<table class="table-secondary">...</table>
<table class="table-success">...</table>
<table class="table-danger">...</table>
<table class="table-warning">...</table>
<table class="table-info">...</table>
<table class="table-light">...</table>
<table class="table-dark">...</table>

<!-- On rows -->
<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr> --}}

@endsection