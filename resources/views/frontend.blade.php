<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus</title>
    <link rel="icon" href="{{url('frontend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- css main -->
    <link rel="stylesheet" href="{{url('frontend/css/menu-mobile.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/monthly.css')}}">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId={{env('FACEBOOK_APP_ID')}}";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- topnav-->
@if ($page == 'index')
   @include('frontend.index_top')
@else
   @include('frontend.normal_top')
@endif

@yield('content')

<!-- footer -->
<footer class="bgblock">
    <div class="inner-page clearfix">
        <p>Esports for Student Campus (ESC) là một mạng lưới các câu lạc bộ dành cho các sinh viên đam mê với thể thao điện tử tại Việt Nam. <br>
            © Copyright 2015 Garena Online</p>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('frontend/js/jquery.1.11.3.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/js/mobile-menu.js')}}"></script>
<script src="{{url('frontend/js/accordion.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/monthly.js')}}"></script>
<script type="text/javascript">
    $(window).load( function() {
        $('#mycalendar').monthly({
            mode: 'event',
            xmlUrl: '{{url('xml')}}'
        });

        $('#search_submit').click(function(){
            $('#search_form').submit();
        });
    });
</script>
</body>
</html>
