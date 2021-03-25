@extends('layouts.app')

@section('content')

<div class="flex justify-center ">
    <div class="mt-28 w-4/12">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-green-500 font-bold text-center">Sign in</h1>
            @if (session()->has('mssg')) 
            
            <div class="bg-red-500 rounded-lg mb-6 text-white text-center font-bold p-4">{{ session('mssg') }}</div>
            @endif
            <form action="{{ route('login') }}" method="post">
            @csrf 
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" class="block border border-grey-light w-full p-3 rounded @error('email') border-red-500 @enderror"
                    name="email" id="email" placeholder="Email" value="{{ old('email') }}" />

                    @error('email')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="block border border-grey-light w-full p-3 rounded @error('password') border-red-500 @enderror" name="password" id="password" placeholder="Choose a password" value="" />
                
                    @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-700 focus:outline-none font-medium my-1">Login</button>
                </div>
            
            </form>
            
        </div>
        <div class="flex justify-center">
            <div class="flex text-grey-dark mt-2">
                <p>Don't have any account?</p> 
                <a class="ml-2 no-underline border-b border-blue hover:underline hover:text-green-500 text-blue" href="{{ route('register') }}"> Sign up</a>.
            </div>
        </div>
    </div>
</div>
@endsection