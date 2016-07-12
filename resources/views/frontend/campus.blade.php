@extends('frontend')

@section('content')

    @if ($posts)
    <!-- what esc-->
    <section id="campus-block1" class="blockrows bgblock">
        <div class="inner-page">
            <div class="videoWrapper" id="bxvideo">
                <iframe width="560" height="315" src="{{config('constants.VIDEO_URL')}}" frameborder="0" allowfullscreen></iframe>
            </div>
            <ul class="listcontrol">
                @foreach ($posts as $post)
                <li>
                    <div class=" contblock bgorang"> <img src="{{url('img/cache/52x52', $post->image)}}">
                        <h2><a href="{{url($post->slug.'.html')}}">{{$post->title}}</a></h2>
                        <p>{{$post->desc}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    @endif

    <!-- Tím kiếm cau lac bộ-->

   @include('frontend.club_list', ['cities' => $cities, 'rightClubs' => $rightClubs])

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