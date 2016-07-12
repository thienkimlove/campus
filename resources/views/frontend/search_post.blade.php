@extends('frontend')

@section('content')
<!-- top news-->
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

@endsection