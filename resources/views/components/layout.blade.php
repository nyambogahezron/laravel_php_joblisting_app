<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="js/sweetalert.css">
    <link rel="icon" href="images/favicon.ico" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/min.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/js/all.min.js" />

    @vite('resources/css/app.css')

    <title>Job List</title>
</head>

<body class="mb-48">
    <nav class="mb-4 flex items-center justify-between">
        <a href="/"><img class="w-24"
                src="{{ asset('images/logo.png') }}" alt=""
                class="logo" /></a>
        <ul class="mr-6 flex space-x-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i
                            class="fa-solid fa-gear"></i> Manage Listings</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i
                            class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>{{ $slot }}</main>

    <footer
        class="fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start bg-laravel font-bold text-white opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

        <a href="/listing/create"
            class="absolute right-10 top-1/3 bg-black px-5 py-2 text-white">Post
            Job</a>
    </footer>

    <x-flash-message />
</body>

</html>
