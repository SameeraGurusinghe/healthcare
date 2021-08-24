<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,400,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;400;700&display=swap" rel="stylesheet">

    <title>Order Details</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/titlelogo.png"/>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body><br><br>
@extends('layouts.header')

<!-- Start wrapper-->
<div id="wrapper">

<!--sidebar-wrapper-->
@extends('layouts.cusslidebar')

<div class="content-wrapper">
<div class="container-fluid">

<div class="col-lg-12 align-self-center">
    <div class="left-text-content">
    @foreach($mydata as $data)

        <h4>Hello <b>{{$data->cusname}}</b>. This is your prescription information</h4>
        <h4><mark>Ordered date and time :  {{$data->created_at}}</mark></h4><br><br>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <h4>Name: <span class="text-dark">{{$data->cusname}}</span></h4>
                    <h4>Delivery Address: <span class="text-dark">{{$data->cusaddress}}</span></h4>
                    <h4>NIC: <span class="text-dark">{{$data->cusnic}}</span></h4>
                    <h4>Phone Number: <span class="text-dark">{{$data->cusnumber}}</span></h4>
                    <h4>Email: <span class="text-dark">{{$data->email}}</span></h4>
                    <h4>Special Comment: <span class="text-dark">{{$data->commen}}</span></h4>
                    <h4>My Perscription: <span><img src="/prescriptionimage/{{$data->image}}"></span></h4>
                </div>
            </div>
        </div><br><br><hr>
        @endforeach

    </div>
</div>

</div>
</div>

</div>
  
<!--footer-->
@extends('layouts.footer')

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
</body>
</html>
