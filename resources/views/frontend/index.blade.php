@extends('frontend')

@section('content')

    <!-- what esc-->
    <section id="whatesc" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">ESC là gì ?</h2>
            <p class="discript">Chúng tôi là một nền tảng cộng đồng dành cho những người trẻ  đam mê Thể Thao Điện Tử ở Việt Nam!</p>
            <div class="videoWrapper" id="bxvideo">
                <iframe width="560" height="315" src="{{config('constants.VIDEO_URL')}}" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="rowbt"> <a href="{{url('search')}}" class="bt mb20px">Tìm ESC trong trường bạn</a>
                <p>Bạn có thắc mắc? <a href="{{url('faq')}}">Đọc ngay FAQ</a></p>
            </div>
        </div>
    </section>

    <!-- event-->
    <section id="event" class="blockrows">
        <div class="inner-page">
            <h2 class="title">Sự kiện</h2>
            <div class="monthly" id="mycalendar"></div>
            <div class="rowbt"> <a href="{{url('chuyen-muc','su-kien')}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
        </div>
    </section>


    <!-- career-->
    <section id="career" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">Hướng nghiệp</h2>
            <div class="cartabs">
                <ul class="nav nav-pills">
                    @foreach ($orientationCategory->subCategories as $k => $oSub)
                    <li class="{{($k == 0) ? 'active' : ''}}">
                        <a data-toggle="pill" href="#tab{{$k + 1}}"><p><img src="{{url('img/cache/112x114', $oSub->image)}}"></p> <p class="txt">{{$oSub->name}}</p></a></li>
                    @endforeach

                </ul>
                <div class="tab-content">
                    @foreach ($orientationCategory->subCategories as $k => $oSub)
                    <div id="tab{{$k + 1}}" class="{{ ($k == 0) ? 'tab-pane fade in active' : 'tab-pane fade' }}">
                        <h3>{{$oSub->name}}</h3>
                        <p>{{$oSub->desc}}</p>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', $oSub->slug)}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- client-->
    <section id="client" class="blockrows">
        <div class="inner-page">
            <h2 class="title">Đối tác</h2>
            <ul class="clientList">
                @foreach ($clients as $client)
                    <li><img src="{{url('img/cache/150x90', $client->image)}}"></li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection