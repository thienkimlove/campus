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
<!-- menu mobile-->
<div class="wsmenucontent overlapblackbg"></div>
<div class="manumain">
    <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
    <a href="{{url('/')}}"><span class="logo"><img src="{{url('frontend/images/logo-demo.png')}}"></span></a></div>
<!-- Top-->
<header id="tophead">
    <div  class="wsmenu slideLeft">
        <div class="inner-page clearfix"> <a class="logo" href="#" target="_blank"><img src="{{url('frontend/images/logo-demo.png')}}"></a>
           <form class="formlogin" role="form" method="POST" action="{{ url('/login') }}">
               {!! csrf_field() !!}
                <p class="note-ac"> <span><img src="{{url('frontend/images/warm.png')}}"></span> </p>
               @if (auth()->check())
                   <span>Xin chào, {{auth()->user()->name }}</span> <span><a href="{{url('logout')}}">Logout</a></span>
               @else
                   <a href="{{url('redirect')}}" class="loginface"><img src="{{url('frontend/images/bt-loginface.png')}}"></a>
               @endif
            </form>
        </div>
    </div>
</header>
<!-- menu right -->
<div class="pennelRight">
    <h2>Tôi muốn</h2>
    <ul class="listtext">
        {{--<li><a href="#">Thành lập một CLB</a></li>
        <li><a href="#">Tham gia một CLB</a></li>--}}
        <li><a href="{{url('chuyen-muc', 'su-kien')}}">Tham gia sự kiện</a></li>
        <li><a href="{{url('chuyen-muc', 'hoc-bong')}}">Tìm học bổng</a></li>
        <li><a href="{{url('chuyen-muc', 'tin-tuc')}}">Đọc tin tức</a></li>
        {{--<li><a href="#">Thành lập một CLB</a></li>--}}
    </ul>
    <a class="btface" href="#">Facebook</a>
</div>
<section class="topbanner">
    <div class="inner-page">
        <h2>Esports for <br>
            Student Campus</h2>
        <div class="bxsearch">
            <a href="#" class="creatclb"><img src="{{url('frontend/images/creat-clb.png')}}"></a>
            <a href="#" class="searchclb"><img src="{{url('frontend/images/search-clb.png')}}"></a>
            <form class="formseach" id="search_form" method="GET" action="{{url('search')}}">
                {!! csrf_field() !!}
                <input name="q" type="text" placeholder="Tìm kiếm" class="inputsearch">
                <input name="submit" id="search_submit" type="button"  class="btsearch">
            </form>
        </div>
    </div>
</section>
<section class="Maincont">
    <div class="inner-page">
        <!-- Menu-->
        <ul class="navbox">
            <li class="{{($page == 'index') ? 'active' : ''}}"><a href="{{url('/')}}">Trang chủ</a></li>
            <li class="{{($page == 'campus') ? 'active' : ''}}"><a href="{{url('campus')}}">Campus</a></li>
            <li class="{{($page == 'su-kien') ? 'active' : ''}}"><a href="{{url('chuyen-muc','su-kien')}}">Sự kiện</a></li>
            <li class="{{($page == 'huong-nghiep') ? 'active' : ''}}"><a href="{{url('chuyen-muc', 'huong-nghiep')}}">Hướng nghiệp</a></li>
        </ul>
    </div>
</section>

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
