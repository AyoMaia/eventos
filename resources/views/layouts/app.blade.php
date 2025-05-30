
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') Big Events</title>
</head>
<body class="bg-black">
    <header class="header">
        @include('components.header')
    </header>

    @yield('content')

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>




