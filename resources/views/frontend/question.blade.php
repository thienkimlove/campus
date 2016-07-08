@extends('frontend')

@section('content')

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