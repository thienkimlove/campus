@extends('frontend')

@section('content')

    <!-- Tím kiếm cau lac bộ-->

   @include('frontend.club_list', ['cities' => $cities, 'rightClubs' => $rightClubs])


@endsection