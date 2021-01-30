@extends('bootstrap.bootstrap')

@section('title', 'Collapse')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-6">
            <p>
                <a href="#bloque1" data-bs-toggle="collapse" class="btn btn-dark" role="button" aria-expanded="false" aria-controls="collapseExample">Bloque 1</a>
            </p>
            <div class="collapse" id="bloque1">
                <div class="card card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
              </div>
        </div>
        <div class="col-6">
            <p>
                <a href="#bloque2" data-bs-toggle="collapse" class="btn btn-dark" role="button" aria-expanded="false" aria-controls="collapseExample">Bloque 2</a>
            </p>
            <div class="collapse" id="bloque2">
                <div class="card card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <hr>
        <div class="col-6">
            <div id="acordion">
                {{-- Card #1 --}}
                <div class="card">
                    <div class="card-header" id="heading1">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Contenido #1
                            </button>
                        </h5>
                    </div>
                    <div class="collapse show" id="collapse1" aria-labelledby="heading1" data-parent="#acordion">
                        <div class="card card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>                    
                </div>
                {{-- Card 2 --}}
                <div class="card">
                    <div class="card-header" id="heading2">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Contenido #2
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="collapse2" aria-labelledby="heading2" data-parent="#acordion">
                        <div class="card card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>                    
                </div>
                {{-- Card 3 --}}
                <div class="card">
                    <div class="card-header" id="heading3">
                        <h5 class="mb-0">
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Contenido #3
                            </button>
                        </h5>
                    </div>
                    <div class="collapse" id="collapse3" aria-labelledby="heading3" data-parent="#acordion">
                        <div class="card card-body">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>                    
                </div>
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