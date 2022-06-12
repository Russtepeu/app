<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Admin - @yield('title')</title>

<body class="bg-gray-50 text-sm">

    <div>
        <div class="max-w-5xl bg-white rounded-lg xl:shadow-xl mx-auto p-8 mt-8">

            <header class="mb-8 flex space-x-2 items-center justify-between">
                <h1>leruss</h1>
            </header>

            <div class="flex border-t">
                <aside class="w-1/6 pt-8">
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('dashboard.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="book-outline"></ion-icon>

                                <span class="pt-1"> Home </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="book-outline"></ion-icon>

                                <span class="pt-1"> Posts </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" class="flex items-center space-x-1">

                                <ion-icon name="person-outline"></ion-icon>
                                <span>
                                    Users
                                </span>
                            </a>
                        </li>




                        <li>
                            <a href="{{ route('categories.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="business-outline"></ion-icon>
                                <span>Categories </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                                class="flex items-center space-x-1">
                                <ion-icon name="log-out-outline"></ion-icon>

                                <span>
                                    Logout
                                </span>
                            </a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </aside>

                <main class="w-5/6 pt-8 pl-8 border-l ">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>


{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Admin - @yield('title')</title>

</head>

<body class="bg-white text-sm">

    <div>
        <div class="max-w-5xl bg-white rounded-lg xl:shadow-xl mx-auto p-8 mt-8">

            <header class="mb-8 flex space-x-2 items-center justify-between">

                <div>
                    @yield('action')
                </div>
            </header>

            <div class="flex border-t">
                <aside class="w-1/6 pt-4">
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('posts.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="clipboard-outline"></ion-icon>

                                <span class="pt-1"> posts </span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('users.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="people-outline"></ion-icon>
                                <span>users</span>
                            </a>

                        </li>



                        <li>
                            <a href="{{ route('categories.index') }}" class="flex items-center space-x-1">
                                <ion-icon name="business-outline"></ion-icon>
                                <span>categories </span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                                class="flex items-center space-x-1">
                                <ion-icon name="log-out-outline"></ion-icon>

                                <span>
                                    Logout
                                </span>
                            </a>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </aside>

                <main class="w-5/6 pt-8 pl-8 border-l ">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

</body>

</html> --}}