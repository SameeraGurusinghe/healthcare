<!DOCTYPE html>
<html lang="en">

  <head>
      <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Update Contact Info</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/app-style.css"/>
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body><br><br>
@extends('layouts.header')

<!-- Start wrapper-->
<div id="wrapper">

<!--sidebar-wrapper-->
@extends('layouts.sidebar')


<div class="content-wrapper">
  <div class="container-fluid">

      <!--Contact Information update area end-->
      <div class="col-lg-12">
        <div class="card bg-dark">
          <div class="card-body">
			      <div class="table-responsive">
					  <h5 style="text-align: center;">UPDATE CONTACT INFORMATION</h5><br>

                @foreach($contact as $data)
                  <form action="{{url('/finalcontactupdate',$data->id)}}" method="POST">
                    {{csrf_field()}}

                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label form-control-label">Telephone</label>
                          <div class="col-lg-10 text-center">
                            
                            <input class="form-control" style="background-color:#181618;"  type="text" value="{{$data->telephone}}" name="phoneno">
                          </div>
                      </div><br>

                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label form-control-label">Email</label>
                          <div class="col-lg-10 text-center">
                            <input class="form-control" style="background-color:#181618;"  type="text" value="{{$data->email}}" name="email">
                          </div>
                      </div><br>

                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label form-control-label">Address</label>
                          <div class="col-lg-10 text-center">
                            <input class="form-control"style="background-color:#181618;"   type="text" value="{{$data->address}}" name="address">
                          </div>
                      </div><br>

                      <div class="form-group row">
                        <label class="col-lg-2 col-form-label form-control-label">Website</label>
                          <div class="col-lg-10 text-center">
                            <input class="form-control" style="background-color:#181618;"  type="text" value="{{$data->website}}" name="website">
                          </div>
                      </div><br>

					    <div class="p-2">
					    <button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;">UPDATE</button>
                        <button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;">RESET</button>
					            </div>
                     

					        </form>
                            @endforeach
					</div>
					</div>
        </div>
      </div>               
      <!--Contact Information update area end-->

</div></div></div>
  
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