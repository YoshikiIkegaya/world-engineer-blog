@extends('layout')

@section('content')
	<h1>{{ $article->title }} </h1>

	<hr/>

	<article>
		<div class="body">
			{{ $article->bosy }}
		</div>
	</article>
@endsection