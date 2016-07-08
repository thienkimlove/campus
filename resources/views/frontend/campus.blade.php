@extends('frontend')

@section('content')

    <!-- what esc-->
    <section id="campus-block1" class="blockrows bgblock">
        <div class="inner-page">
            <div class="videoWrapper" id="bxvideo">
                <iframe width="560" height="315" src="{{config('constants.VIDEO_URL')}}" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="listcontrol">
                <li>
                    <div class=" contblock bgorang"> <img src="{{url('frontend/images/icon-4.png')}}">
                        <h2>Kết nối</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock"> <img src="{{url('frontend/images/icon-5.png')}}">
                        <h2>chơi</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock"> <img src="{{url('frontend/images/icon-6.png')}}">
                        <h2>dẩn dắt</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
                <li>
                    <div class=" contblock bgorang"> <img src="{{url('frontend/images/icon-7.png')}}">
                        <h2>trưởng thành</h2>
                        <p>Tìm kiếm những người có chung niềm đam mê Esports
                            tại trường học</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Tím kiếm cau lac bộ-->

    <section id="searchclb" class="blockrows">
        <div class="inner-page">
            <h2 class="title">Tìm kiếm câu lạc bộ</h2>
            <p class="discript">Hãy tìm kiếm thông tin về câu lạc bộ trong các trường đại học ở việt nam</p>
            <div class="bxsClb bxcol">
                <div class="bxleft">
                    <div class="accordion ">
                        @foreach ($cities as $city)
                        <div class="accordion-section"> <a class="accordion-section-title" href="#{{str_slug($city->name)}}">{{$city->name}}</a>
                            <div id="{{str_slug($city->name)}}" class="accordion-section-content">
                                <ul class="listunv">
                                    @foreach ($city->universities as $university)
                                    <li><a href="#">{{$university->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--end .accordion-section-content-->
                        </div>
                       @endforeach
                    </div>
                    <div class="rowbt"> <a href="#" class="bt">Đăng ký câu lạc bộ mới</a> </div>
                </div>
                <div class="bxright">
                    <div class="midcont">
                        <h2 class="acticle">{{$rightClub->university->name}}</h2>
                        <p class="discript">CLB: {{$rightClub->name}}</p>
                        <div>
                            <h6><img src="{{url('img/cache/650x226/'. $rightClub->image)}}"></h6>
                            Image : {{$rightClub->image}}
                            <div>{!! $rightClub->desc !!}</div>
                            <div class="rowbt"> <a href="{{url('club', $rightClub->slug)}}" class="bt mb20px">Ghé thăm chúng tôi</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Câu hỏi thường gập-->

    <section id="question" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">Câu hỏi thường gặp<br>
                (FAQ)</h2>
            <div class="bxquest bxcol">
                <div class="panel-group" id="accordion">
                    @foreach ($questions as $key => $question)
                    <div class="panel">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#question{{$key}}">{{$question->question}}</a> </h4>
                        <div id="question{{$key}}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                {{$question->answer}}
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
@endsection