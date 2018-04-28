@extends('app')
@section('content')
    <h1>撰写新文章</h1>
    {!! Form::open(['url'=>'/articles']) !!}
    	@include('articles.form')
    	
    {!! Form::close() !!}

    @include('errors.error')

@section('footer')
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
@stop
<!-- 下载 laravelcollective/html   (https://www.codecasts.com/blog/post/programming-with-laravel-5-laravel-forms-input)-->