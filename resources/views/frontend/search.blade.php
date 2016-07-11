@extends('frontend')

@section('content')
<!-- top news-->
@include('frontend.club_list', ['cities' => $cities, 'rightClubs' => $clubs])

@endsection