<div class="modal" tabindex="-1" role="dialog" id="create-order">


    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <form method="POST" action="/add/order/{{ Auth::user()->id }}">
                @csrf
                    <div class="form-outline mb-4">
                        <input name="fecha_recogida" type="date" id="fecha_recogida" class="form-control" min="<?php echo (date('Y-m-d')) ?>" max="{{$reserva->checkOut}}" />
                        <label class="form-label" for="fecha_recogida">Pick Up Date</label>
                    </div>


                    <div class="form-outline mb-4">
                        <input onchange="changeTime()" name="hora_recogida" type="time" id="hora_recogida" class="form-control" />
                        <label class="form-label" for="tiempo_recogida">Time</label>
                    </div>

                    <div class="form-group col-12">
                        
                    <label class="form-label" for="inputState">Pick UP</label>
                        <select name="accion" id="inputState" class="form-control">
                            <option selected value="recoger">In the Bar</option>
                            <option value="llevar">In the Apartament</option>
                           
                        </select>
                    </div>



    

            </div>


            <div class="modal-footer">



                <div class="col col-12">
                    <div class="row">
                        <div class="col col-6">
                            <button type="submit" class="btn btn-success left d-inline float-left">Finalize</button>
                        </div>
                        <div class="col col-6">
                            <button type="button" class="btn btn-danger right d-inline float-right" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>


                </div>


            </div>
            </form>
        </div>
    </div>

</div>