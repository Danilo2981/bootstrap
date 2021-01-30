@extends('bootstrap.bootstrap')

@section('title', 'Cards')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<!-- Clases que podemos utilizar
		.card 					Establecemos que trabajaremos con una tarjeta (card)
			.card-body 		Establecemos cual sera el contenedor del contenido
				.card-title 	Establecemos el un texto como titulo de la card
				.card-subtitle 	Establecemos un subtitulo para la card
				.card-text 		Establecemos el texto de la card.
				.card-link  	Establecemos un enlace como boton en la card
			.card-img-top 		Establecemos una imagen para la card en la parte superior
			.card-img-bottom 	Establecemos una imagen para la card en la parte inferior
		-->

<div class="container">
    <div class="row mt-3">
        <div class="col-6">
            <div class="card" style="width: 32rem;">
                <img src="http://placeimg.com/286/180/people" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 32rem;">
                <img src="http://placeimg.com/286/180/animals" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-subtitle">Subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="" class="card-link">Enlace #1</a>
                  <a href="" class="card-link">Enlace #2</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">Encabezado</div>
                <div class="card-body">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam cum, rem, cumque adipisci, inventore ipsum tempore natus mollitia reiciendis et consectetur a possimus quas saepe illum molestias perferendis delectus sed?</p>
                    <a href="" class="btn btn-dark">Ir al post</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam cum, rem, cumque adipisci, inventore ipsum tempore natus mollitia reiciendis et consectetur a possimus quas saepe illum molestias perferendis delectus sed?</p>
                    <a href="" class="btn btn-dark">Ir al post</a>
                </div>
                <div class="card-footer">Pie de card</div>
            </div>
        </div>
    </div>
    <div class="row my-3">
        <div class="col">
            <div class="card">
                <div class="card-body bg-primary text-white">
                    <div class="card-title">Lorem, ipsum dolor.</div>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias praesentium tenetur eum omnis harum vero. Nesciunt provident voluptate totam veniam.</p>
                    <a href="" class="btn btn-primary">Ir al post</a>
                    <a href="" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body bg-success text-white">
                    <div class="card-title">Lorem, ipsum dolor.</div>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus odio obcaecati iusto nisi voluptas aperiam architecto fugit atque, molestias commodi!</p>
                    <a href="" class="btn btn-dark">Ir al post</a>
                    <a href="" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-primary">
                <div class="card-body">
                    <div class="card-title">Lorem, ipsum dolor.</div>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem atque obcaecati velit adipisci! At, accusantium ipsa ea deserunt porro quia.</p>
                    <a href="" class="btn btn-dark">Ir al post</a>
                    <a href="" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-success">
                <div class="card-body">
                    <div class="card-title">Lorem, ipsum dolor.</div>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque sunt corrupti harum illo eligendi, libero accusantium! Maxime, placeat. Adipisci, voluptates.</p>
                    <a href="" class="btn btn-success">Ir al post</a>
                    <a href="" class="btn btn-light">Ir al post</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Card-Group</h2>
            {{-- card group alinea cards sin dentrod de una columna sin necesidad de usar tamaños  --}}
            <div class="card-group">
                <div class="card">
                    <img src="http://placeimg.com/1080/528/people" class="card-image-bottom img-fluid" alt="">
                    <div class="card-body d-grid gap-2">
                        <h1 class="card-title">Lorem, ipsum dolor.</h1>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, necessitatibus dolorem! Sit atque ducimus excepturi voluptate id ratione harum dolorem illum, reiciendis odit eum aliquid veritatis consequatur similique quasi voluptatem!</p>
                        <button class="btn btn-dark block">Boton</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Footer</small>
                    </div>
                </div>
                <div class="card">
                    <img src="http://placeimg.com/1080/528/people" class="card-image-bottom img-fluid" alt="">
                    <div class="card-body d-grid gap-2">
                        <h1 class="card-title">Lorem, ipsum dolor.</h1>
                        <h5 class="card-subtitle">Subtitle</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, necessitatibus dolorem! Sit atque ducimus excepturi voluptate id ratione harum dolorem illum, reiciendis odit eum aliquid veritatis consequatur similique quasi voluptatem!</p>
                        <button class="btn btn-dark block">Boton</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Footer</small>
                    </div>
                </div>
                <div class="card">
                    <img src="http://placeimg.com/1080/528/people" class="card-image-bottom img-fluid" alt="">
                    <div class="card-body d-grid gap-2">
                        <h1 class="card-title">Lorem, ipsum dolor.</h1>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, necessitatibus dolorem! Sit atque ducimus excepturi voluptate id ratione harum dolorem illum, reiciendis odit eum aliquid veritatis consequatur similique quasi voluptatem!</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <button class="btn btn-dark block">Boton</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Footer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>Texto sobre la card</h2>
            <div class="card bg-dark text-white">
                <img src="http://placeimg.com/1080/528/people" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">Last updated 3 mins ago</p>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
    <div class="row" data-masonry='{"percentPosition": true }'>
        <h2>Masonry Cards</h2>
        <div class="container">
            <div class="row" data-masonry='{"percentPosition": true }'>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/1080/528/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore libero iusto impedit repellendus at natus dolor! Blanditiis aut recusandae dolore maxime nostrum fugiat amet voluptas provident, magni veritatis corporis quae?</p>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/528/528/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                           <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card bg-dark">                        
                        <div class="card-body text-white">
                            <h5 class="card-title">Title 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias repudiandae quam reiciendis ex libero fugiat ea, neque quo, sapiente asperiores corporis inventore adipisci incidunt officia eos consequatur ipsam dolorum explicabo?</p>
                            <a href="#" class="btn btn-light">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/1028/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 4</h5>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/1028/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 5</h5>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/628/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 6</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/1028/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 7</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, repudiandae voluptate dolorum ipsam, illo eligendi facilis modi libero necessitatibus accusantium iure laborum, tempora harum. Consectetur delectus quos voluptates atque debitis.</p>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/1028/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 8</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sapiente eligendi quaerat reiciendis ipsam dicta facere possimus cupiditate, vitae distinctio similique, pariatur, alias minus? Ab dolores dignissimos accusamus beatae exercitationem!</p>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">                        
                        <div class="card-body">
                            <h5 class="card-title">Title 9</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, fuga! Corrupti aspernatur beatae nisi a veritatis suscipit iusto repudiandae quod amet, praesentium error officia totam unde eveniet exercitationem odit veniam.</p>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/428/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 10</h5>
                        </div>
                    </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card">
                        <img src="http://placeimg.com/628/628/any" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Title 11</h5>
                            <a href="#" class="btn btn-primary">Boton</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

    


@endsection