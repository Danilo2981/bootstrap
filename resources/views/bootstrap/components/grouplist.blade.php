@extends('bootstrap.bootstrap')

@section('title', 'List Group')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <h2>Basic example</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Active items</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Disabled items</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item disabled" aria-disabled="true">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Links and buttons</h2>
        <div class="col">
            <div class="list-group">
                <h4>List</h4>
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                  Cras justo odio
                </a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
            </div>
            <div class="list-group">
                <h4>Button</h4>
                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                  Cras justo odio
                </button>
                <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Flush</h2>
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Horizontal</h2>
        <div class="col-12">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
            <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
            <ul class="list-group list-group-horizontal-md">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
            <ul class="list-group list-group-horizontal-lg">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
            <ul class="list-group list-group-horizontal-xl">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
            <ul class="list-group list-group-horizontal-xxl">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Contextual classes</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item">Dapibus ac facilisis in</li>
              
                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
            </ul>
        </div>
        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
              
                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <h2>With badges</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Cras justo odio
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Dapibus ac facilisis in
                  <span class="badge bg-primary rounded-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Morbi leo risus
                  <span class="badge bg-primary rounded-pill">1</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Custom content</h2>
        <div class="col">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
              </div>
        </div>
    </div>
    <div class="row mt-3">
        <h2>Checkboxes and radios</h2>
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Cras justo odio
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Dapibus ac facilisis in
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Morbi leo risus
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Porta ac consectetur ac
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    Vestibulum at eros
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="list-group">
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Cras justo odio
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Dapibus ac facilisis in
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Morbi leo risus
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Porta ac consectetur ac
                </label>
                <label class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="">
                    Vestibulum at eros
                </label>
            </div>
        </div>
    </div>
    <h4>Componente</h4>
    <div class="row mt-3">
        <div class="col-4">
            <div role="tabpanel">
                <!-- List group -->
                <div class="list-group" id="myList" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#home" role="tab">Home</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#profile" role="tab">Profile</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#messages" role="tab">Messages</a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#settings" role="tab">Settings</a>
                </div>
            </div>
        </div>
        <div class="col-8">      
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <h3>Titulo 1</h3>
                    <p>1. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, doloribus dolorum. Perferendis, voluptate odit soluta placeat nesciunt totam eum dolor maiores dicta vel cupiditate nihil fugit, fuga odio aut commodi.</p>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <h3>Titulo 2</h3>
                    <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, doloribus dolorum. Perferendis, voluptate odit soluta placeat nesciunt totam eum dolor maiores dicta vel cupiditate nihil fugit, fuga odio aut commodi.</p>
                </div>
                <div class="tab-pane" id="messages" role="tabpanel">
                    <h3>Titulo 3</h3>
                    <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, doloribus dolorum. Perferendis, voluptate odit soluta placeat nesciunt totam eum dolor maiores dicta vel cupiditate nihil fugit, fuga odio aut commodi.</p>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                    <h3>Titulo 4</h3>
                    <p>4 .Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, doloribus dolorum. Perferendis, voluptate odit soluta placeat nesciunt totam eum dolor maiores dicta vel cupiditate nihil fugit, fuga odio aut commodi.</p>
                </div>
            </div>
        </div>    
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection
