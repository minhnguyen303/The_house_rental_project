<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'Real Estate')</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate.css')}}" rel="stylesheet">
    <link href="{{asset('lib/selectric/selectric.css')}}" rel="stylesheet">
    <link href="{{asset('lib/swiper/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('lib/Magnific-Popup/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('lib/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('lib/photoswipe/default-skin/default-skin.css')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('datepicker/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('datepicker/css/datepicker.css') }}" rel="stylesheet" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('lib/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('lib/popper.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/selectric/jquery.selectric.js')}}"></script>
    <script src="{{asset('lib/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('lib/swiper/js/swiper.js')}}"></script>
    <script src="{{asset('lib/aos/aos.js')}}"></script>
    <script src="{{asset('lib/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('lib/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('lib/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('lib/sticky-sidebar/ResizeSensor.min.js')}}"></script>
    <script src="{{asset('lib/sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('lib/sidr/jquery.sidr.min.js')}}"></script>
    <script src="{{asset('lib/lib.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Wizard -->
    <script src="{{ asset('assets/js/gsdk-bootstrap-wizard.js') }}"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="{{ asset('js/extention/choices.js') }}"></script>
    <script src="{{ asset('js/extention/flatpickr.js') }}"></script>
    <script>
        flatpickr(".datepicker",
            {});

    </script>
    <script>
        const choices = new Choices('[data-trigger]',
            {
                searchEnabled: false,
                itemSelectText: '',
            });

    </script>
    <script src="{{ asset('datepicker/js/jquery.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.js') }}"></script>
    <![endif]-->
    <style id="theia-sticky-sidebar-stylesheet-TSS">.theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }</style>

</head>

@yield('body')

</html>
