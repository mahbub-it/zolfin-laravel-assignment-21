@extends('components.common-layout')
        <!-- Header End -->

@section('content')

        <!-- Banner  -->
@include('components.team.banner')
        <!-- Banner End -->

        <!-- About Company  -->
@include('components.team.about-company')
        <!-- About company End -->

        <!-- Team Member  -->
@include('components.team-member')
        <!-- Team Member End -->

        <!-- Award  -->
@include('components.award')
        <!-- Award End -->

@endsection