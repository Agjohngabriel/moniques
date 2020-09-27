<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tag Keywords -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
            <script type="application/x-javascript">
                addEventListener("load", function () {
                    setTimeout(hideURLbar, 0);
                }, false);

                function hideURLbar() {
                    window.scrollTo(0, 1);
                }
            </script>
            <!--// Meta tag Keywords -->

            <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css" media="all">
            <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" type="text/css" media="all">
            <!-- css files -->
            <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
            <link rel="stylesheet" href="{{asset('css/app.css')}}"> <!-- Bootstrap-Core-CSS -->
            <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
            <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}"> <!-- Font-Awesome-Icons-CSS -->
            <!-- //css files -->

            <!-- web-fonts -->
            <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //web-fonts -->
        <title>{{ config('app.name', 'Moniques Motors') }}</title>

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <!-- js -->
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    
    <!-- carousel -->
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->

    <!--slider-->
    <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {
            // Slideshow 1
            $("#slider1").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "centered-btns"
            });
        });
    </script>
    <!--//slider-->

    <!-- start-smoth-scrolling -->
    <script src="{{asset('js/SmoothScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    </body>
</html>
