@extends('frontend')

@section('content')
<!-- top news-->
<section id="topnews" class="blockrows bgblock">
    <div class="inner-page">
        <div class="topevent">
            @if ($firstPost = $posts->shift())
            <div class="slider_area">
                <div class="bxpost"> <img src="{{url('img/cache/577x321', $firstPost->image)}}" class="img">
                    <div class="article-content"><a href="{{url($firstPost->slug.'.html')}}">{{$firstPost->title}}</a></div>
                </div>
            </div>
            @endif
            <div class="beside_slider">
                @foreach ($posts as $post)
                <div class="single-article ">
                    <div class="bxpost"> <img src="{{url('img/cache/282x157', $post->image)}}" class="img">
                        <div class="article-content"><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- event-->
<section id="event" class="blockrows">
    <div class="inner-page">
        <h2 class="title">Sự kiện</h2>
        <div class="monthly" id="mycalendar"></div>
        <div class="rowbt"> <a href="#" class="bt mb20px">Tìm hiểu thêm</a> </div>
    </div>
</section>

<!-- career-->
<section id="mainevent" class="blockrows bgblock">
    <div class="inner-page">
        <h2 class="title">Tiêu điểm sự kiện</h2>
        <div class="bxevent bxcol">
            <div class="bxleft">
                <ul class="tabnews nav nav-tabs">
                    @foreach ($newsCategories->subCategories as $k => $newsCategory)
                     <li class="{{($k == 0)? 'active' : ''}}"><a class="newslasted"  data-toggle="tab" href="#tab{{$k}}">{{$newsCategory->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="bxright">
                <div class="tab-content">
                    @foreach ($newsCategories->subCategories as $k => $newsCategory)
                    <div id="tab{{$k}}" class="{{($k == 0)? 'tab-pane fade in active' : 'tab-pane fade'}}">
                        <ul class="listPost">
                            @foreach ($newsCategory->indexPosts() as $post)
                            <li>
                                <figure class="postImg"><a href="{{url($post->slug.'.html')}}" title="{{$post->title}}"><img src="{{url('img/cache/243x135', $post->image)}}" ></a></figure>
                                <div class="contPost"> <a class="postTitle" href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{$post->title}}</a>
                                    <div class="entryPost">By {{($post->author())}} | {{$post->updated_at->toDayDateTimeString()}}</div>
                                    <div class="postSubcript">{{$post->desc}}</div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="rowbt"> <a href="{{url('chuyen-muc', $newsCategory->slug)}}" class="bt mb20px">Xem thêm</a> </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client-->
@endsection