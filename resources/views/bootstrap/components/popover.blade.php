@extends('bootstrap.bootstrap')

@section('title', 'Popover')

@section('style')
<style>
    
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h2>Popovers</h2>
            <hr>
            <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" 
                title="Popover title" 
                data-bs-content="And here's some amazing content. It's very engaging. Right?">
                Arriba
            </button>
        </div>
    </div>    
    <div class="row mt-5">    
        <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                Popover on top
            </button>
        </div>
    </div>    
    <div class="row mt-5">    
        <div class="col"> 
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on right
            </button>
        </div>
    </div>    
    <div class="row mt-5">    
        <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on bottom
            </button>
        </div>
    </div>    
    <div class="row mt-5">    
        <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
            Popover on left
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@section('script')
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) 
    {
        return new bootstrap.Popover(popoverTriggerEl)
    });
</script>
@endsection

@endsection