@extends('bootstrap.bootstrap')

@section('title', 'Checkbox y Radio Buttons')

@section('style')
<style>
    .contenedor {
        margin-bottom: 20px;
        background: #0275d8;
        color: #ffffff;
    }

    .contenedor div {
        background: rgba(255, 255, 255, .2);
        padding: 15px;
        border: 1px solid #000000; 
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row my-3">
        <div class="col">
            <h4>NO Wrap</h4>
            <hr>

            <p>.flex-nowrap</p>
            <div class="contenedor d-flex flex-nowrap">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Wrap</h4>
            <hr>

            <p>.flex-wrap</p>
            <div class="contenedor d-flex flex-wrap">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Wrap</h4>
            <hr>

            <p>.flex-wrap-reverse</p>
            <div class="contenedor d-flex flex-wrap-reverse">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    {{-- .flex-nowrap
    .flex-wrap
    .flex-wrap-reverse
    .flex-sm-nowrap
    .flex-sm-wrap
    .flex-sm-wrap-reverse
    .flex-md-nowrap
    .flex-md-wrap
    .flex-md-wrap-reverse
    .flex-lg-nowrap
    .flex-lg-wrap
    .flex-lg-wrap-reverse
    .flex-xl-nowrap
    .flex-xl-wrap
    .flex-xl-wrap-reverse
    .flex-xxl-nowrap
    .flex-xxl-wrap
    .flex-xxl-wrap-reverse --}}

    <div class="row my-3">
        <div class="col">
            <h4>Wrap</h4>
            <hr>

            <p>.flex-wrap-order</p>
            <div class="contenedor d-flex flex-nowrap bd-highlight">
                <div class="order-3 p-2 bd-highlight">First flex item</div>
                <div class="order-2 p-2 bd-highlight">Second flex item</div>
                <div class="order-1 p-2 bd-highlight">Third flex item</div>
              </div>
        </div>
    </div>

    {{-- .order-0
    .order-1
    .order-2
    .order-3
    .order-4
    .order-5
    .order-sm-0
    .order-sm-1
    .order-sm-2
    .order-sm-3
    .order-sm-4
    .order-sm-5
    .order-md-0
    .order-md-1
    .order-md-2
    .order-md-3
    .order-md-4
    .order-md-5
    .order-lg-0
    .order-lg-1
    .order-lg-2
    .order-lg-3
    .order-lg-4
    .order-lg-5
    .order-xl-0
    .order-xl-1
    .order-xl-2
    .order-xl-3
    .order-xl-4
    .order-xl-5
    .order-xxl-0
    .order-xxl-1
    .order-xxl-2
    .order-xxl-3
    .order-xxl-4
    .order-xxl-5 --}}

    {{-- .order-first
    .order-last
    .order-sm-first
    .order-sm-last
    .order-md-first
    .order-md-last
    .order-lg-first
    .order-lg-last
    .order-xl-first
    .order-xl-last
    .order-xxl-first
    .order-xxl-last --}}

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-start</p>
            <div class="contenedor align-content-start d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-center</p>
            <div class="contenedor align-content-center d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-end</p>
            <div class="contenedor align-content-end d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-between</p>
            <div class="contenedor align-content-between d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-around</p>
            <div class="contenedor align-content-around d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <h4>Align Content para cajas con medidas fijas</h4>
            <hr>

            <p>.align-content-stretch</p>
            <div class="contenedor align-content-stretch d-flex flex-wrap" style="height: 200px">
                <div>Caja1</div>
                <div>Caja2</div>
                <div>Caja3</div>
                <div>Caja4</div>
                <div>Caja5</div>
                <div>Caja6</div>
                <div>Caja7</div>
                <div>Caja8</div>
                <div>Caja9</div>
                <div>Caja10</div>
                <div>Caja11</div>
                <div>Caja12</div>
                <div>Caja13</div>
                <div>Caja14</div>
                <div>Caja15</div>
                <div>Caja16</div>
                <div>Caja17</div>
            </div>
        </div>
    </div>

    {{-- .align-content-start
    .align-content-end
    .align-content-center
    .align-content-around
    .align-content-stretch
    .align-content-sm-start
    .align-content-sm-end
    .align-content-sm-center
    .align-content-sm-around
    .align-content-sm-stretch
    .align-content-md-start
    .align-content-md-end
    .align-content-md-center
    .align-content-md-around
    .align-content-md-stretch
    .align-content-lg-start
    .align-content-lg-end
    .align-content-lg-center
    .align-content-lg-around
    .align-content-lg-stretch
    .align-content-xl-start
    .align-content-xl-end
    .align-content-xl-center
    .align-content-xl-around
    .align-content-xl-stretch
    .align-content-xxl-start
    .align-content-xxl-end
    .align-content-xxl-center
    .align-content-xxl-around
    .align-content-xxl-stretch --}}

    <div class="row">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

@endsection