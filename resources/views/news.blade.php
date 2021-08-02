<!-- ***** Header and library Area Start ***** -->
@extends('layouts.mainlibrariesup')
<!-- ***** Header and library Area End ***** -->
<title>Pharmacy</title>

<body>
@extends('layouts.header')

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>E-Medi News</h6>
                            <h2>We will give various offers for our customers. Visit and see all updates in everyday.</h2>
                        </div>

                        @foreach($newsdata as $data)
                        <div class="row">
                            <div class="col-lg-2">
                                <div></div>
                            </div>

                            <div class="col-lg-8 text-center">
                                <div class="phone">
                                    <h6><mark>{{$data->created_at}}</mark></h6>
                                    <h4>{{$data->title}}</h4>
                                    <h5>{{$data->description}}</h5><br>
                                    <img src="/newsimage/{{$data->image}}">
                                </div><br>
                            </div>

                            <div class="col-lg-2">
                                <div></div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    
<!--footer-->
@extends('layouts.footer')
@extends('layouts.mainlibrariesdown')

</body>
</html>