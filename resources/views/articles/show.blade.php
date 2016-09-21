@extends('layout')

@section('content')
	<h1>{{ $article->title }} </h1>

	<hr/>

	<article>
		<div class="body">
			{{ $article->bosy }}
		</div>
	</article>

	{!! link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}
@stop
