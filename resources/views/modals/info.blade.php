<div class="modal" tabindex="-1" role="dialog" id="info-user">
   
     
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                    <p class="text-bold d-inline">Name: </p>
                    <p class="text-dark d-inline">{{$reserva->name}}</p>
                    </div>

                    <div>
                    <p class="text-bold d-inline">Email: </p>
                    <p class="text-dark d-inline">{{$reserva->email}}</p>
                    </div>

                    <div>
                    <p class="text-bold d-inline">Reserve: </p>
                    <p class="text-dark d-inline">{{$reserva->reservastionNumber}}</p>
                    </div>

                    <div>
                    <p class="text-bold d-inline">Check-IN: </p>
                    <p class="text-dark d-inline">{{$reserva->checkIn}}</p>
                    </div>

                    <div>
                    <p class="text-bold d-inline">Check-OUT: </p>
                    <p class="text-dark d-inline">{{$reserva->checkOut}}</p>
                    </div>

                    <div>
                        
                    <p class="text-bold d-inline">Points: </p>
                    <p class="text-dark d-inline">{{$cuenta['points']}}</p>
                    </div>
                   
                </div>

               
                <div class="modal-footer">
                  <button data-target="#basket-user" data-toggle="modal" class="btn btn-success left d-inline" data-dismiss="modal">Basket</button>
                    <button type="button" class="btn btn-danger right d-inline" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>

</div>