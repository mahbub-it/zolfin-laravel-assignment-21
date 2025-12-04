@extends('components.common-layout')
        <!-- Header End -->

@section('content')

        <!-- Banner  -->
@include('components.about.banner')
        <!-- Banner End -->

        <!-- Info Section  -->
@include('components.about.info')
        <!-- Info Section End -->

        <!-- Team Member  -->
@include('components.team-member')
        <!-- Team Member End -->

        <!-- Counter UP -->
@include('components.about.counter')
        <!-- Counter UP End -->

        <!-- Award  -->
@include('components.award')
        <!-- Award End -->

@endsection