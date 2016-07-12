@extends('frontend')

@section('content')
<!-- top news-->

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
                <div class="rowbt"> <a href="#" class="bt">Đăng ký câu lạc bộ mới</a> </div>
            </div>
            <div class="bxright">
                @foreach ($posts  as $post)
                    <div class="midcont">
                        <h2 class="acticle">{{$post->title}}</h2>
                        <div>
                            <h6><img src="{{url('img/cache/650x226', $post->image)}}"></h6>
                            <div>{!! $post->desc !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection