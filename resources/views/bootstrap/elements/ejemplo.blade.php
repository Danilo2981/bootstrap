@extends('bootstrap.bootstrap')

@section('title', 'Caja de Comentarios Media Object')

@section('style')

    <link rel="stylesheet" href="{{ asset('static/css/elements.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100;300&display=swap" rel="stylesheet">

@endsection

@section('content')

<div class="container">
    <div class="row comentarios justify-content-center">
        <div class="col-6">
            {{-- alinea todo a la derecha con flex y luego le envia el boton hacia abajo con wrap 100% --}}
            <form action="" class="form_comentarios d-flex justify-content-end flex-wrap">
                <textarea name="" id="" placeholder="Comentario" cols="30" rows="10"></textarea>
                <button class="btn">Comentar</button>
            </form>
            <div class="d-flex">
                <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                <div class="p-3">
                    <p class="nombre">Pepito Cevallos <span>7:51pm</span></p>
                    <p class="comentario">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus animi laborum sint expedita quidem ut recusandae, dolore in beatae maxime perferendis sunt, nesciunt cupiditate enim facere, natus neque magnam ipsa.</p>
                    <div class="botones text-end">
                        <a href="">Responder</a>
                        <a href="">Editar</a>
                        <a href="">Borrar</a>
                        <div class="d-flex">
                            <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                            <div class="p-3">
                                <p class="nombre">Pepito Cevallos <span>7:51pm</span></p>
                                <p class="comentario">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus animi laborum sint expedita quidem ut recusandae, dolore in beatae maxime perferendis sunt, nesciunt cupiditate enim facere, natus neque magnam ipsa.</p>
                                <div class="botones text-end">
                                    <a href="">Responder</a>
                                    <a href="">Editar</a>
                                    <a href="">Borrar</a>
                                </div>
                            </div>
                        </div> 
                        <div class="d-flex">
                            <img src="http://placeimg.com/64/64/people" class="flex-shrink-0 mt-4" width="64" height="64" alt="">
                            <div class="p-3">
                                <p class="nombre">Pepito Cevallos <span>7:51pm</span></p>
                                <p class="comentario">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus animi laborum sint expedita quidem ut recusandae, dolore in beatae maxime perferendis sunt, nesciunt cupiditate enim facere, natus neque magnam ipsa.</p>
                                <div class="botones text-end">
                                    <a href="">Responder</a>
                                    <a href="">Editar</a>
                                    <a href="">Borrar</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>  
        </div>      
    </div>
</div>

@endsection