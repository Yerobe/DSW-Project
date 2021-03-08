<div class="modal" tabindex="-1" role="dialog" id="basket-user">


    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personal Basket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                 <?php $puntos_totales = 0 ?>
                 
                @if(count($detalles_cesta) != 0)

                
                @foreach ($detalles_cesta as $item)

                <?php $puntos_totales = $puntos_totales + $item['precio']; ?>

                <div class="row mb-3">
                    <div class="col col-4">
                        <img class="rounded w-100" src="{{$item['imagen']}}" alt="">
                    </div>

                    <div class="col col-6">
                        <div class="row">
                            <div class="col col-12">
                                <p class="text-bold d-inline">Name: </p>
                                <p class="text-dark d-inline">{{$item['name']}}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col col-12">
                                <p class="text-bold d-inline">Amount: </p>
                                <p class="text-dark d-inline">{{$item['amount']}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-12">
                                <p class="text-bold d-inline">Points: </p>
                                <p class="text-dark d-inline">{{$item['precio']}}</p>
                            </div>
                        </div>

                    </div>

                    <div class="col col-2">

                        <?php// dd("/product/basket/delete/{{$item['id']}}/{{$cuenta['IdCesta']}}") ?>

                        <form method="POST" action="/delete/basket/{{$item['id']}}/{{$cuenta['IdCesta']}} ">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn">&#10006;</button>
                        </form>


                    </div>

                </div>

                @endforeach

                @else

                <div class="row">
                    <div class="col col-12 m-auto text-center">
                        <p class="text-center text-dark">Empty Basket</p>
                        <img class="text-center" src="https://mtracks.azureedge.net/public/images/site/cart/empty-cart.svg" alt="">
                    </div>
                </div>


                @endif



            </div>


            <div class="modal-footer">

                <div class="col col-6 align-content-between justify-content-between">
                    <p class="text-dark text-left float-left">Puntos Totales: {{$puntos_totales ?? '0'}}</p>
                </div>

                <div class="col col-6">
                    <div class="row">
                        <div class="col col-6">
                            <button data-target="#create-order" data-toggle="modal" type="button" class="btn btn-success right d-inline float-right" data-dismiss="modal" <?php if($puntos_totales == 0 || $puntos_totales  > $cuenta['points']){echo('disabled');} ?>>Finalize</button>
                        </div>
                        <div class="col col-6">
                            <button type="button" class="btn btn-danger right d-inline float-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

</div>