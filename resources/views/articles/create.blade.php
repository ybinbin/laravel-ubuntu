@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'/articles']) !!}
    	@include('articles.form')
    	
    {!! Form::close() !!}

    @if($errors->any())

    <ul class="list-group">
    	@foreach($errors->all() as $error)
    		<li class="list-group-item list-group-item-danger">{{ $error }}</li>
    	@endforeach
    </ul>

    @endif

@section('footer')
    <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>
   <!--  <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/> -->

@stop
<!-- 下载 laravelcollective/html   (https://www.codecasts.com/blog/post/programming-with-laravel-5-laravel-forms-input)-->