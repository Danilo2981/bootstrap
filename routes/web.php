<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('bootstrap.index');})->name('index');

Route::get('/bootstrap', function () {return view('bootstrap.bootstrap');})->name('bootstrap');

Route::get('/bootstrap/grid', function () {return view('bootstrap.grid.grid');})->name('grid.grid');
Route::get('/bootstrap/grid/colauto', function () {return view('bootstrap.grid.columnas_automaticas');})->name('grid.colauto');
Route::get('/bootstrap/grid/colvert', function () {return view('bootstrap.grid.columnas_alineadas_verticalmente');})->name('grid.colvert');
Route::get('/bootstrap/grid/colhort', function () {return view('bootstrap.grid.columnas_alineadas_horizontalmente');})->name('grid.colhort');
Route::get('/bootstrap/grid/offset', function () {return view('bootstrap.grid.offseting');})->name('grid.offset');
Route::get('/bootstrap/grid/ordcol', function () {return view('bootstrap.grid.ordenamiento_de_columnas');})->name('grid.ordcol');
Route::get('/bootstrap/grid/colanid', function () {return view('bootstrap.grid.columnas_anidadas');})->name('grid.colanid');
Route::get('/bootstrap/grid/example', function () {return view('bootstrap.grid.ejemplo');})->name('grid.example');

Route::get('/bootstrap/elements/responsive', function () {return view('bootstrap.elements.responsive_utilities');})->name('elements.responsive');
Route::get('/bootstrap/elements/tipografia', function () {return view('bootstrap.elements.tipografia');})->name('elements.tipografia');
Route::get('/bootstrap/elements/bloques', function () {return view('bootstrap.elements.bloques_codigo');})->name('elements.bloques');
Route::get('/bootstrap/elements/imagenes', function () {return view('bootstrap.elements.imagenes');})->name('elements.imagenes');
Route::get('/bootstrap/elements/tablas', function () {return view('bootstrap.elements.tablas');})->name('elements.tablas');
Route::get('/bootstrap/elements/media', function () {return view('bootstrap.elements.media');})->name('elements.media');
Route::get('/bootstrap/elements/example', function () {return view('bootstrap.elements.ejemplo');})->name('elements.example');

Route::get('/bootstrap/components/alertas', function () {return view('bootstrap.components.alertas');})->name('components.alertas');
Route::get('/bootstrap/components/badges', function () {return view('bootstrap.components.badges');})->name('components.badges');
Route::get('/bootstrap/components/botones', function () {return view('bootstrap.components.botones');})->name('components.botones');
Route::get('/bootstrap/components/cards', function () {return view('bootstrap.components.cards');})->name('components.cards');
Route::get('/bootstrap/components/carousel', function () {return view('bootstrap.components.carousel');})->name('components.carousel');
Route::get('/bootstrap/components/collapse', function () {return view('bootstrap.components.collapse');})->name('components.collapse');
Route::get('/bootstrap/components/btndropdown', function () {return view('bootstrap.components.btndropdown');})->name('components.btndropdown');
Route::get('/bootstrap/components/jumbotron', function () {return view('bootstrap.components.jumbotron');})->name('components.jumbotron');
Route::get('/bootstrap/components/grouplist', function () {return view('bootstrap.components.grouplist');})->name('components.grouplist');
Route::get('/bootstrap/components/modal', function () {return view('bootstrap.components.modal');})->name('components.modal');
Route::get('/bootstrap/components/navs', function () {return view('bootstrap.components.navs');})->name('components.navs');
Route::get('/bootstrap/components/tabs', function () {return view('bootstrap.components.tabs');})->name('components.tabs');
Route::get('/bootstrap/components/navbar', function () {return view('bootstrap.components.navbar');})->name('components.navbar');
Route::get('/bootstrap/components/pagination', function () {return view('bootstrap.components.pagination');})->name('components.pagination');
Route::get('/bootstrap/components/popover', function () {return view('bootstrap.components.popover');})->name('components.popover');
Route::get('/bootstrap/components/progressbar', function () {return view('bootstrap.components.progressbar');})->name('components.progressbar');
Route::get('/bootstrap/components/scrollspy', function () {return view('bootstrap.components.scrollspy');})->name('components.scrollspy');
Route::get('/bootstrap/components/tooltips', function () {return view('bootstrap.components.tooltips');})->name('components.tooltips');

Route::get('/bootstrap/forms/forms', function () {return view('bootstrap.forms.forms');})->name('forms.forms');
Route::get('/bootstrap/forms/inlineforms', function () {return view('bootstrap.forms.inlineforms');})->name('forms.inlineforms');
Route::get('/bootstrap/forms/inputgroups', function () {return view('bootstrap.forms.inputgroups');})->name('forms.inputgroups');
Route::get('/bootstrap/forms/gridforms', function () {return view('bootstrap.forms.gridforms');})->name('forms.gridforms');
Route::get('/bootstrap/forms/checkforms', function () {return view('bootstrap.forms.checkforms');})->name('forms.checkforms');
Route::get('/bootstrap/forms/coustomforms', function () {return view('bootstrap.forms.coustomforms');})->name('forms.coustomforms');
Route::get('/bootstrap/forms/inputvar', function () {return view('bootstrap.forms.inputvar');})->name('forms.inputvar');
Route::get('/bootstrap/forms/helps', function () {return view('bootstrap.forms.helps');})->name('forms.helps');

Route::get('/bootstrap/flexbox/flexbox', function () {return view('bootstrap.flexbox.flexbox');})->name('flexbox.flexbox');
Route::get('/bootstrap/flexbox/flexbox2', function () {return view('bootstrap.flexbox.flexbox2');})->name('flexbox.flexbox2');
Route::get('/bootstrap/flexbox/flexbox3', function () {return view('bootstrap.flexbox.flexbox3');})->name('flexbox.flexbox3');

Route::get('/bootstrap/borders/borders', function () {return view('bootstrap.borders.borders');})->name('borders.borders');
Route::get('/bootstrap/borders/clearfix', function () {return view('bootstrap.borders.clearfix');})->name('borders.clearfix');
Route::get('/bootstrap/borders/colours', function () {return view('bootstrap.borders.colours');})->name('borders.colours');
Route::get('/bootstrap/borders/embed', function () {return view('bootstrap.borders.embed');})->name('borders.embed');
Route::get('/bootstrap/borders/position', function () {return view('bootstrap.borders.position');})->name('borders.position');
Route::get('/bootstrap/borders/spaces', function () {return view('bootstrap.borders.spaces');})->name('borders.spaces');

Route::get('/portafolio/index', function () {return view('portafolio.index');})->name('portafolio.index');

