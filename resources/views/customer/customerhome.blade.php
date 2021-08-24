<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/titlelogo.png"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,400,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;400;700&display=swap" rel="stylesheet">

    <title>Confirmations</title>

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

@foreach($mydata as $data)

<br>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">

<div class="col-lg-12 align-self-center">
<div class="left-text-content">
  
        <h4>Order status information</h4>
        <h4><mark>Order status send date and time :  {{$data->created_at}}</mark></h4><br><br>

        @if($data->dliverdate == 'e')
        <div class="alert alert-danger" role="alert"><i class="fa fa-times p-2 bg-dark"></i><br>We are sorry ! <br> The medicine that you have ordered, was out of stock.</div>
        @endif

        @if($data->dliverdate != 'e')
        <div class="alert alert-success" role="alert"><i class="fa fa-check-square p-2 bg-dark"></i><br>Success ! <br> Your medicine order is now on the way.</div>
            <div class="col-lg-12">
                <div class="">
                    <h4 class="text-dark">Email: <span class="text-white">{{$data->email}}</span></h4>
                    <h4 class="text-dark">Order ID: <span class="text-white">{{$data->cusid}}</span></h4>
                    <h4 class="text-dark">Total Charge: <span class="text-white">Rs.{{$data->tcharge}}/=</span></h4>
                    <h4 class="text-dark">Delivering Date: <span class="text-white">within {{$data->dliverdate}} day(s)</span></h4>
                    <h4 class="text-dark">Special Comment: <span class="text-white">{{$data->comment}}</span></h4>
                </div>
            </div>
        @endif

</div></div></div></div></div></div>
@endforeach

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

