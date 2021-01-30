@extends('bootstrap.bootstrap')

@section('title', 'Progress Bar')

@section('style')
<style>
    body {
        position: relative;
    }
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#fat">@fat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mdo">@mdo</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('index') }}" class="nav-link">INDICE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#one">one</a></li>
                            <li><a class="dropdown-item" href="#two">two</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#three">three</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
                <h4 id="fat">@fat</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nemo tempora et, minima fugiat praesentium ad, dignissimos earum a qui minus nisi? Perspiciatis debitis, eum dolor ex illo iusto doloremque.</p>
                <h4 id="mdo" style="margin-top: 1000px">@mdo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aliquid dolorum labore amet delectus, perferendis dolores dignissimos, et necessitatibus corporis eos nemo. Modi doloribus deleniti laborum voluptates sunt a optio?</p>
                <h4 id="one" style="margin-top: 1500px">one</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia unde illum blanditiis facilis totam! Eveniet, exercitationem aliquid. Impedit officia quibusdam obcaecati consequatur? Sapiente culpa eaque nobis provident officia, rerum fugiat.</p>
                <h4 id="two" style="margin-top: 2000px">two</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aliquid neque corrupti ipsam vel modi a eius sunt eligendi iusto numquam beatae officiis praesentium ipsum dignissimos inventore minus nisi cumque!</p>
                <h4 id="three" style="margin-top: 1500px">three</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, quisquam cum? Suscipit repellat, delectus aliquid culpa facilis quas voluptatem minus. Accusantium laudantium nisi quos culpa repellat optio facilis obcaecati ducimus.</p>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        var scrollSpy = new bootstrap.ScrollSpy(document.body, 
        {
            target: '#navbar-example2'
        });
    </script>
@endsection

@endsection