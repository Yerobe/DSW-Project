@extends('layouts.master')

@section('content')


@include('modals.info')
@include('modals.basket')
@include('modals.order')




<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a data-target="#info-user" data-toggle="modal" class="navbar-brand" href="index.html">{{__('others.saludo')}} - {{$reserva->name}} </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="#section-home" class="nav-link">{{__('others.home')}}</a></li>
        <li class="nav-item"><a href="#section-about" class="nav-link">{{__('others.about')}}</a></li>
        <li class="nav-item"><a href="#section-offer" class="nav-link">{{__('others.offer')}}</a></li>
        <li class="nav-item"><a href="#section-menu" class="nav-link">{{__('others.menu')}}</a></li>
        <li class="nav-item"><a href="#section-news" class="nav-link">{{__('others.news')}}</a></li>
        <li class="nav-item"><a href="#section-gallery" class="nav-link">{{__('others.gallery')}}</a></li>
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

<section class="ftco-section" id="section-about">
  <div class="container">
    <div class="row">
      <div class="col-md-5 ftco-animate mb-5 text-dark">
        <h4 class="ftco-sub-title text-dark">{{__('others.ourhistory')}}</h4>
        <h2 class="ftco-primary-title display-4">{{__('others.welcome')}}</h2>
        <p>{{__('others.text1')}}</p>

        <p class="mb-4">{{__('others.text2')}}</p>
        <p><a href="#" class="btn btn-secondary btn-lg">{{__('others.ourhistory')}}</a></p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
        <img src="{{asset('HomePage/images/home/LaPiramide_2.jpg')}}" alt="Free Template by Free-Template.co">
      </div>
    </div>
  </div>
</section>
<!-- END section -->


<section class="ftco-section bg-light" id="section-offer">
  <div class="container text-dark">

    <div class="row">
      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h4 class="ftco-sub-title text-dark">{{__('others.ouroffers')}}</h4>
        <h2 class="display-4">{{__('others.offers')}} &amp; Promos</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">{{__('others.text3')}}</p>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-carousel ftco-owl">








          @foreach ($menuses as $menu)
          <div class="item">
            <div class="media d-block mb-4 text-center ftco-media ftco-animate border-0">
              <img src="{{$menu->imagen}}" alt="Free Template by Free-Template.co" class="img-fluid">
              <div class="media-body p-md-5 p-4">
                <h5 class="text-primary">{{$menu->precio}} P</h5>
                <h5 class="mt-0 h4">{{$menu->name}}</h5>
                <p class="mb-4">{{$menu->description}}</p>

                <form action="add/basket/{{$menu->id}}/{{$cuenta['IdCesta']}}" method="POST">
                  @csrf
                  <button type="submit" class="mb-0 btn btn-primary btn-sm">Add To Basket</button>
                </form>



              </div>
            </div>
          </div>
          @endforeach




        </div>
      </div>

    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section" id="section-menu">
  <div class="container">
    <div class="row text-dark">
      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">{{__('others.ourproducts')}}</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">{{__('others.text4')}}</p>
          </div>
        </div>
      </div>

      <div class="col-md-12 text-center">

        <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">



          @foreach ($categories as $categoria)

          @if($categoria->id == 1)
          <li class="nav-item ftco-animate">
            <a class="nav-link active" id="pills-{{$categoria->name}}-tab" data-toggle="pill" href="#pills-{{$categoria->name}}" role="tab" aria-controls="pills-{{$categoria->name}}" aria-selected="true">{{$categoria->name}}</a>
          </li>

          @else
          <li class="nav-item ftco-animate ">
            <a class="nav-link" id="pills-{{$categoria->name}}-tab" data-toggle="pill" href="#pills-{{$categoria->name}}" role="tab" aria-controls="pills-{{$categoria->name}}" aria-selected="false">{{$categoria->name}}</a>
          </li>

          @endif
          @endforeach

        </ul>

        <div class="tab-content text-left">
          <div class="tab-pane fade show active" id="pills-{{$categories[0]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[0]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">


                <?php for ($i = 0; $i < 3; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>



              </div>
              <div class="col-md-6 ftco-animate">


                <?php for ($i = 3; $i < 6; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-{{$categories[1]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[1]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 6; $i < 9; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 9; $i < 12; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-{{$categories[2]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[2]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 12; $i < 15; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
               <div class="col-md-6 ftco-animate">




                <?php for ($i = 15; $i < 18; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-{{$categories[3]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[3]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 18; $i < 21; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
               <div class="col-md-6 ftco-animate">




                <?php for ($i = 21; $i < 24; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

            </div>
          </div>
        </div>





        <div class="tab-pane fade" id="pills-{{$categories[4]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[4]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 24; $i < 27; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
               <div class="col-md-6 ftco-animate">




                <?php for ($i = 27; $i < 30; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

            </div>
          </div>
        </div>







        <div class="tab-pane fade" id="pills-{{$categories[5]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[5]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 30; $i < 33; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
               <div class="col-md-6 ftco-animate">




                <?php for ($i = 33; $i < 36; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

            </div>
          </div>
        </div>




        <div class="tab-pane fade" id="pills-{{$categories[6]['name']}}" role="tabpanel" aria-labelledby="pills-{{$categories[6]['name']}}-tab">
            <div class="row">
              <div class="col-md-6 ftco-animate">




                <?php for ($i = 36; $i < 39; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

              </div>
               <div class="col-md-6 ftco-animate">




                <?php for ($i = 39; $i < 42; $i++) { // dd($array_productos);
                ?>
                  <div class="media menu-item">
                    <img style="width: 100px; height: 100px;" class="mr-3" src="<?= $array_productos[$i]['imagen'] ?>" class="img-fluid" alt="Free Template by Free-Template.co">
                    <div class="media-body">
                      <h5 class="mt-0"><?= $array_productos[$i]['name'] ?></h5>
                      <p><?= $array_productos[$i]['description'] ?></p>
                      <form action="add/basket/<?php echo ($array_productos[$i]['id']) ?>/{{$cuenta['IdCesta']}}" method="POST">
                        @csrf
                        <button type="submit" class="mb-0 btn btn-block btn-primary "><?= $array_productos[$i]['precio'] . 'P' ?></button>
                      </form>
                    </div>
                  </div>
                <?php
                } ?>

            </div>
          </div>
        </div>




      </div>


    </div>
  </div>
  </div>
</section>
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

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="{{asset('HomePage/images/home/offer_1.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">{{__('others.name1')}}</h5>
            <p class="mb-4">{{__('others.text5')}}</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">{{__('others.readmore')}}</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="{{asset('HomePage/images/home/offer_2.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">{{__('others.name1')}}</h5>
            <p class="mb-4">{{__('others.text5')}}</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">{{__('others.readmore')}}</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="media d-block mb-4 text-center ftco-media ftco-animate">
          <img src="{{asset('HomePage/images/home/offer_3.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
          <div class="media-body p-md-5 p-4">
            <h5 class="mt-0 h4">{{__('others.name1')}}</h5>
            <p class="mb-4">{{__('others.text5')}}</p>

            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">{{__('others.readmore')}}</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END section -->

<section class="ftco-section" id="section-gallery">
  <div class="container">
    <div class="row ftco-custom-gutters">

      <div class="col-md-12 text-center mb-5 ftco-animate">
        <h2 class="display-4">{{__('others.foodgallery')}}</h2>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <p class="lead">{{__('others.text3')}}</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_3.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_3.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_5.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_5.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_1.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_1.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>

      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_2.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_2.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_6.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_6.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 ftco-animate">
        <a href="{{asset('HomePage/images/home/menu_4.jpg')}}" class="ftco-thumbnail image-popup">
          <img src="{{asset('HomePage/images/home/menu_4.jpg')}}" alt="Free Template by Free-Template.co" class="img-fluid">
        </a>
      </div>

    </div>
  </div>
</section>
<!-- END section -->




@stop