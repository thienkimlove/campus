@extends('frontend')

@section('content')
    <!-- chance student-->
    <section id="chStudent" class="blockrows bgblock">
        <div class="inner-page">
            <h2 class="title">Cơ hội cho sinh viên</h2>
            <ul class="listchance">
                @foreach ($category->subCategories->splice(0, 3) as $mSub)
                <li>
                    <div class="conttext">
                        <img src="{{url('img/cache/112x114', $mSub->image)}}">
                        <h2>{{$mSub->name}}</h2>
                        <p>{{$mSub->desc}}</p>
                    </div>
                    <div class="rowbt"> <a href="{{url('chuyen-muc', $mSub->slug)}}" class="bt mb20px">Xem ngay</a></div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
    <!-- chance student-->
    <section id="discover" class="blockrows ">
        <div class="inner-page">
            <h2 class="title">Khám phá bản thân</h2>
            <p class="discript">Hãy tìm hiểu các ngành nghề trong lĩnh vực Esports
                và thử xem mình có thích hợp hay không nhé!</p>
            <div class="discontent">
                @foreach ($jobCategory->subCategories as $subCategory)
                <div class="boxline">
                    <div class="firtTitle">
                        <span>
                            <img src="{{url('img/cache/85x65', $subCategory->image)}}">
                             <h2>{{$subCategory->name}}</h2>
                        </span>
                    </div>
                    <ul class="listjobs">
                        @foreach ($subCategory->posts as $post)
                            <li>
                                <img src="{{url('img/cache/52x52', $post->image)}}">
                                <h2><a href="{{ ($post->external_link) ? $post->external_link : url($post->slug.'.html')  }}">{{$post->title}}</a></h2>
                                <p>{{$post->desc}}</p>
                            </li>
                        @endforeach
                    </ul>

                </div>
                @endforeach
                <div class="rowbt"> <a href="#" class="bt mb20px">Trắc nghiệm xem bạn<br>
                        Phù hợp với ngành nghề nào!</a></div>
            </div>
        </div>
    </section>
@endsection
