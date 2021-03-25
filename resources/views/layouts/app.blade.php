
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Blog</title>
    <meta name="author" content="Emran Amiri" />
    <meta name="description" content="This is a private web blog created by Emran Amiri" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>


<body class="bg-gray-100 font-sans leading-loose tracking-wide"> <!--1.leading=line-height,2.tracking=letter-spacing -->
    <nav id="header" class="absolute bg-gray-200 w-full shadow">

        <div class="flex items-center justify-between py-4">

            <div class="pl-8">
                <a class="font-extrabold text-3xl" href="{{ route('home') }}">
                    <span class="text-gray-900">Emran's</span> <span class="text-red-600">Private</span> <span class="text-green-600">Blog</span>
                </a>
                
                <a class="ml-12 text-gray-700 hover:text-red-900 hover:underline font-bold text-2xl" href="{{ route('blogpost') }}">Blog-Posts</a>
            </div>

            <div class="flex items-center w-auto mt-1" id="nav-content">
                <ul class="flex justify-end items-center mr-4">
                    
                    @auth
                        <li class="mr-16">
                            <a class="inline-block text-2xl py-2 text-gray-600 hover:underline rounded font-bold" href="{{ route('posts') }}">Post Something</a>
                        </li>

                        <li class="mt-1">
                            <img class="w-10 h-10 rounded-full" src="http://i.pravatar.cc/300" alt="Avatar of Author">
                        </li>

                        <li class="mr-3">
                            <a class="inline-block capitalize text-2xl py-2 px-4 text-gray-900 italic font-bold" href="#">{{ auth()->user()->fullname }}</a>
                        </li>

                        <li class="mr-3">
                            <form action="{{ route('logout') }}" method="post">
                            @csrf
                                <button type="submit" class="inline-block bg-red-600 hover:bg-red-500 text-white font-bold py-1 px-3 rounded-lg">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="mr-3">
                            <a class=" inline-block bg-gray-900 hover:bg-gray-800 text-white font-bold py-1 px-3 rounded-lg" href="{{ route('login') }}"> Login</a>
                        </li>

                        <li class="mr-3">
                            <a class="inline-block bg-green-600 hover:bg-green-500 text-white font-bold py-1 px-3 rounded-lg" href=" {{ route('register') }} ">Register</a>
                        </li>
                    @endguest    
                        
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')


<footer class="bg-white border-t border-gray-400 shadow">
    <div class="container max-w-4xl mx-auto flex py-8">

        <div class="w-full mx-auto flex">
            <div class="w-full mr-12">
                <div class="px-8">
                    <h3 class="font-bold text-gray-900">About</h3>
                    <p class="py-4 text-gray-600 text-sm">
                    personal blog is an ongoing online diary or commentary written by an individual, rather than a corporation or organization. While the vast majority of personal blogs attract very few readers.
                    </p>
                </div>
            </div>

            <div class="w-full flex justify-center">
                <div class="px-8 ml-12">
                    <h3 class="font-bold text-gray-900">Social</h3>
                    <ul class="list-reset items-center text-sm pt-3">
                        <li class="flex">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/facebook.png" alt="Facebook logo">
                            <a class="inline-block text-gray-600 no-underline hover:text-green-500 py-1" href="www.facebook.com">Facebook</a>
                        </li>
                        <li class="flex mt-2">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/github.png" alt="Github logo">
                            <a class="inline-block text-gray-600 no-underline hover:text-green-500 py-1" href="www.github.com">Github</a>
                        </li>
                        <li class="flex mt-2">
                            <img class="w-5 h-5 mt-1 mr-2 rounded-full" src="/img/twitter.png" alt="Twitter logo">
                            <a class="inline-block text-gray-600 no-underline hover:text-green-500 py-1" href="www.twitter.com">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>


</body>

</html>
