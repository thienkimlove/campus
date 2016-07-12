@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Link</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($link))
            <h2>Edit</h2>
            {!! Form::model($link, ['method' => 'PATCH', 'route' => ['admin.links.update', $link->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($link = new App\Link, ['route' => ['admin.links.store']]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('url', 'URL') !!}
                {!! Form::text('url', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection