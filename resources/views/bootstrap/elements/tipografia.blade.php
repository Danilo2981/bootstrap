@extends('bootstrap.bootstrap')

@section('title', 'Tipografia')

@section('style')
<style>
   
</style>
@endsection

@section('content')

{{-- container fluid hace que el contenido este al 100% --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            {{-- Small permite hacer un texto mas pequeña al encabezado --}}
            <h1>Encabezado H1 <small class="text-muted">Texto secundario</small> </h1>
            <h2>Encabezado H2 <small class="text-muted">Texto secundario</small> </h2>
            <h3>Encabezado H3 <small class="text-muted">Texto secundario</small> </h3>
            <h4>Encabezado H4 <small class="text-muted">Texto secundario</small> </h4>
            <h5>Encabezado H5 <small class="text-muted">Texto secundario</small> </h5>
            <h6>Encabezado H6 <small class="text-muted">Texto secundario</small> </h6>
        </div>
        <div class="col-12">
            {{-- hr separa con una linea dentro del html --}}
            <hr>   
            <p class="h1">Parrafo con estilo de encabezado H1</p>
            <p class="h2">Parrafo con estilo de encabezado H2</p>
            <p class="h3">Parrafo con estilo de encabezado H3</p>
            <p class="h4">Parrafo con estilo de encabezado H4</p>
            <p class="h5">Parrafo con estilo de encabezado H5</p>
            <p class="h6">Parrafo con estilo de encabezado H6</p> 
        </div>
        <div class="col12">
            <hr>
            <p class="fs-1">Tamaño de fuente 1</p>
            <p class="fs-2">Tamaño de fuente 2</p>
            <p class="fs-3">Tamaño de fuente 3</p>
            <p class="fs-4">Tamaño de fuente 4</p>
            <p class="fs-5">Tamaño de fuente 5</p>
            <p class="fs-6">Tamaño de fuente 6</p>
        </div>
        <div class="col-12">
            <hr>
            {{-- encabezados de diseño propios de Bootstrap --}}
            <h1 class="display-1">Encabezado Diplay 1</h1>
            <h1 class="display-2">Encabezado Diplay 2</h1>
            <h1 class="display-3">Encabezado Diplay 3</h1>
            <h1 class="display-4">Encabezado Diplay 4</h1>
        </div>
        <div class="col-12">
            <hr>
            {{-- lead resalta con estilo a lo que se quiere decir --}}
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi at, dolorum ipsam, nam neque pariatur deserunt temporibus nemo voluptatem atque distinctio esse. Laborum adipisci nulla inventore voluptatibus corrupti repudiandae modi.</p>
            <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi at, dolorum ipsam, nam neque pariatur deserunt temporibus nemo voluptatem atque distinctio esse. Laborum adipisci nulla inventore voluptatibus corrupti repudiandae modi.</p>
        </div>
        <div class="col-12">
            <hr>
            {{-- mark resalta una parte del texto --}}
            <p>Lorem ipsum dolor, <mark>sit amet consectetur adipisicing elit</mark>. Commodi perspiciatis laudantium eum quidem possimus corrupti consectetur, quaerat distinctio numquam repellendus rerum quod, culpa quos dolor vitae nemo consequuntur repellat? Doloremque.</p>
            {{-- del tacha el texto señalado --}}
            <p><del>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam provident neque pariatur beatae dolor praesentium earum id omnis voluptate ut! Deleniti debitis illum voluptates vero eveniet ratione esse laborum. Deleniti.</del></p>
            {{-- s hace lo mismo que del --}}
            <p><s>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quos praesentium impedit et voluptatibus earum numquam accusantium voluptatem vel quis nesciunt nobis deleniti tempora libero, laudantium omnis sed veniam similique?</s></p>
            {{-- ins y u para subrayar texto --}}
            <p><ins>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur sint fugit animi maxime voluptate molestiae quibusdam odit eligendi consequuntur magni recusandae aperiam autem itaque, maiores nobis esse, sapiente nisi iste!</ins></p>
            <p><u>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore sapiente iusto sed, amet quod, culpa sit voluptatum vitae dolorem laboriosam nobis totam molestiae ab quaerat recusandae similique exercitationem? Obcaecati, inventore!</u></p>
            {{-- small hace el texto mas pequeño --}}
            <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae est suscipit exercitationem minima totam, cum veritatis facilis possimus dolor quasi saepe modi ipsa earum fuga sequi ipsum molestias sint ullam!</small></p>
            {{-- strong hace como negrillas y da importancia al texto SEO --}}
            <p><strong>ipsum dolor sit amet consectetur adipisicing elit. A id similique soluta eligendi, facilis fugit ipsa, doloremque maxime dicta quidem fugiat consequatur incidunt consequuntur quas nihil, cumque voluptatem sapiente hic?</strong></p>
            {{-- em hace la letra italica --}}
            <p><em>ipsum dolor sit amet consectetur adipisicing elit. A id similique soluta eligendi, facilis fugit ipsa, doloremque maxime dicta quidem fugiat consequatur incidunt consequuntur quas nihil, cumque voluptatem sapiente hic?</em></p>
        </div>
        <div class="col-4">
            <hr>
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt aliquid tempore porro, itaque sapiente excepturi praesentium nisi fuga et necessitatibus placeat dolorum ex, eligendi eaque atque sunt modi quibusdam recusandae!
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        {{-- Bootstrap 5 remplaza alineados con start y end a left y right --}}
        <div class="col-4">
            <p class="text-start">Alineado a la izquierda</p>
            <p class="text-center">Alineado al centro</p>
            <p class="text-end">Alineado a la derecha</p>
        </div>
        <div class="w-100"></div>
        <div class="col-12 col-md-8">
            <p class="text-start text-sm-end">Alineado a la derecha en dipositivos pequeños</p>
            <p class="text-start text-md-end">Alineado a la derecha en dipositivos medianos</p>
            <p class="text-start text-lg-end">Alineado a la derecha en dipositivos largos</p>
            <p class="text-start text-xl-end">Alineado a la derecha en dipositivos extra largos</p>
        </div>
        <div class="w-100"></div>
        <div class="col-4">
            <hr>
            <p class="text-lowercase fw-bold">minusculas Lorem ipsum dolor sit.</p>
            <p class="text-lowercase fw-bolder">minusculas Lorem ipsum dolor sit.</p>
            <p class="text-uppercase fw-normal">MAYUSCULAS Lorem ipsum dolor sit.</p>
            <p class="text-lowercase fw-light">minusculas Lorem ipsum dolor sit.</p>
            <p class="text-lowercase fw-lighter">minusculas Lorem ipsum dolor sit.</p>
            <p class="text-lowercase fst-italic">minusculas Lorem ipsum dolor sit.</p>
            <p class="text-capitalize fst-normal">Letras Capitales Lorem ipsum dolor sit.</p>
        </div>
        <div class="w-100"></div>
        <div class="col-6">
            <hr>
            <figure class="text-start">
                <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
            <figure class="text-end">
                <blockquote class="blockquote">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </figure>
        </div>
        <div class="w-100"></div>
        <div class="col-4">
            <hr>
            <div class="badge bg-primary text-wrap" style="width: 6rem;">
                This text should wrap.
              </div>
        </div>
        <div class="col-12">
            <hr>
            <p class="lh-1">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis pannenkoek purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p class="lh-sm">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis pannenkoek purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p class="lh-base">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis pannenkoek purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum.</p>
            <p class="lh-lg">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Cras mattis pannenkoek purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras mattis consectetur purus sit amet fermentum.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr>
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

    
@endsection