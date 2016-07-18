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
                                        <li><a href="{{url('search?uni='.$university->slug)}}">{{$university->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--end .accordion-section-content-->
                        </div>
                    @endforeach
                </div>
                <div class="rowbt"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSf0V8xitynwanFGL3BWbwOpezwOn6lvEr7mr0o0EJQ2RQF27w/viewform" class="bt">Đăng ký câu lạc bộ mới</a> </div>
            </div>
            <div class="bxright">
                @foreach ($rightClubs  as $rightClub)
                    <div class="midcont">
                        <h2 class="acticle">{{ isset($rightClub->university_name)  ? $rightClub->university_name : $rightClub->university->name }}</h2>
                        <p class="discript">CLB: {{$rightClub->name}}</p>
                        <div>
                            <h6><img src="{{url('img/cache/650x226', $rightClub->image)}}"></h6>
                            <div>{!! $rightClub->desc !!}</div>
                            {{--<div class="rowbt"> <a href="{{url('club', $rightClub->slug)}}" class="bt mb20px">Ghé thăm chúng tôi</a> </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>