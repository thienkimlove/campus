@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Clients</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($client))
            <h2>Edit</h2>
            {!! Form::model($client, [
                'method' => 'PATCH',
                'route' => ['admin.clients.update', $client->id],
                'files' => true
             ]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($client = new App\Client, ['route' => ['admin.clients.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Client Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                @if ($client->image)
                    <img src="{{url('img/cache/120x120/' . $client->image)}}" />
                    <hr>
                @endif
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
            </div>



            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection