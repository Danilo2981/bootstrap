@extends('bootstrap.bootstrap')

@section('title', 'Indice')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2>GRID</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('grid.grid') }}">1. Grid</a></li>
                <li class="list-group-item"><a href="{{ route('grid.colauto') }}">2. Columnas automaticas</a></li>
                <li class="list-group-item"><a href="{{ route('grid.colvert') }}">3. Alineando columnas verticalmente</a></li>
                <li class="list-group-item"><a href="{{ route('grid.colhort') }}">4. Alineando columnas horizontalmete</a></li>
                <li class="list-group-item"><a href="{{ route('grid.offset') }}">5. Offesting</a></li>
                <li class="list-group-item"><a href="{{ route('grid.ordcol') }}">6. Reordenamiento de columnas</a></li>
                <li class="list-group-item"><a href="{{ route('grid.colanid') }}">7. Columas anidadas</a></li>
                <li class="list-group-item"><a href="{{ route('grid.example') }}">8. Ejemplo</a></li>
              </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>ELEMENTS</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('elements.responsive') }}">1. Utilidades para el diseño adaptable (Responsive Utilities)</a></li>
                <li class="list-group-item"><a href="{{ route('elements.tipografia') }}">2. Tipografias y textos</a></li>
                <li class="list-group-item"><a href="{{ route('elements.bloques') }}">3. Bloques de codigo</a></li>
                <li class="list-group-item"><a href="{{ route('elements.imagenes') }}">4. Imagenes y figuras</a></li>
                <li class="list-group-item"><a href="{{ route('elements.tablas') }}">5. Tablas</a></li>
                <li class="list-group-item"><a href="{{ route('elements.media') }}">6. Media objects</a></li>
                <li class="list-group-item"><a href="{{ route('elements.example') }}">7. Caja de comentarios con media object</a></li>
              </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>COMPONENTES</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('components.alertas') }}">1. Alertas</a></li>
                <li class="list-group-item"><a href="{{ route('components.badges') }}">2. Insignias (Badges)</a></li>
                <li class="list-group-item"><a href="{{ route('components.botones') }}">3. Botones</a></li>
                <li class="list-group-item"><a href="{{ route('components.cards') }}">4. Cards</a></li>
                <li class="list-group-item"><a href="{{ route('components.carousel') }}">5. Carousel</a></li>
                <li class="list-group-item"><a href="{{ route('components.collapse') }}">6. Collapse</a></li>
                <li class="list-group-item"><a href="{{ route('components.btndropdown') }}">7. Botones Dropdown</a></li>
                <li class="list-group-item"><a href="{{ route('components.jumbotron') }}">8. Jumbotron</a></li>
                <li class="list-group-item"><a href="{{ route('components.grouplist') }}">9. Grupos de listas</a></li>
                <li class="list-group-item"><a href="{{ route('components.modal') }}">10. Ventanas Modal</a></li>
                <li class="list-group-item"><a href="{{ route('components.navs') }}">11. Navs</a></li>
                <li class="list-group-item"><a href="{{ route('components.tabs') }}">12. Tabs</a></li>
                <li class="list-group-item"><a href="{{ route('components.navbar') }}">13. Navbars</a></li>
                <li class="list-group-item"><a href="{{ route('components.pagination') }}">14. Pagination</a></li>
                <li class="list-group-item"><a href="{{ route('components.popover') }}">15. Popovers</a></li>
                <li class="list-group-item"><a href="{{ route('components.progressbar') }}">16. Progress Bar</a></li>
                <li class="list-group-item"><a href="{{ route('components.scrollspy') }}">17. Scrollspy</a></li>
                <li class="list-group-item"><a href="{{ route('components.tooltips') }}">18. Tooltips</a></li>
              </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>FORMULARIOS</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('forms.forms') }}">1. Formularios</a></li>
                <li class="list-group-item"><a href="{{ route('forms.inlineforms') }}">2. Inline Forms</a></li>
                <li class="list-group-item"><a href="{{ route('forms.inputgroups') }}">3. Grupos de input</a></li>
                <li class="list-group-item"><a href="{{ route('forms.gridforms') }}">4. Usando la Grid</a></li>
                <li class="list-group-item"><a href="{{ route('forms.checkforms') }}">5. Checkboxes y Radio Buttons</a></li>
                <li class="list-group-item"><a href="{{ route('forms.coustomforms') }}">6. Formularios personalizados</a></li>
                <li class="list-group-item"><a href="{{ route('forms.inputvar') }}">7. Variantes de input</a></li>
                <li class="list-group-item"><a href="{{ route('forms.helps') }}">8. Cuadros de ayuda</a></li>
              </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>FLEXBOX</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('flexbox.flexbox') }}">1. Flexbox</a></li>
                <li class="list-group-item"><a href="{{ route('flexbox.flexbox2') }}">2. Flexbox 2</a></li>
                <li class="list-group-item"><a href="{{ route('flexbox.flexbox3') }}">3. Flexbox 3</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>BORDERS</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('borders.borders') }}">1. Borders</a></li>
                <li class="list-group-item"><a href="{{ route('borders.clearfix') }}">2. Clearfix y Display Property</a></li>
                <li class="list-group-item"><a href="{{ route('borders.colours') }}">3. Colores</a></li>
                <li class="list-group-item"><a href="{{ route('borders.position') }}">4. Position</a></li>
                <li class="list-group-item"><a href="{{ route('borders.embed') }}">5. Responsive Embeds</a></li>
                <li class="list-group-item"><a href="{{ route('borders.spaces') }}">6. Tamaños y espacios</a></li>                
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>PROYECTOS</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('portafolio.index') }}">1. Portafolio</a></li>
            </ul>
        </div>
    </div>
</div>


    
@endsection