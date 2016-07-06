@extends('frontend')

@section('content')
    <!-- chance student-->
    <section id="chStudent" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">Cơ hội cho sinh viên</h2>
            <ul class="listchance">
                <li>
                    <div class="conttext"> <img src="{{url('frontend/images/tab2.png')}}">
                        <h2>Học bổng</h2>
                        <p>Tìm hiểu các cơ hội nhận học bổng dành cho sinh viên ưu tú tại các CLB</p>
                    </div>
                    <div class="rowbt"> <a href="{{url('chuyen-muc', 'hoc-bong')}}" class="bt mb20px">Xem ngay</a></div>
                </li>
                <li>
                    <div class="conttext"> <img src="{{url('frontend/images/tab3.png')}}">
                        <h2>Thưc tập <br>
                            trong nước</h2>
                        <p>Tìm hiểu các cơ hội nhận học bổng dành cho sinh viên ưu tú tại các CLB</p>
                    </div>
                    <div class="rowbt"> <a href="{{url('chuyen-muc', 'thuc-tap-trong-nuoc')}}" class="bt mb20px">Xem ngay</a></div>
                </li>
                <li>
                    <div class="conttext"> <img src="{{url('frontend/images/tab4.png')}}">
                        <h2>Thực tập <br>
                            ngoài nước</h2>
                        <p>Tìm hiểu các cơ hội nhận học bổng dành cho sinh viên ưu tú tại các CLB</p>
                    </div>
                    <div class="rowbt"> <a href="{{url('chuyen-muc', 'thuc-tap-ngoai-nuoc')}}" class="bt mb20px">Xem ngay</a></div>
                </li>
            </ul>
        </div>
    </section>
    <!-- chance student-->
    <section id="discover" class="blockrows ">
        <div class="inner-page">
            <h2 class="title">Khám phá bản thân</h2>
            <p class="discript">Hãy tìm hiểu các ngành nghề trong lĩnh vực Esports
                và thử xem mình có thích hợp hay không nhé!</p>
            <div class="discontent">
                <div class="boxline">
                    <div class="firtTitle"> <span> <img src="{{url('frontend/images/icon-playgame.png')}}">
          <h2>Thể thao điển tử chuyên nghiệp</h2>
          </span> </div>
                    <ul class="listjobs">
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>TUYỂN THỦ ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-2.png')}}">
                            <h2>Huấn luận viên <br> ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-3.png')}}">
                            <h2>Quản lý đổi tuyển </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>HLV ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                    </ul>
                </div>
                <div class="boxline">
                    <div class="firtTitle"> <span> <img src="{{url('frontend/images/icon-lags.png')}}">
          <h2>Thể thao điển tử chuyên nghiệp</h2>
          </span> </div>
                    <ul class="listjobs">
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>TUYỂN THỦ ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-2.png')}}">
                            <h2>Huấn luận viên <br> ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-3.png')}}">
                            <h2>Quản lý đổi tuyển </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>HLV ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                    </ul>
                </div>
                <div class="boxline">
                    <div class="firtTitle"> <span> <img src="{{url('frontend/images/icon-playgame.png')}}">
          <h2>Thể thao điển tử chuyên nghiệp</h2>
          </span> </div>
                    <ul class="listjobs">
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>TUYỂN THỦ ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-2.png')}}">
                            <h2>Huấn luận viên <br> ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-3.png')}}">
                            <h2>Quản lý đổi tuyển </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                        <li> <img src="{{url('frontend/images/icon-voice.png')}}">
                            <h2>HLV ESPoRTS </h2>
                            <p>Tuyển thủ chuyên nghiệp là những người cống hiến toàn bộ thời gian và sức lực cho thi đấu Esports ...</p>
                        </li>
                    </ul>
                </div>
                <div class="rowbt"> <a href="#" class="bt mb20px">Trắc nghiệm xem bạn<br>
                        Phù hợp với ngành nghề nào!</a></div>
            </div>
        </div>
    </section>
@endsection
