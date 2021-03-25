@extends('layouts.app')

@section('content')

<div class="flex justify-center">
            <div class="mt-28">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-green-500 font-bold text-center">Sign up</h1>
                  <form action="{{ route('register') }}" method="post">
                    @csrf  
                    
                    <div class="mb-4">
                        <label for="fullname" class="sr-only">Full Name</label>
                        <input type="text" class="block border border-grey-light w-full p-3 rounded 
                        @error('fullname') border-red-500  @enderror" name="fullname" id="fullname" placeholder="Full Name" value="{{ old('fullname') }}" />
                    
                    @error('fullname')
                        <div class="text-red-500 text-sm mt-2">
                            {{$message}}
                        </div>
                    @enderror
                    
                    </div>

                    <div class="mb-4">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" class="block border border-grey-light w-full p-3 rounded @error('username') border-red-500 @enderror" name="username" id="username" placeholder="Username" value="{{ old('username') }}" />
                    
                    @error('username')
                        <div class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                    </div>

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
                        <input type="password" class="block border border-grey-light w-full p-3 rounded @error('password') border-red-500 @enderror"
                        name="password" id="password" placeholder="Choose a password" value="" />
                    
                    @error('password')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="password_confirmation" class="sr-only">Confirm Password</label>
                        <input type="password" class="block border border-grey-light w-full p-3 rounded @error('password_confirmation') border-red-500 @enderror"
                        name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" />
                    
                    @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    
                    <div>
                        <button type="submit" class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-700 focus:outline-none font-medium my-1">Create Account</button>
                    </div>
                
                </form>
                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="flex text-grey-dark mt-2">
                        <p>Already have an account?</p> 
                        <a class="ml-2 no-underline border-b border-blue hover:underline hover:text-green-500 text-blue" href="{{ route('login') }}"> Log in</a>.
                    </div>
                </div>
            </div>
        </div>

@endsection