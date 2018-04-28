@extends('app')
@section('content')
	<div class="col-md-8 col-md-offset-8">
		
    <h1>{{ $article->title }}</h1>
    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    	@include('articles.form')
    	
    {!! Form::close() !!}

    @include('errors.error')
	</div>

@section('footer')
    <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>
   <!--  <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/> -->

@stop
<!-- 下载 laravelcollective/html   (https://www.codecasts.com/blog/post/programming-with-laravel-5-laravel-forms-input)-->