@extends('app')

@section('content')
	<h1>Articles : {{ Auth::user()->name }}</h1>
	<hr>

	@foreach ($articles as $v)
		<!-- <h2><a href="/articles/{{ $v->id }}">{{ $v->title }}</a></h2> --> <!-- 第一种链接方式 -->

		<!-- <h2><a href="{{url('articles',$v->id)}}">{{ $v->title }}</a></h2> --> <!-- 第二种链接方式 -->

		<h2><a href="{{action('ArticlesController@show',[$v->id])}}">{{ $v->title }}</a></h2> <!-- 第三种链接方式 -->

		<article>
			<h4><span>作者：{{ App\Article::find(3)->user->name }}</span></h4>
			<div class="body">
				{{ $v->content }}
			</div>
		</article>
	@endforeach

@stop