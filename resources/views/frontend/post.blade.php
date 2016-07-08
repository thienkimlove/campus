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
                   <div class="fb-share-button" data-href="{{url($post->slug.'.html')}}" data-layout="button_count"></div>
                </div>
            </div>
            <div class="postcont">
              {!! $post->content !!}}
            </div>
            <div class="commentpage">
                <div class="fb-comments" data-href="{{url($post->slug.'.html')}}" data-numposts="5"></div>
            </div>
        </div>
    </div>
</section>
@endsection