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
            <div class="rowbt"> <a href="#" class="bt mb20px">Tìm ESC trong trường bạn</a>
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
                    <li class="active"><a data-toggle="pill" href="#tab1"><p><img src="{{url('frontend/images/tab1.png')}}"></p> <p class="txt">Khám phá <br>bản thân</p></a></li>
                    <li><a data-toggle="pill" href="#tab2"><p><img src="{{url('frontend/images/tab2.png')}}"></p><p class="txt">Học bổng</p></a></li>
                    <li><a data-toggle="pill" href="#tab3"><p><img src="{{url('frontend/images/tab3.png')}}"></p><p class="txt">Thực tập <br>trong nước</p></a></li>
                    <li><a data-toggle="pill" href="#tab4"><p><img src="{{url('frontend/images/tab4.png')}}"></p><p class="txt">Thực tập <br> nước ngoài</p></a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane fade in active">
                        <h3>Khám phá bản thân</h3>
                        <p>Esports là một lĩnh vực vô cùng rộng lớn với rất nhiều ngành nghề phong phú & đa dạng, từ những nghề liên quan trực tiếp tới Esports như tuyển thủ chuyên nghiệp, huấn luyện viên, quản lí đội tuyển Esports... hay những ngành nghề liên quan như truyền thông, marketing, kĩ thuật viên live-stream...<br><br>

                            Hãy cùng khám phá hệ thống ngành nghề Esports mà chúng tôi đã dày công xây dựng nên, tham khảo những case-study thú vị và khám phá tiềm năng của chính bản thân mình nhé!</p>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', 'kham-pha-ban-than')}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
                    </div>
                    <div id="tab2" class="tab-pane fade">
                        <h3>Học bổng</h3>
                        <p>Esports là một lĩnh vực vô cùng rộng lớn với rất nhiều ngành nghề phong phú & đa dạng, từ những nghề liên quan trực tiếp tới Esports như tuyển thủ chuyên nghiệp, huấn luyện viên, quản lí đội tuyển Esports... hay những ngành nghề liên quan như truyền thông, marketing, kĩ thuật viên live-stream...<br><br>

                            Hãy cùng khám phá hệ thống ngành nghề Esports mà chúng tôi đã dày công xây dựng nên, tham khảo những case-study thú vị và khám phá tiềm năng của chính bản thân mình nhé!</p>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', 'hoc-bong')}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
                    </div>
                    <div id="tab3" class="tab-pane fade">
                        <h3>Thực tập trong nước</h3>
                        <p>Esports là một lĩnh vực vô cùng rộng lớn với rất nhiều ngành nghề phong phú & đa dạng, từ những nghề liên quan trực tiếp tới Esports như tuyển thủ chuyên nghiệp, huấn luyện viên, quản lí đội tuyển Esports... hay những ngành nghề liên quan như truyền thông, marketing, kĩ thuật viên live-stream...<br><br>

                            Hãy cùng khám phá hệ thống ngành nghề Esports mà chúng tôi đã dày công xây dựng nên, tham khảo những case-study thú vị và khám phá tiềm năng của chính bản thân mình nhé!</p>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', 'thuc-tap-trong-nuoc')}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
                    </div>
                    <div id="tab4" class="tab-pane fade">
                        <h3>Thực tập ngoài nước</h3>
                        <p>Esports là một lĩnh vực vô cùng rộng lớn với rất nhiều ngành nghề phong phú & đa dạng, từ những nghề liên quan trực tiếp tới Esports như tuyển thủ chuyên nghiệp, huấn luyện viên, quản lí đội tuyển Esports... hay những ngành nghề liên quan như truyền thông, marketing, kĩ thuật viên live-stream...<br><br>

                            Hãy cùng khám phá hệ thống ngành nghề Esports mà chúng tôi đã dày công xây dựng nên, tham khảo những case-study thú vị và khám phá tiềm năng của chính bản thân mình nhé!</p>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', 'thuc-tap-ngoai-nuoc')}}" class="bt mb20px">Tìm hiểu thêm</a> </div>
                    </div>
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