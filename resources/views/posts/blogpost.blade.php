@extends('layouts.app')

@section('content') 



<!--Container-->
<div class="container w-full max-w-4xl mx-auto pt-28">

	<div class="w-full px-4 text-xl text-gray-800 leading-normal" style="font-family:Georgia;">

		<!--Title-->
		<div class="font-sans">
			<h1 class="font-bold font-sans text-center text-green-500 pt-4 pb-2 text-3xl">Welcome to your personal blog</h1>
		</div>

		@if ($posts->count())
			@foreach ($posts as $post)
			<div class="my-6">
				<div class="flex w-full font-sans px-4 py-3">
					<a href="#" class="text-xl font-bold leading-none mr-2 capitalize">{{ $post->user->fullname }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
				</div>
				<div>
					<p class="px-4 text-green-600 text-xl mb-1">{{ $post->title }}</p>
					<p class="px-4 text-gray-600 text-lg">{{ $post->body }}</p>
				</div>
			</div>

			<hr class="border-b-2 border-gray-400 mb-8 mx-4">
			@endforeach
			
			{{ $posts->links() }}
			
		@else
			<p class="font-bold italic mt-2">nothing is posted yet</p>
		@endif
		<!-- just for test -->

		<br>
		<br>
		<br>

		<hr class="border-b-2 border-green-400 my-8 mx-4">
		<h5 class="text-lg text-center text-green-600 pl-4"> Quote of the day</h5>
		<blockquote class="border-l-4 text-gray-900 border-green-500 italic my-8 pl-12">True person must exist inside man in order for him to live.<br> <span class="text-sm text-gray-400">The Great Teacher Woo Myung.</span></blockquote>
	</div>

	<hr class="border-b-2 border-green-400 mb-8 mx-4">

</div>


@endsection