@extends('bootstrap.bootstrap')

@section('title', 'Borders')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="bg-info clearfix">
                <button type="button" class="btn btn-secondary float-start">Example Button floated left</button>
                <button type="button" class="btn btn-secondary float-end">Example Button floated right</button>
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