@extends('frontend')
@section('content')
  <section id="detailpost" class="blockrows bgblock">
    <div class="inner-page">
        <div class="pagecurrent">
            <a href="{{url('/')}}">Trang chủ </a> /
            <a href="{{url('chuyen-muc', $post->category->slug)}}">{{$post->category->name}}</a> /
            <a href="{{url($post->slug.'.html')}}"> Bài viết</a> / {{$post->title}}
        </div>
        <div class="postdetail">
            <div class="acticle">
                <div class="leftact">
                    <h2>{{$post->title}}</h2>
                    <p class="time"> By {{($post->author())}} | {{$post->updated_at->toDayDateTimeString()}} </p>
                </div>
                <div class="boxshare">
                    <img src="{{url('frontend/update-images/social.jpg')}}"> </div>
            </div>
            <div class="postcont">
              {!! $post->content !!}}
            </div>
            <div class="commentpage">
                <img src="{{url('frontend/update-images/plugin-comt.png')}}"> </div>
        </div>
    </div>
</section>
@endsection