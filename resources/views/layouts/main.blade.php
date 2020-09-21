
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Website Title</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('SiteAssets/css/style.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('SiteAssets/css/responsive.css') }}">

</head>

<body class="light-version">
    <!-- Preloader -->
    <div id="preloader" style="display:none;">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span><img src="{{ asset('SiteAssets/img/core-img/logo.png') }}" alt="logo"></span></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                   <!--  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index-demo-1.html">Home style 1</a>
                            <a class="dropdown-item" href="index-demo-2.html">Home style 2</a>
                            <a class="dropdown-item" href="index-demo-3.html">Home style 3</a>
                        </div>
                    </li> -->
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.html">Contact</a>
                    </li>
                    <li class="lh-55px"><a href="#" class="btn login-btn ml-50">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->

 <!-- ##### Welcome Area Start ##### -->
 <section class="hero-section header3 relative section-padding" id="home">

<div class="hero-section-content">
    
    <div class="container h-100">
        <div class="row h-100 mb-50 align-items-center">

            <!-- Welcome Content -->
            <div class="col-12 col-lg-6 col-md-12">
                <div class="welcome-content">
                    <div class="promo-section">
                        <h3 class="special-head gradient-text cyan">Business grow strategy is our mission</h3>
                    </div>
                    <h1 class="w-text wow fadeInUp" data-wow-delay="0.2s">Creative Business Solutions With Experienced Experts</h1>
                    <p class="g-text wow fadeInUp" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta, dignissimos aut, assumenda dolore totam natus qui cum vel omnis voluptates.</p>
                    <div class="dream-btn-group wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="btn more-btn mr-3">contact us</a>
                        <a href="#" class="btn more-btn"> Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12"> </div>
           
        </div>
    </div>
</div>
</section>
<!-- ##### Welcome Area End ##### -->

    @yield('content')


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <!-- ##### team Area Start ##### -->
        <div class="striples-bg">
	        <!-- ##### Team Area Start ##### -->
	        <section class="our_team_area section-padding-100-70 clearfix" id="team">
	            <div class="container">
	                <div class="row">
	                    <div class="col-12">
	                        <div class="section-heading text-center">
	                            
	                            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
	                                <span>Our Creative Team</span>
	                            </div>
	                            <h2 class="fadeInUp" data-wow-delay="0.3s">Our Awesome Team</h2>
	                            <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
	                    <!-- Single Team Member -->
	                    <div class="col-12 col-sm-6 col-lg-3">
	                       <div class="our-team ico-team">
	                            <div class="team_img">
	                                <img src="{{ asset('SiteAssets/') }}/img/team-img/member1.png" class="mt-30 width-80" alt="chef-1">
	                                <ul class="social">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
	                            <div class="team-content">
	                                <h4 class="title">Randy crishen</h4>
	                                <span class="post">Company CEO</span>
	                            </div>
	                        </div>
	                    </div>

	                    <!-- Single Team Member -->
	                    <div class="col-12 col-sm-6 col-lg-3">
	                       <div class="our-team ico-team">
	                            <div class="team_img">
	                                <img src="{{ asset('SiteAssets/') }}/img/team-img/member2.png" class="mt-30 width-80" alt="chef-1">
	                                <ul class="social">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
	                            <div class="team-content">
	                                <h4 class="title">Monica Ashker</h4>
	                                <span class="post">Web Designer</span>
	                            </div>
	                        </div>
	                    </div>

	                    <!-- Single Team Member -->
	                    <div class="col-12 col-sm-6 col-lg-3">
	                       <div class="our-team ico-team">
	                            <div class="team_img">
	                                <img src="{{ asset('SiteAssets/') }}/img/team-img/member3.png" class="mt-30 width-80" alt="chef-1">
	                                <ul class="social">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
	                            <div class="team-content">
	                                <h4 class="title">Tollay Ramzomi</h4>
	                                <span class="post">Web Developer</span>
	                            </div>
	                        </div>
	                    </div>

	                    <!-- Single Team Member -->
	                    <div class="col-12 col-sm-6 col-lg-3">
	                       <div class="our-team ico-team">
	                            <div class="team_img">
	                                <img src="{{ asset('SiteAssets/') }}/img/team-img/member4.png" class="mt-30 width-80" alt="chef-1">
	                                <ul class="social">
	                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	                                </ul>
	                            </div>
	                            <div class="team-content">
	                                <h4 class="title">Jacke Wilson</h4>
	                                <span class="post">Marketing Specialist</span>
	                            </div>
	                        </div>
	                    </div>

	                </div>
	            </div>
	        </section>
	        <!-- ##### Team Area End ##### -->

	        <section class="our-partners clearfix section-padding-0-70">
                <div class="container">
                    <div class="section-heading text-center">
                        
                        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                            <span>Our Main Partners</span>
                        </div>
                        <h2 class="fadeInUp" data-wow-delay="0.3s">Our powerful Partners</h2>
                        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/3.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/5.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6   col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/1.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member ">
                                <div class="team-img">
                                    <img class="img-responsive center-block" src="{{ asset('SiteAssets/') }}/img/partners/5.png" alt="">
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </section>
	    </div>
        <!-- ##### team Area End ##### -->

        <div class="footer-content-area mt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img src="{{ asset('SiteAssets/') }}/img/core-img/logo.png" alt="logo"> Dorma </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY & TOS</h5>
                                <a href="#"><p>Advertiser Agreement</p></a>
                                <a href="#"><p>Acceptable Use Policy</p></a>
                                <a href="#"><p>Privacy Policy</p></a>
                                <a href="#"><p>Technology Privacy</p></a>
                                <a href="#"><p>Developer Agreement</p></a>
                            </div>
                        </div>
                    </div>
                      
                    <div class="col-12 col-lg-2 col-md-6 ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>NAVIGATE</h5>
                                <a href="#"><p>Advertisers</p></a>
                                <a href="#"><p>Developers</p></a>
                                <a href="#"><p>Resources</p></a>
                                <a href="#"><p>Company</p></a>
                                <a href="#"><p>Connect</p></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                <h5>CONTACT US</h5>
                                <p>Mailing Address:xx00 E. Union Ave</p>
                                <p>Suite 1100. Denver, CO 80237</p>
                                <p>+999 90932 627</p>
                                <p>support@yourdomain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="{{ asset('SiteAssets/') }}/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('SiteAssets/') }}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('SiteAssets/') }}/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('SiteAssets/') }}/js/plugins.js"></script>
    <!-- Parallax js -->
    

    <!-- script js -->
    <script src="{{ asset('SiteAssets/') }}/js/script.js"></script>

</body>
</html>