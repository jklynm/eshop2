<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sidha Deal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
</head>
<body class="cms-index-index index-opt-1">
<div class="wrapper">
    <!-- HEADER -->
@include('layout.frontend.partials.header')
    <main class="site-main">
        @yield('dynamic_content')

    </main><!-- end MAIN -->
    <!-- FOOTER -->
    @include('layout.frontend.partials.footer')

    <!--back-to-top  -->
    <a href="#" class="back-to-top">  <i aria-hidden="true" class="fa fa-angle-up"></i>  </a>
</div>
<!-- jQuery -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<!-- sticky -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.sticky.js')}}"></script>
<!-- OWL CAROUSEL Slider -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- Boostrap -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Countdown -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<!--jquery Bxslider  -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>
<!-- actual -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.actual.min.js')}}"></script>
<!-- jQuery UI -->
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Chosen jquery-->
<script type="text/javascript" src="{{asset('frontend/js/chosen.jquery.min.js')}}"></script>
<!-- parallax jquery-->
<script type="text/javascript" src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
<!-- elevatezoom -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>
<!-- fancybox -->
<script src="{{asset('frontend/js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>
<!-- arcticmodal -->
<script src="{{asset('frontend/js/arcticmodal/jquery.arcticmodal.js')}}"></script>
<!-- Main -->
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
<script>
    (function($) {
        "use strict";
        $(document).ready(function() {
            /*  [ Filter by price ]
                - - - - - - - - - - - - - - - - - - - - */
            $('#slider-range').slider({
                range: true,
                min: 0,
                max: 500,
                values: [0, 300],
                slide: function (event, ui) {
                    $('#amount-left').text(ui.values[0] );
                    $('#amount-right').text(ui.values[1] );
                }
            });
            $('#amount-left').text($('#slider-range').slider('values', 0));
            $('#amount-right').text($('#slider-range').slider('values', 1));
        });
    })(jQuery);
</script>
<script type="text/javascript">
    $('div.alert').delay(3000).slideUp(300);
</script>
</body>
</html>
