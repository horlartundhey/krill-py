 <!-- Start Navbar Area -->
 <nav class="navbar navbar-expand-lg top-navbar style5" id="navbar">
    <div class="container-fluid style4">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('public/assets/images/krillpay-logo.png')}}" class="navbar-logo"  alt="logo">
        </a>
        <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
            <span class="burger-menu">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </span>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto style2">

                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link active">
                        Home
                    </a>                           
                </li>

                <li class="nav-item">
                    <a href="{{url('about')}}" class="nav-link">
                      About
                    </a>                           
                </li>

                <li class="nav-item ">
                    <a href="https://support.krillpay.com/support/home" target="_blank" class="nav-link">
                        Support
                    </a>                          
                </li>                        
                                       
                <li class="nav-item">
                    <a href="{{url('contact')}}" class="nav-link ">Contact 
                        <span>Us</span> </a>
                </li>
            </ul>

            <div class="others-option d-flex align-items-center">
                <div class="option-item">
                    <a href="#" class="default-btn heading-color">Join Mailling list</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->

<!-- Start Mobile Device Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
<div class="offcanvas-header">
    <a href="index.html" class="logo d-inline-block">
        <img src="{{url('public/assets/images/krillpay-logo.png')}}" alt="logo">
    </a>
    <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="ri-close-line"></i>
    </button>
</div>
<div class="offcanvas-body">
    <div class="accordion" id="navbarAccordion">
        <div class="accordion-item">
            <a href="{{url('/')}}" class="nav-link active">
                Home
            </a>                     
        </div>
        <div class="accordion-item">
            <a href="{{url('about')}}" class="nav-link">
                About
              </a>                     
        </div>

        <div class="accordion-item">
            <a href="{{url('faq')}}" class="nav-link">
                FAQ
            </a>                      
        </div>

        <div class="accordion-item">
            <a href="{{url('contact')}}" class="nav-link ">Contact 
                <span>Us</span> 
            </a>                   
        </div>
        
    </div>
    <div class="others-option d-flex align-items-center">
        <div class="option-item">
            <a href="contact.html" class="default-btn home-one-main">Join Mailling list</a>
        </div>
    </div>
</div>
</div>
<!-- End Mobile Device Navbar Area -->