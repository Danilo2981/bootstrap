@extends('bootstrap.bootstrap')

@section('title', 'Botones')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <h2>Slide</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>With controls</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>With indicators</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
              </div>
        </div>
    </div>
    <div class="row">
        <h2>With captions</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <h2>Crossfade</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
              </div>
        </div>
    </div>
    <div class="row">
        <h2>Individual</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
              </div>
        </div>
    </div>
    <div class="row">
        <h2>Dark variant</h2>
        <div class="col-12 mt-3">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="http://placeimg.com/1920/500/animals" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="http://placeimg.com/1920/500/tech" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="http://placeimg.com/1920/500/people" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
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