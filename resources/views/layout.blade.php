<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="py-4 text-center">
        <h1>LA TUA FUMETTERIA DI FIDUCIA</h1>
    </header>

    <main class="container py-3">
        @yield('main_content')
    </main>
</body>
</html>