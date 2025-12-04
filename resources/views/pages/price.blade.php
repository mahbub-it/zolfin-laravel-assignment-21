@extends('components.common-layout')
        <!-- Header End -->

@section('content')

        <!-- Banner  -->
@include('components.price.banner')
        <!-- Banner End -->

        <!-- Pricing  -->
@include('components.price.pricing')
        <!-- Pricing End -->

        <!-- Price Alt  -->
@include('components.price.price-alt')
        <!-- Price Alt End -->

@endsection