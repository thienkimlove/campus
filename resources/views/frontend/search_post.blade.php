@extends('frontend')

@section('content')
<!-- top news-->

<section id="topnews" class="blockrows bgblock">
    <div class="inner-page">
        <div class="topevent">
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


@endsection