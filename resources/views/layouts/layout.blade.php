<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Links Of CSS File -->
        <link rel="stylesheet" href="{{url('public/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/fonts/flaticon_mycollection.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/scrollCue.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{url('public/assets/css/responsive.css')}}">
        
        <!-- Title -->
        <title>Krillpay</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('public/assets/images/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('public/assets/images/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('public/assets/images/favicon-16x16.png')}}">                
    </head>
    <body>        
       
        @include('layouts.nav')

        @yield('content');

        @include('layouts.footer')


        


<!-- Video Popup Warp Start -->
<div class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <div class="modal-body">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WLz7cp5t6Og?si=kRcI3l_Kgqbh4xyz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Video Popup Warp End -->


<!-- Scroll Top Btn -->
<div class="top-button-icon">
    <button id="scrollTopBtn">
        <i class="ri-arrow-up-circle-fill"></i>
    </button>
</div>
<!-- Scroll Top Btn -->


<!-- Links of JS File -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script>
    VanillaTilt.init(document.querySelector(".hero-style5-image"), {
    glare: false, // Disable glare effect
    maxGlare: 0, // Set glare opacity to 0
    scale: 1.1 // Tilt scale
});
</script>
<!-- https://github.com/gijsroge/tilt.js -->
<script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>


<script src="{{url('public/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{url('public/assets/js/scrollCue.min.js')}}"></script>
<script src="{{url('public/assets/js/custom.js')}}"></script>
</body>
</html>