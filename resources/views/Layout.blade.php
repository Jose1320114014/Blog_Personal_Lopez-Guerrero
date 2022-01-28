<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Training Studio - Free CSS Template</title>
    <!--

    -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <link rel="stylesheet" href="/css/templatemo-training-studio.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky"style="background: #1b1e21">
    <div class="container"style="background: #1b1e21">
        <div class="row"style="background: #1b1e21">
            <div class="col-12"style="background: #1b1e21">
                <nav class="main-nav" style="background-color: #1b1e21">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route('index')}}" class="logo" style="background-color: #1b1e21">ムYharon<em>Smokeム</em> </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav" style="background: #1b1e21">
                        <li class="scroll-to-section"><a href="{{route('index')}}" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href="{{route('sobre_mi')}}">¿Sobre mi?</a></li>
                        <li class="scroll-to-section"><a href="{{route('blog')}}">Blog</a></li>
                        <li class="scroll-to-section"><a href="{{route('Mis_Hobbies')}}">¿Cuales son mis hobbies?</a></li>
                        <li class="scroll-to-section"><a href="{{route('Redes_Sociales')}}">Redes Sociales</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
   @yield('video-bckg')
</div>
<!-- ***** Main Banner Area End ***** -->

@yield('about')
<!-- ***** Features Item End ***** -->


<!-- ***** Our Classes Start ***** -->
@yield('blog-info')
<!-- ***** Our Classes End ***** -->

@yield('Mis_Hobbies')

<!-- ***** Testimonials Starts ***** -->
@yield('Mis_Redes')
<!-- ***** Testimonials Ends ***** -->


<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p> plantilla modificada por Mr. conocido mejor como Yharonsmoke
                plantilla creada por templatemo
                </p>

                <!-- You shall support us a little via PayPal to info@templatemo.com -->

            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="js/scrollreveal.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imgfix.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/accordions.js"></script>

<!-- Global Init -->
<script src="js/custom.js"></script>

</body>
</html>
