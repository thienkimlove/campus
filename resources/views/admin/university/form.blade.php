@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">University</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($university))
            <h2>Edit</h2>
            {!! Form::model($university, ['method' => 'PATCH', 'route' => ['admin.universities.update', $university->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($university = new App\University, ['route' => ['admin.universities.store']]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('desc', 'Description') !!}
                {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('city_id', 'City') !!}
                {!! Form::select('city_id', $cities, null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection