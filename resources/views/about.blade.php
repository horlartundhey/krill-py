@extends('layouts.layout')
        
@section('content')
     <!-- About Hero Warp Start -->
     <div class="about-hero-warp">
        <div class="container">
            <div class="about-hero-content">
                <h1>Learn About Us</h1>
                <p>Financial inclusion for the unbanked in Africa</p>
            </div>
        </div>
    </div>
    <!-- About Hero Warp End -->
    
    <!-- About Image Warp Start -->
    {{-- <div class="about-image-warp">
        <div class="container">
            <div class="about-image">
                <img src="{{URL('public/assets/images/heros/about1.jpg')}}" class="about1" alt="about1">
            </div>
        </div>
    </div> --}}
    <!-- About Image Warp End -->

    
    <!-- Logo Slider Warp Start -->
    {{-- <div class="logo-slider-warp pb-100">
        <div class="container">
            <div class="swiper logo-slider">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo1.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo2.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo3.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo4.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo5.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo6.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo1.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo2.png" alt="image">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="logo">
                            <img src="assets/images/logo/logo3.png" alt="image">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- Logo Slider Warp End -->

    <!-- About Help Warp Start -->
    <div class="about-help-warp">
        <div class="container">
            <div class="inner-about-warp ptb-100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h3>A simple and smart way to send money</h3>
                            <p>There are more than 300 million unbanked in Sub-Saharan Africa. This is the number of people who do not have access to basic banking services in the region.</p>
                            <p>With approximately 80 percent of financial transactions carried out in cash, the region has one of the lowest accesses to banking services compared to the rest of the world. According to the World Bank, the fee to send remittances from the United States to Sub-Saharan Africa is the highest compared to the fee to send money to any other part of the world. There has to be a better way for African migrants living in the United States to send money to their relatives in Africa, affordably. </p>

                            <p>Our solution is a mobile payment application that leverages blockchain technology to facilitate peer-to-peer and cross-border remittances between the United States and Sub-Saharan Africa. A blockchain-enabled payment system that uses USDC stablecoin to facilitate peer-to-peer, cross-border transfers in real-time and at a fraction of the cost. By leveraging the USDC as a bridge currency, funds can be sent and received in local currency on either side of the transaction. </p>                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{url('public/assets/images/krillpayimga.jpg')}}" class="about2" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Help Warp End -->

    <!-- Global Warp Start -->
    <div class="global-warp pt-100 pb-75">
        {{-- <div class="container">
            <div class="global-content">
                <p>We consider all the drivers of change to give you the blocks and sections you need to change to create a truly happens professional website.</p>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="global-count">
                            <h1>486k</h1>
                            <p>Satisfied Global Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="global-count">
                            <h1>99%</h1>
                            <p>Download Total Range</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="global-count">
                            <h1>3.5K+</h1>
                            <p>5 star Odometers</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="global-count">
                            <h1>653+</h1>
                            <p>Finishing Success Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Global Warp End -->

    <!-- Team Warp Start -->
    <div class="team-warp pt-100 pb-75">
        <div class="container">
            <div class="section-title">
                <h2>Meet The Team</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                    <div class="team-card">
                        <a href="https://www.linkedin.com/in/emmanuel-e-umoh/"><img src="{{url('public/assets/images/emmauel.jpg')}}" class="team1" alt="team"></a>
                        <div class="content">
                            <h5>Emmanuel Umoh</h5>
                            <p>Co-founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                    <div class="team-card">
                        <a href="https://www.linkedin.com/in/niki-moyer-5b810220/"><img src="{{url('public/assets/images/niki_moyer.jfif')}}" class="team1" alt="team"></a>                        
                        <div class="content">
                            <h5>Niki Moyer</h5>
                            <p>Co-founder & Business Development</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                    <div class="team-card">
                        <a href="https://www.linkedin.com/in/rosemary-obasi-084433b8/"><img src="{{url('public/assets/images/rosema.jpg')}}" class="team1" alt="team"></a>
                        <div class="content">
                            <h5>Rosemary Obasi</h5>
                            <p>Chief Compliance Officer</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team Warp End -->

    <!-- Statement Warp Start -->
    <div class="statement-warp pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="statement-image">
                        <img src="{{url('public/assets/images/about-us-2.jpeg')}}" class="about3" alt="about">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="statement-content">
                        <h3>Remittance Powered by Blockchain</h3>

                        <p>By integrating blockchain and Web3 technology with our payment application, we are able to process payments in seconds and deliver the funds to the recipient in Africa instantly, while ensuring topflight security and traceability of remittance-related data. </p>

                        <p>By using USDC as a bridge currency within the blockchain payment network, we are on the path to advancing financial inclusion for the unbanked and making cross-border remittance low-cost and accessible. </p>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Statement Warp End -->


    
    <!-- Stand Warp Start -->
    {{-- <div class="stand-style2-warp">
        <div class="container">
            <div class="inner-stand2-warp d-flex align-items-center justify-content-between">
                <div class="content">
                    <h2>Grow Your Business</h2>
                    <p>With an intuitive layout and engaging content, users will be able to quickly 
                        how the app can help them solve their problems or achieve their goals.</p>
                </div>
                <div class="stand-btn">
                    <a href="#" class="default-btn home-one-color">Get 15 Days Free Trial</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Stand Warp End -->
@endsection    