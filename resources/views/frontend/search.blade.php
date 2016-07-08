@extends('frontend')

@section('content')
<!-- top news-->
<section id="topnews" class="blockrows bgblock">
    <div class="inner-page">
        <div class="topevent">
            @if ($firstClub = $clubs->shift())
            <div class="slider_area">
                <div class="bxpost"> <img src="{{url('img/cache/577x321', $firstClub->image)}}" class="img">
                    <div class="article-content"><a href="{{url($firstClub->slug)}}">{{$firstClub->name}}</a></div>
                </div>
            </div>
            @endif
            <div class="beside_slider">
                @foreach ($clubs as $club)
                <div class="single-article ">
                    <div class="bxpost"> <img src="{{url('img/cache/282x157', $club->image)}}" class="img">
                        <div class="article-content"><a href="{{url($club->slug)}}">{{$club->name}}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection