<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Melkin, Booking and Reservation form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>Melkin | The booking form Wizard</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('form/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('form/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('form/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('form/css/vendors.css')}}" rel="stylesheet">
    <link href="{{asset('form/css/custom.css')}}" rel="stylesheet">
    <script src="{{asset('form/js/modernizr.js')}}"></script>

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<nav>
    <ul class="cd-primary-nav">
        <li><a href="/" class="animated_link">Home</a></li>
        <li><a href="about" class="animated_link">View Rooms</a></li>
        <li><a href="contact" class="animated_link">Contact Us</a></li>
{{--        <li><a href="index-2.html" class="animated_link">Restaurant Version</a></li>--}}
{{--        <li><a href="index-3.html" class="animated_link">Spa Version</a></li>--}}
    </ul>
</nav>
<!-- /menu -->

<div class="container-fluid full-height">
    <div class="row row-height">
        <div class="col-lg-6 content-left">
            <div class="content-left-wrapper bg_hotel">
                <div class="wrapper">
                    <a href="index" id="logo"><img src="img/logo.svg" alt="" width="45" height="40"></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="social_facebook"></i></a></li>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="#0"><i class="social_instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div class="left_title">
                        <h3>Discover a Beatiful Contest</h3>
                        <p>Bus Starting from 70$ per Ride</p>
                    </div>
                </div>
            </div>
            <!--/content-left-wrapper -->
        </div>
        <!-- /content-left -->

        <div class="col-lg-6 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <x-jet-validation-errors class="mb-4" />
                <form id="wrapped" method="POST" action="/book">
                    @csrf

                    <div id="middle-wizard">
                        <div class="step">
                            <h3 class="main_question"><strong>1/3</strong>Enter your Booking details</h3>
                            <div class="form-group">
                                <input type="date" name="departure_date" class="form-control required" placeholder="Departure Date">
                                <i class="icon-hotel-calendar_3"></i>
                            </div>
                            <div class="form-group">
                                <div class="styled-select clearfix">
                                    <select class="required ddslick" name="bus_type">
                                        <option value="" data-imagesrc="img/icons_select/add_bed.svg">Select Bus type</option>
                                        <option value="Classic single" data-imagesrc="img/icons_select/single_bed.svg">Hiace</option>
                                        <option value="Luxury single" data-imagesrc="img/icons_select/single_bed_lux.svg">Lexus</option>
                                        <option value="Classic Double" data-imagesrc="img/icons_select/double_bed.svg">Sienna</option>
                                        <option value="Luxury Double" data-imagesrc="img/icons_select/double_bed_lux.svg">Luxury car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row no-gutters pb-1">
                                <div class="col-6 pr-2">
                                    <div class="form-group">
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="adults">
                                            <input type="text" name="adults" id="adults" value="" class="qty form-control required" placeholder="Adults">
                                            <input type="button" value="-" class="qtyminus" name="adults">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pl-2">
                                    <div class="form-group">
                                        <div class="qty-buttons">
                                            <input type="button" value="+" class="qtyplus" name="child">
                                            <input type="text" name="child" id="child" value="" class="qty form-control" placeholder="Child">
                                            <input type="button" value="-" class="qtyminus" name="child">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control notes" placeholder="Special notes" value="{{ session()->get('book.terminal') }}"></textarea>
                            </div>
                        </div>
                        <!-- /step-->

                    </div>
                    <!-- /middle-wizard -->
                    <div id="">
                        <button type="button" name="backward" class="backward">Prev</button>
                        <button type="button" name="forward" class="forward">Next</button>
                        <button type="submit" name="process" class="submit">continue</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->

            <div class="footer">
                <ul>
                    <li><a href="about" class="animated_link">About</a></li>
                    <li><a href="contact" class="animated_link">Contact Us</a></li>
                </ul>
                <em>© 2019 Nariels</em>
            </div>
            <!-- Footer -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->

<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
<!-- /menu button -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('form/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('form/js/common_scripts.min.js')}}"></script>
<script src="{{asset('form/js/velocity.min.js')}}"></script>
<script src="{{asset('form/js/functions.js')}}"></script>
<!-- Wizardscript -->
{{--<script src="{{asset('form/js/booking_hotel_func.js')}}"></script>--}}
<script>
    $(function() {
        'use strict';
        $('input[name="dates"]').daterangepicker({
            autoUpdateInput: false,
            "opens": "left",
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
        });
        $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>

</body>
</html>
