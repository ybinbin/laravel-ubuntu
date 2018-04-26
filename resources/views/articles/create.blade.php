@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open() !!}
    	<div class="form-group">
	    	{!! Form::label('title') !!}
	    	{!! Form::text('title',null,['class'=>'form-control','jelly'=>'bool']) !!}
    	</div>

    	<div class="form-group">
	    	{!! Form::label('content','Content:') !!}
	    	{!! Form::textarea('content',null,['class'=>'form-control','jelly'=>'bool']) !!}
    	</div>	

    	{!! Form::submit('发表文章',['class'=>' btn btn-primary form-control']) !!}
    	
    {!! Form::close() !!}

@stop
<!-- 下载 laravelcollective/html   (https://www.codecasts.com/blog/post/programming-with-laravel-5-laravel-forms-input)-->