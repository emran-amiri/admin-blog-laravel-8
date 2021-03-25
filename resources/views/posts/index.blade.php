@extends('layouts.app')

@section('content')

<div class="flex justify-center">
		<div class="w-8/12 bg-white p-6 rounded-lg mt-24">

			
			
			<form action="{{ route('posts') }}" method="post" class="mb-4">
			@csrf
			<p class="text-2xl font-semibold text-green-500 mb-3">What is in your mind ?</p>
				
				@if(session()->has('message'))
					<div class="bg-green-500 rounded-lg mb-6 text-white text-center font-bold p-4">
						{{ session('message') }}
					</div>
				@endif

				<div class="mb-4">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" id="title" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('title') border-red-500 @enderror" placeholder="Your title" value="{{ old('title') }}">

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="mb-4">
					<label for="body" class="sr-only">Body</label>
					<textarea name="body" id="body" cols="30" rows="10" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Your Something!" 
                    value="{{ old('body') }}"></textarea>
				
					@error('body')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>

				<div>
					<button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
				</div>			
			</form>
		</div>
</div>

@endsection