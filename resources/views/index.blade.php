@extends('layouts.layout')

@section('content')
        <!-- Hero Style5 Warp Start -->
        <div class="hero-style5-warp  grainy-texture">

            <div class="absolute">
                <div class="absolute inset-0 justify-center">
                    <div class="bg-shape1 bg-teal opacity-50 bg-blur"></div>
                    <div class="bg-shape2 bg-primary opacity-50 bg-blur"></div>
                    <div class="bg-shape3 bg-purple opacity-50 bg-blur"></div>
                </div>
            </div>
            <div class="cursor" id="cursor"></div>
            <div class="container-fluid style4">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="hero-style5-content">
                            {{-- <span class="title">Simplify Your Financial</span> --}}
                            <h1>{!!@$getrecord[0]->main_text!!}</h1>
                            <p style="font-size: 1.3rem">{{@$getrecord[0]->sub_text}}</p>
                                {{-- <div class="hero-btn d-flex align-items-center ">
                                    <a href="#" class="default-btn home-five-main">Start A 15-Day Free Trial</a>
                                    <div class="video-btn d-flex align-items-center" onclick="openPopup()">
                                        <div class="icon rounded-circle">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                        <p>Watch Video</p>
                                    </div>
                                </div> --}}                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="hero-style5-image"  data-tilt data-tilt-glare="true" data-tilt-scale="1.1">                            
                                <img src="{{url('public/assets/images/'.@$getrecord[0]->image)}}" class="hero5 " alt="hero">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Style5 Warp End -->   
        
        <!-- Slide Text Warp Start-->
        <div class="slide-text-warp">
            <div class="">
                <div class="">
                    <h1>
                        <span>
                            <h4 style="color: #fff; text-transform:uppercase; text-align: center;
                            font-size: 1.6rem;" class="slider-text1">You can also Transfer funds to bank and mobile money accounts in over 10 african countries.</h4>
                        </span>
                        

                        {{-- <span>
                            <img src="{{url('public/assets/images/shapes/slideinTex2.png')}}" class="slider-text1" alt="slider-text">
                        </span>
                        <span>
                            <img src="{{url('public/assets/images/shapes/slideinTex2.png')}}" class="slider-text1" alt="slider-text">
                        </span>
                        <span>
                            <img src="{{url('public/assets/images/shapes/slideinTex2.png')}}" class="slider-text1" alt="slider-text">
                        </span>
                        <span>
                            <img src="{{url('public/assets/images/shapes/slideinTex2.png')}}" class="slider-text1" alt="slider-text">
                        </span> --}}
                        
                        
                    </h1>
                </div>
            </div>
        </div>
        <!-- Slide Text Warp End -->


          <!-- Boost Slider Warp  Start -->
        {{-- <div class="boost-slider-warp">
            <!-- Boost Warp Start -->
        <div class="boost-warp-start pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <h1>How it works?</h1>
                    <p></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style1">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <img src="{{url('public/assets/images/signup.jpg')}}" class="secure1" alt="secure">
                                    </div>
                                </div>
                                <h3>
                                    {{@$getrecord[0]->step1_title}}
                                </h3>
                            </div>
                            <p>{{@$getrecord[0]->step1_desc}}</p>                               
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style2">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <img src="{{url('public/assets/images/walet.jpg')}}" class="secure1" alt=" fund your Wallet">
                                    </div>
                                </div>
                                <h3>
                                    {{@$getrecord[0]->step2_title}}
                                </h3>
                            </div>
                            <p>{{@$getrecord[0]->step2_desc}}</p>                               
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <div class="boost-card style3">
                            <div class="icon-content d-flex align-items-center">
                                <div class="icon">
                                    <div class="rounded-icon">
                                        <img src="{{url('public/assets/images/moneywal.jpg')}}" class="secure1" alt="Money arrives in Minute">
                                    </div>
                                </div>
                                <h3>
                                    {{@$getrecord[0]->step3_title}}
                                </h3>
                            </div>
                            <p>{{@$getrecord[0]->step3_desc}}</p>                               
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{url('public/assets/images/shapes/boost-shape1.png')}}" class="boost-shape1" alt="boost-shape">
            <img src="{{url('public/assets/images/shapes/boost-shape2.png')}}" class="boost-shape2" alt="boost-shape">
        </div>
        <!-- Boost Warp End -->        
        </div> --}}
        <!-- Boost Slider Warp  End -->    

         <!-- Support Warp Start -->
         <div class="support-warp">
            <div class="">               
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="support-image" data-cues="slideInLeft">
                            <img src="{{url('public/assets/images/crossbo.jpg')}}" class="support1" alt="support" 
                            margin-right: 28%;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-5">
                        <div class="support-content">
                            <ul class="support-list">
                                <li>
                                    <div class="icon">
                                        <img src="{{url('public/assets/images/biometric-authentication.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 style="font-family:inter;">Biometric authentication</h3>
                                        <p>
                                            You can use your facial ID as your 2 Factor Authentication. This is to further protect your account from unauthorized intrusion.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="{{url('public/assets/images/kyc.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 style="font-family:inter;">Complete KYC</h3>
                                        <p>
                                            Identity verification using your government-issued IDs such as a driver's license, International passport, or national ID card.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon ">
                                        <img src="{{url('public/assets/images/authentication.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 style="font-family:inter;">2 Factor Authentication</h3>
                                        <p>In addition to your username and password, you're required to create a 2FA for a second layer of account security.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon ">
                                        <img src="{{url('public/assets/images/security.svg')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h3 style="font-family:inter;">Advanced security</h3>
                                        <p>With Multi-Factor Authentication and Biometric login, your online and in-store purchases are safe and secure.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Warp End -->

         <!-- Live Chat Warp Start -->
         <div class="live-chat-warp pb-75 pt-100">
            <div class="container">
                <div class="section-title">
                    <h1 class="text-white">How it works?</h1>
                    
                </div>
                <div class="inner-live-chat">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                            <div class="chat-icon">
                                <img src="{{url('public/assets/images/sign-up.svg')}}" alt="">
                                <img src="{{url('public/assets/images/shapes/chat-shape1.png')}}" class="secure1" alt="secure">
                            </div>
                            <div class="chat-card">
                                <span>STEP 1</span>
                                <h3>{{@$getrecord[0]->step1_title}}</h3>
                                <p>{{@$getrecord[0]->step1_desc}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                            <div class="chat-icon">
                                <img src="{{url('public/assets/images/wallet.svg')}}" alt="">
                                <img src="{{url('public/assets/images/shapes/chat-shape1.png')}}" class="secure1" alt=" fund your Wallet">
                            </div>
                            <div class="chat-card">
                                <span>STEP 2</span>
                                <h3>{{@$getrecord[0]->step2_title}}</h3>
                                <p>{{@$getrecord[0]->step2_desc}}</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6" data-cue="slideInUp">
                            <div class="chat-icon">
                                <img src="{{url('public/assets/images/recieve-money.svg')}}" alt="">
                                <img src="{{url('public/assets/images/shapes/chat-shape1.png')}}" class="secure1" alt="Money arrives in Minute">
                            </div>
                            <div class="chat-card">
                                <span>STEP 3</span>
                                <h3>{{@$getrecord[0]->step3_title}}</h3>
                                <p>{{@$getrecord[0]->step3_desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{url('public/assets/images/shapes/most-shape1.png')}}" class="most-shape1" alt="live-shape">
            <img src="{{url('public/assets/images/shapes/live-shape2.png')}}" class="live-shape2" alt="live-shape">
        </div>
        <!-- Live Chat Warp End -->
       

        

         <!-- Vision Warp Start -->
         {{-- <div class="vision-warp ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="vision-content single-section">
                            <h2>Our digital bank app</h2> 
                            <p>Our digital banking app is currently under development. Join our waitlist and we will notify you when the development is completed and the app is ready for download.</p>

                            <div>
                                <a href="#" class="default-btn home-five-main">Join Our Waiting List</a>
                            </div>                                                    
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vision-image" data-cue="slideInUp">
                            <img src="{{url('public/assets/images/solutions/vision1.png')}}" class="vision1" alt="vision">
                            <img src="{{url('public/assets/images/shapes/vision-shape1.png')}}" class="vision-shape1" alt="vision-shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision Warp End --> --}}

        <!-- Profile Warp Start -->
        <div class="profile-warp vision-warp pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="profile-content single-section">
                            <h2>Our digital bank app</h2> 
                            <p>Our digital banking app is currently under development. Join our waitlist and we will notify you when the development is completed and the app is ready for download.</p>
                            <br>
                            <div>
                                <a href="#" class="default-btn home-five-main">Join Our Waiting List</a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vision-image" data-cue="slideInUp">
                            <img src="{{url('public/assets/images/mobil-app-imag.png')}}" class="vision1" alt="vision">
                            <img src="{{url('public/assets/images/shapes/vision-shape1.png')}}" class="vision-shape1" alt="vision-shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Warp End -->

       <!-- Support Warp Start -->
       <div class="support-warp pb-100">
        <div class="container">
            <div class="section-title">
                <h2 class="pb-5">KRILLPAY IN THE NEWS</h2> 
                <P></P>             
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="support-image" data-cues="slideInLeft">
                        <img src="{{url('public/assets/images/blockc.jpg')}}" class="support1" alt="Revolution">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="support-content">
                        <ul class="support-list">
                            <li>
                                <div class="icon">
                                    <img src="{{url('public/assets/images/noun-blockchain.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h6>SHAPING THE FUTURE OF CROSS-BORDER TRANSACTIONS: THE BLOCKCHAIN REVOLUTION?</h6>                                   
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{url('public/assets/images/blockchain-technology.svg')}}" alt="">                                    
                                </div>
                                <div class="content">
                                    <h6>Leveraging Blockchain Technology</h6>
                                    <p>KrillPay leverages blockchain technology to create a mobile payment app for instantaneous, peer-to-peer international money transfers.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{url('public/assets/images/expenses.svg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h6>Tackling expensive remittances</h6>
                                    <p>By tackling the issue of expensive and inefficient remittances in the Sub-Saharan African region, it aims to meet the needs of the unbanked population.</p>
                                </div>
                            </li>              
                            <li>
                                <div class="store-btn d-flex align-items-center">
                                    <a href="https://finmag.co.uk/shaping-the-future-of-cross-border-transactions-the-blockchain-revolution/" target="_blank" class="default-btn home-two-main">Read More</a>
                                </div>   
                            </li>           
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Warp End -->

       
        


        @endsection