<!-- ***** Header and library Area Start ***** -->
@extends('layouts.mainlibrariesup')
<!-- ***** Header and library Area End ***** -->
<title>Home</title>

<body>
@extends('layouts.header')
    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <span>01. Upload prescription</span><br>
                            <span>02. Confirm the order</span><br>
                            <span>03. Get it delivered to your doorstep</span>
                            <h4>E-Medi-Order</h4>
                            <h6>Trust . Convenience . Care</h6>
                            <div class="main-white-button scroll-to-section">
                            <a href="/prescription">Upload Your Prescription</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.png" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.png" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.png" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best services for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-check-square"></i></a></li>
                            </ul>
                            <img src="assets/images/offer01.png" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>On time delivery</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-check-square"></i></a></li>
                            </ul>
                            <img src="assets/images/offer02.png" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>Best price</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-check-square"></i></a></li>
                            </ul>
                            <img src="assets/images/offer03.png" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>24-7 service</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
    
<!--footer-->
@extends('layouts.footer')
@extends('layouts.mainlibrariesdown')

</body>
</html>