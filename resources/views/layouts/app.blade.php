<?php
$navbar = ['menù', 'artwork', 'contacts'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="container my_header-container">
            <ul>
                <li>
                    <a href=" {{ route('welcome') }} ">
                        {{ '{DC_logo_image}' }}
                    </a>
                </li>

                <li>
                    <a href=" {{ route('comics.index') }} ">
                        admin page
                    </a>
                </li>

                @foreach ($navbar as $navbarItem)
                    <li>
                        <a href="">

                            {{ $navbarItem }}
                        </a>
                    </li>
                @endforeach

            </ul>
        </nav>

    </header>

    <main>
        @yield('content')
    </main>



</body>


</html>
