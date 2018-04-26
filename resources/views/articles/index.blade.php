@extends('app')

@section('content')
	<h1>Articles</h1>
	<hr>

	@foreach ($articles as $v)
		<!-- <h2><a href="/articles/{{ $v->id }}">{{ $v->title }}</a></h2> --> <!-- 第一种链接方式 -->

		<!-- <h2><a href="{{url('articles',$v->id)}}">{{ $v->title }}</a></h2> --> <!-- 第二种链接方式 -->

		<h2><a href="{{action('ArticlesController@show',[$v->id])}}">{{ $v->title }}</a></h2> <!-- 第三种链接方式 -->

		<article>
			<div class="body">
				{{ $v->content }}
			</div>
		</article>
	@endforeach

@stop