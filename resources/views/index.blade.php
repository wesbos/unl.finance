@extends('layouts.main')

@section('content')
 

<div class="clearfix"></div>

<!-- ##### Our Services Area Start ##### -->
<section class="section-padding-100-70 ico-about-bg relative clearfix" >
<div class="container">
    
    <div class="section-heading text-center">
        
        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
            <span class="gradient-text blue">OUR FEATURES</span>
        </div>
        <h2 class="fadeInUp" data-wow-delay="0.3s"> Why Choose Us</h2>
        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
    </div>
        

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Content -->
            <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.2s">
                <!-- Icon -->
                <div class="service_icon">
                    <img src="{{ asset('SiteAssets/img/icons/corporate/1.svg') }}" alt="">
                </div>
                <h6>Go Live in Minutes</h6>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Content -->
            <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.3s">
                <!-- Icon -->
                <div class="service_icon">
                    <img src="{{ asset('SiteAssets/') }}/img/icons/corporate/2.svg" alt="">
                </div>
                <h6>Manage like A Pro</h6>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <!-- Content -->
            <div class="service_single_content text-left mb-100 fadeInUp" data-wow-delay="0.4s">
                <!-- Icon -->
                <div class="service_icon">
                    <img src="{{ asset('SiteAssets/') }}/img/icons/corporate/3.svg" alt="">
                </div>
                <h6>Scale to Success</h6>
                <p>Lorem ipsum dolor sit amet, consectetur elit. Nulla neque quam, maxi ut ac cu msan ut, posuere sit Lorem ipsum qu.</p>
            </div>
        </div>
        
    </div>
</div>
</section>



<!-- ##### About Us Area Start ##### -->
<section class="about-us-area special section-padding-0-70 clearfix " >
<div class="container">
    <div class="row align-items-center">
        
        <div class="services-column col-lg-6 col-xs-12">
            <!--Services Block Four-->
            <div class="services-block-four how">
                <div class="inner-box">
                    <div class="step">1</div>
                    <h3><a class="normal" href="#">Register / Login to our Platform</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div>
                    
                </div>
            </div>

            <!--Services Block Four-->
            <div class="services-block-four how">
                <div class="inner-box">
                    <div class="step">2</div>
                    <h3><a class="normal" href="#">Enter your information details </a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four how" style="margin-bottom:0">
                <div class="inner-box">
                    <div class="step">3</div>
                    <h3><a class="normal" href="#">Follow Your App usage steps</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium modi assumenda beatae nonic.</div>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-lg-6 no-padding-right">
            <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                <img class="img-responsive center-block mb-30" alt="" src="{{ asset('SiteAssets/') }}/img/core-img/digital-4.png">
            </div>
        </div>

    </div>
</div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area hero-bg section-padding-100 clearfix">
<div class="container">
    <div class="row align-items-center">
        
        <div class="col-12 col-lg-6 col-sm-12">
            <div class="who-we-contant">
                <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                    <span class="gradient-text cyan">CONTACT US NOW IF YOU HAVE ANY QUESTION</span>
                </div>
                <h4 class="w-text bold fadeInUp" data-wow-delay="0.3s">Get in Touch with us so Easy.</h4>
                <p class="g-text fadeInUp" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, adipisicing elit. Ratione provident omnis iusto, veniam libero accusamus esse ab, enim temporibus.</p>
                <div class="subscribe-section has-shadow mt-30">
                    <div class="input-wrapper">
                        <i class="fa fa-home"></i>
                        <input type="email" placeholder="Enter your Email">
                    </div>
                    <button class="btn more-btn orange mt-sm-15 ml-15">subscribe</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
</section>

<section class=" fuel-features features section-padding-100 clearfix">

<div class="container has-shadow">
    <div class="section-heading text-center">
        
        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s" >
            <span class="gradient-text blue">OUR SERVICES</span>
        </div>
        <h2 class="wow fadeInUp" data-wow-delay="0.3s" >What we Offer</h2>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-30">
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/1.png" alt="">
                    </div>
                    <h3><a href="#">Investment Advise</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/2.png" alt="">
                    </div>
                    <h3><a href="#">Wealth Management</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-30">
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/3.png" alt="">
                    </div>
                    <h3><a href="#">Technica Support</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/4.png" alt="">
                    </div>
                    <h3><a href="#">Financial Planning</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-md-30 mt-sm-0">
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/5.png" alt="">
                    </div>
                    <h3><a href="#"> Marketing Base</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div class="services-block-four v2">
                <div class="inner-box">
                    <div class="icon-img-box">
                        <img src="{{ asset('SiteAssets/') }}/img/icons/6.png" alt="">
                    </div>
                    <h3><a href="#">Consulting Services</a></h3>
                    <div class="text">Lorem ipsum dolor sit amet, conse ctetur dolor adipisicing elit ipsum dolor sit amet.</div>
                </div>
                <a href="#" class="icon_foot">
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
    
</div>
</section>

<div class="clearfix"></div>

<!-- ##### About Us Area Start ##### -->
<section class="special section-padding-100-70 clearfix" id="about">

<div class="container">
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
            <div class="welcome-meter wow fadeInUp mb-30" data-wow-delay="0.7s">
                <img src="{{ asset('SiteAssets/') }}/img/core-img/digital-5.png"  alt="">
            </div>
        </div>
        
        <div class="col-12 col-lg-6 offset-lg-0">
            <div class="who-we-contant">
                <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                    <span class="gradient-text blue">WORKING COSELY TOGEATHER</span>
                </div>
                <h4 class="fadeInUp" data-wow-delay="0.3s">Our platform takes away the hard process of creating your website</h4>
                <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit eum illum tempora? Ducimus eum culpa voluptates dolorem dolorum et sit nisi, mollitia animi porro fuga sequi, molestias repellat excepturi nobis eum culpa voluptates dolorem dolorum et.</p>
                <div class="list-wrap align-items-center mb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Managed Sucre Backups</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">PHP 7 Ready Servers</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Advanced Caching</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">24/7 Expert Support</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Unlimited Applications</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="side-feature-list-item">
                                <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                <div class="foot-c-info">Optimized Stack</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<!-- ##### About Us Area End ##### -->


<!-- ##### FAQ & Timeline Area Start ##### -->
<div class="faq-timeline-area section-padding-100-85" id="faq">
<div class="container">
    <div class="section-heading text-center">
        
        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
            <span class="gradient-text blue">REPEATED QUESTIONS</span>
        </div>
        <h2 class="fadeInUp" data-wow-delay="0.3s">  Frequently Questions</h2>
        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
    </div>
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-12">
            <img src="{{ asset('SiteAssets/') }}/img/core-img/digital-3.png" alt="" class="center-block img-responsive">
        </div>
        <div class="col-12 col-lg-6 col-md-12">
            <div class="dream-faq-area mt-s ">
                <dl style="margin-bottom:0">
                    <!-- Single FAQ Area -->
                    <dt class="v2 wave fadeInUp" data-wow-delay="0.2s">What are the business advisory company?</dt>
                    <dd class="fadeInUp" data-wow-delay="0.3s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                    </dd>
                    <!-- Single FAQ Area -->
                    <dt class="v2 wave fadeInUp" data-wow-delay="0.3s">Research is What Makes an Effective Business Plan?</dt>
                    <dd>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                    </dd>
                    <!-- Single FAQ Area -->
                    <dt class="v2 wave fadeInUp" data-wow-delay="0.4s">How to achieving Small Business Success?</dt>
                    <dd>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                    </dd>
                    <!-- Single FAQ Area -->
                    <dt class="v2 wave fadeInUp" data-wow-delay="0.5s">Why Business Planning is Important?</dt>
                    <dd>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum voluptatum esse error?</p>
                    </dd>
                </dl>
            </div>
        </div>
        
    </div>
</div>
</div>
<!-- ##### FAQ & Timeline Area End ##### -->

<section class="pricing section-padding-100-70" style="background: #edf6fd" id="pricing">

<div class="container">
    <div class="section-heading text-center">
        
        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
            <span class="gradient-text blue">PRICING PLANS</span>
        </div>
        <h2 class="fadeInUp" data-wow-delay="0.3s">Our Pricing Plans</h2>
        <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
    </div>
    <div class="row no-gutters">
        <!-- Single Table -->
        <div class="col-lg-4 col-md-6">
            <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.2s" >
                <div class="price_table_text">
                    <h5>Begginer</h5>
                    <h1>Free</h1>
                    <p>Always</p>
                </div>
                <div class="table_text_details">
                    <p>250GB Bandwidth</p>
                    <p>08 Email Account</p>
                    <p>Unlimited Database </p>
                    <p>10GB Free Disk </p>
                    <p>24/7 Support</p>
                </div>
                <div class="table_btn mt-50">
                    <a href="#" class="btn more-btn">Start</a>
                </div>
            </div>
        </div>
        <!-- Single Table -->
        <div class="col-lg-4 col-md-6">
            <div class="single_price_table_content active text-center wow fadeIn" data-wow-delay="0.3s" >
                <div class="price_table_text">
                    <h5>Business</h5>
                    <h1>$24.99</h1>
                    <p>Per Month</p>
                </div>
                <div class="table_text_details">
                    <p>250GB Bandwidth</p>
                    <p>08 Email Account</p>
                    <p>Unlimited Database </p>
                    <p>10GB Free Disk </p>
                    <p>24/7 Support</p>
                </div>
                <div class="table_btn mt-50">
                    <a href="#" class="btn more-btn">Start</a>
                </div>
            </div>
        </div>
        <!-- Single Table -->
        <div class="col-lg-4 col-md-6">
            <div class="single_price_table_content text-center wow fadeInUp" data-wow-delay="0.4s" >
                <div class="price_table_text">
                    <h5>professional</h5>
                    <h1>$84.99</h1>
                    <p>Per Month</p>
                </div>
                <div class="table_text_details">
                    <p>250GB Bandwidth</p>
                    <p>08 Email Account</p>
                    <p>Unlimited Database </p>
                    <p>10GB Free Disk </p>
                    <p>24/7 Support</p>
                </div>
                <div class="table_btn mt-50">
                    <a href="#" class="btn more-btn">Start</a>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<!-- ##### Pricing Area End ##### -->

@endsection