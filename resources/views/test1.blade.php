@extends("header-footer")

@section('title', 'This Is Test1 Page')

@section("slider")
	<section class="slider-area">
		<h2>This is Slider Area</h2>
	</section>


<h2>This is portfolio section</h2>

@section('content')

@if ($age >= 22)
<h3>You can go there</h3>
@elseif($age < 22 )
<h3>You can not go there</h3>
@else
<h3>As your wish</h3>
@endif

@foreach($information as $location)

	{{$location}}<br>

@endforeach

@for($i=0; $i < 3; $i++ )

	{{'This is looping'}}<br>

@endfor

@include('services')

@section("portfolio")

@endsection

