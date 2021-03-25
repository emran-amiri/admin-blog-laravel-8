@extends('layouts.app')

@section('content') 


<!--Container-->

<div class="container w-full max-w-4xl mx-auto">
	<div class="w-full px-4 text-xl text-gray-800 leading-normal" style="font-family:Georgia;">
		<!--Title-->
		<div class="font-sans">
			<h1 class="font-bold font-sans text-gray-900 pt-6 pb-2 text-3xl">Welcome to My Private Web Blog</h1>
		</div>
	</div>
	<!--Tags -->

	<!--Divider-->
	<hr class="border-b-2 border-gray-400 mb-8 mx-4">
	<!--Author-->

	<div class="flex w-full items-center font-sans px-4 py-12">
		<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
		<div class="flex-1 px-2">
			<p class="text-base font-bold text-base md:text-xl leading-none mb-2">Emran Amiri</p>
			<p class="text-gray-600 text-xs md:text-base">We should work hard in order to have a great country blah blah blah hahahahha...</p>
		</div>
		<div class="justify-end mt-8 mr-4">
			<a href="{{ route('login') }}" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full"> Read More</a>
		</div>
	</div>

	<hr class="border-b-2 border-gray-400 mb-8 mx-4">

	<div class="flex w-full items-center font-sans px-4 py-12">
		<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
		<div class="flex-1 px-2">
			<p class="text-base font-bold text-base md:text-xl leading-none mb-2">Faisal Adelyar</p>
			<p class="text-gray-600 text-xs md:text-base">JavaScript, often abbreviated as JS, is a programming language that conforms to the ECMAScript specification...</p>
		</div>
		<div class="justify-end mt-8 mr-4">
			<a href="{{ route('login') }}" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full"> Read More</a>
		</div>
	</div>

	<hr class="border-b-2 border-gray-400 mb-8 mx-4">

	<div class="flex w-full items-center font-sans px-4 py-12">
		<img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
		<div class="flex-1 px-2">
			<p class="text-base font-bold text-base md:text-xl leading-none mb-2">Zakarya Nori</p>
			<p class="text-gray-600 text-xs md:text-base">Flutter is an open-source UI software development kit created by Google. It is used to develop iOS, Li...</p>
		</div>
		<div class="justify-end mt-8 mr-4">
			<a href="{{ route('login') }}" class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full"> Read More</a>
		</div>
	</div>
	<!--/Author-->

	<!--Divider-->
	<hr class="border-b-2 border-gray-400 mb-8 mx-4">

	<!--Next & Prev Links-->
	<div class="font-sans flex justify-center px-4 pb-12">
		<div class="flex">
			<p class="text-lg">Want to see all blog posts ?</p> 
			<p><a href="{{ route('login') }}" class="break-normal text-center text-lg text-green-500 font-bold no-underline ml-2 hover:underline">Login</a></p>
		</div>
	</div>

</div>
	<!--/container-->

@endsection