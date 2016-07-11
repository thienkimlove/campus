<!-- menu mobile-->
<div class="wsmenucontent overlapblackbg"></div>
<div class="manumain"><a id="navToggle" class="animated-arrow slideLeft"><span></span></a> <a href="{{url('/')}}"><span class="logo"><img src="{{url('frontend/images/logo-demo.png')}}"></span></a></div>
<!-- Top-->
<header id="tophead">
    <div  class="wsmenu slideLeft">
        <div class="inner-page clearfix"> <a class="logo" href="{{url('/')}}" target="_blank"><img src="{{url('frontend/images/logo-demo.png')}}"></a>
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
        <div class="bxsearch">

            <a href="#" class="creatclb">
                <img src="{{url('frontend/images/creat-clb.png')}}">
            </a>

            <a href="{{url('search')}}" class="searchclb">
                <img src="{{url('frontend/images/search-clb.png')}}">
            </a>

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