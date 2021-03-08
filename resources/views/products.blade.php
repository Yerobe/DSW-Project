@extends('layouts.master')

@section('content')



<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a data-target="#info-user" data-toggle="modal" class="navbar-brand" href="home.blade.php">{{__('others.saludo')}}</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#section-products" class="nav-link">{{__('others.products')}}</a></li>
            </ul>

            <ul class="navbar-nav navbar-right">
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo __('others.closesession'); ?>
                        </button>
                    </form>
                </li>
            </ul>


            <form class='form-inline ml-5' action="{{ url('/catalog') }}" method="GET">

                <input type="search" class="form-control " name="texto" id="texto" placeholder="Buscar..." value="{{$texto ?? ''}}">

                <button class="btn btn-primary" type="submit">Buscar</button>

            </form>

        </div>


    </div>
</nav>
<!-- END nav -->

<section class="ftco-cover" style="background-image: url(../../HomePage/images/home/10.jpg);" id="section-home">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
            <div class="col-md-12">
                <h1 class="ftco-heading ftco-animate mb-3">{{__('others.welcome')}}</h1>
                <p class="mt-5"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white btn-lg ftco-animate" data-toggle="modal" data-target="#reservationModal">{{__('others.reservation')}}</a></p>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<!-- END section -->





<!-- END section -->

<section class="ftco-section bg-light" id="section-news">
    <div class="container">

        <div class="row">


            <div class="col-md-12 text-center mb-5 ftco-animate">
                <h2 class="display-4">{{__('others.news')}} &amp; {{__('others.events')}}</h2>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <p class="lead">{{__('others.text5')}}</p>
                    </div>
                </div>
            </div>


            @foreach ($arrayProduct as $product)


            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="media d-block mb-4 text-center ftco-media ftco-animate">
                    <img style="width: 300px; height: 300px" src="{{$product->imagen}}" alt="Free Template by Free-Template.co" class="img-fluid">
                    <div class="media-body p-md-5 p-4">
                        <h5 class="mt-0 h4">{{$product->name}}</h5>
                        <p class="mb-4">{{$product->precio}}</p>

                        <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">{{__('others.readmore')}}</a></p>
                    </div>
                </div>
            </div>

            @endforeach


            <div class="row">
                <div class="col col-12">
                    {{ $arrayProduct->links() }}
                </div>
            </div>




        </div>
    </div>
</section>
<!-- END section -->

<!-- END section -->




@stop