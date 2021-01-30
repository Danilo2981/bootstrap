@extends('bootstrap.bootstrap')

@section('title', 'Position')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- 21:9 .embed-responsive-21by9 -->
                        <!-- 16:9 .embed-responsive-16by9 -->
                        <!-- 4:3 .embed-responsive-4by3 -->
                        <!-- 1:1 .embed-responsive-1by1 -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1w7OgIMMRc4" frameborder="0" allowfullscreen></iframe>
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