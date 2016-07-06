@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Clubs</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($club))
            <h2>Edit</h2>
            {!! Form::model($club, ['method' => 'PATCH', 'route' => ['admin.clubs.update', $club->id], 'files' => true]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($club = new App\Club, ['route' => ['admin.clubs.store']]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('desc', 'Description') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control ckeditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('university_id', 'University') !!}
                {!! Form::select('university_id', $universities, null, ['class' => 'form-control']) !!}
            </div>

                <div class="form-group">
                    {!! Form::label('user_id', 'Owner') !!}
                    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    @if ($club->image)
                        <img src="{{url('img/cache/120x120/' . $club->image)}}" />
                        <hr>
                    @endif
                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
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
@endsection