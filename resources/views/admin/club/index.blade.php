@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Clubs</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>University</th>
                                <th>Owner</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clubs as $club)
                                <tr>
                                    <td>{{$club->id}}</td>
                                    <td>{{$club->name}}</td>
                                    <td><img src="{{url('img/cache/120x120', $club->image)}}" /></td>
                                    <td>{{$club->university->name}}</td>
                                    <td>{{$club->user->name}}</td>
                                    <td>
                                        <button id-attr="{{$club->id}}" class="btn btn-primary btn-sm edit-cate" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.clubs.destroy', $club->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$clubs->render()!!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-primary add-cate" type="button">Add</button>
                        </div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection
@section('footer')
    <script>
        $(function(){
            $('.add-cate').click(function(){
                window.location.href = window.baseUrl + '/admin/clubs/create';
            });
            $('.edit-cate').click(function(){
                window.location.href = window.baseUrl + '/admin/clubs/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection