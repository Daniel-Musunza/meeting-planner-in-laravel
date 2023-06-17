<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">
        <title>Meeting Planner</title>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/332a0bbd7c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                 <li>
                    <img src="{{ asset('images/favicon.ico') }}" alt="MP" width="40px;">
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Planner</a>
                </li>
                <li>
                    <a href="/" class="p-3">New Meeting</a>
                </li>
              
            </ul>

            <ul class="flex items-center">
                @auth
                    <li class="none">
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
