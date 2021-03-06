@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hỏi Đáp</h1>
        </div>

    </div>
  <div class="row">
      <div class="col-lg-6">
          @if (!empty($question))
          <h2>Sửa câu hỏi "{{ $question->question }}"</h2>
          {!! Form::model($question, ['method' => 'PATCH', 'route' => ['admin.questions.update', $question->id], 'files' => true]) !!}
          @else
              <h2>Thêm Hỏi Đáp</h2>
              {!! Form::model($question = new App\Question, ['route' => ['admin.questions.store'], 'files' => true]) !!}
          @endif


          <div class="form-group">
              {!! Form::label('question', 'Câu hỏi') !!}
              {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('answer', 'Câu trả lời') !!}
              {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
          </div>

              <div class="form-group">
                  {!! Form::label('status', 'Publish') !!}
                  {!! Form::checkbox('status', null, null) !!}
              </div>

          <div class="form-group">
              {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}

          @include('admin.list')

      </div>
  </div>
@stop