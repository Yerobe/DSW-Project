<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Piramide</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('HomePage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('HomePage/css/open-iconic-bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('HomePage/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('HomePage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('HomePage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('HomePage/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('HomePage/css/bootstrap-datepicker.css')}} ">
    <link rel="stylesheet" href="{{asset('HomePage/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('HomePage/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('HomePage/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('HomePage/css/style.footer.css')}}">




    <style>
        .alert {
            width: 400px;
            position: fixed;
            top: 10px;
            right: 10px;
        }
    </style>





</head>

<body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">




    @yield('content')


    @include('partials.footer')


    <script src="{{asset('HomePage/js/jquery.min.js')}}"></script>
    <script src="{{asset('HomePage/js/popper.min.js')}}"></script>
    <script src="{{asset('HomePage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('HomePage/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('HomePage/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('HomePage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('HomePage/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('HomePage/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('HomePage/js/jquery.timepicker.min.js')}}"></script>

    <script src="{{asset('HomePage/js/jquery.animateNumber.min.js')}}"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('HomePage/js/google-map.js')}}"></script>

    <script src="{{asset('HomePage/js/main.js')}}"></script>

    <script src="{{asset('HomePage/js/personal.js')}}"></script>




    @if(Session::has('Cesta_Insertada'))

    <script>
        var type = 'success';
        var message = 'You have added a Product to the Cart';
        var duration = undefined;
        showAlert(type, message, duration);

        var modal = "basket-user";
        openmodal(modal);
    </script>


    @endif


    @if(Session::has('Cesta_Eliminada'))

    <script>
        var type = 'danger';
        var message = 'You have remove a Product to the Cart';
        var duration = undefined;
        showAlert(type, message, duration);

        var modal = "basket-user";
        openmodal(modal);
    </script>


    @endif


    @if(Session::has('Pedido_Realizado'))

    <script>
        var type = 'success';
        var message = 'Pedido_Realizado';
        var duration = undefined;
        showAlert(type, message, duration);
    </script>


    @endif



    <script>
        function changeTime() {
            var hora = document.getElementById("hora_recogida").value;

            if (hora > '11:00' || hora < '08:00') {
                window.alert("La Hora de Desayunos es de 08:00 - 11:00")
                document.getElementById("hora_recogida").value = '10:00';
            }
        }
    </script>




</body>

</html>