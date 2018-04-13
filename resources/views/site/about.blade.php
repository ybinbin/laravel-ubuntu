@extends('app')
@section('title','关于我')
@section('content')
	@if($name == 'Jelly')
		<h1>About me <?= $name ?></h1>
		<h1>About me {{ $name }}</h1>
		<h1>About me {!! $name !!} {!! $sex !!}</h1>
	@else
		<h1>else</h1>
	@endif
	@if(count($people)>0)
	<ul>
	
	@foreach($people as $person)
		<li>{{$person}}</li>
		@endforeach

	</ul>
	@endif
@stop