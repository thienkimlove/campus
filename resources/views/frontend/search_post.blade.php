@extends('frontend')

@section('content')
<!-- top news-->
<section id="mainevent" class="blockrows bgblock">
    <div class="inner-page">
        <h2 class="title">Tiêu điểm sự kiện</h2>
        <div class="bxevent bxcol">
            <div class="bxleft">
                <ul class="tabnews nav nav-tabs">
                    @foreach ($newsCategories->subCategories as $k => $newsCategory)
                        <li class="{{($k == 0)? 'active' : ''}}">
                            <a class="newslasted" href="{{url('chuyen-muc', $newsCategory->slug)}}">{{$newsCategory->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="bxright">
                <div class="tab-content">
                    <ul class="listPost">
                        @foreach ($posts as $post)
                            <li>
                                <figure class="postImg"><a href="{{url($post->slug.'.html')}}" title="{{$post->title}}"><img src="{{url('img/cache/243x135', $post->image)}}" ></a></figure>
                                <div class="contPost"> <a class="postTitle" href="{{url($post->slug.'.html')}}" title="{{$post->title}}">{{$post->title}}</a>
                                    <div class="entryPost">By {{($post->author())}} | {{$post->updated_at->toDayDateTimeString()}}</div>
                                    <div class="postSubcript">{{$post->desc}}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection