@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Universities</h1>
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
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($universities as $university)
                                <tr>
                                    <td>{{$university->id}}</td>
                                    <td>{{$university->name}}</td>
                                    <td>{{$university->city->name}}</td>
                                    <td>
                                        <button id-attr="{{$university->id}}" class="btn btn-primary btn-sm edit-cate" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.universities.destroy', $university->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$universities->render()!!}</div>
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
                window.location.href = window.baseUrl + '/admin/universities/create';
            });
            $('.edit-cate').click(function(){
                window.location.href = window.baseUrl + '/admin/universities/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection