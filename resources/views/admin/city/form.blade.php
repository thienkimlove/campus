@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cities</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($city))
            <h2>Edit</h2>
            {!! Form::model($city, ['method' => 'PATCH', 'route' => ['admin.cities.update', $city->id]]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($city = new App\City, ['route' => ['admin.cities.store']]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection