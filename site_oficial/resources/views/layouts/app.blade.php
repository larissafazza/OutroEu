<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Outro Eu</title>

        <link rel="icon" href="images/icon.jpeg" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
                
        <!-- Styles -->
        <link rel="stylesheet" href="styles/layout.css">
        <link rel="stylesheet" href="styles/app.css">
        <link rel="stylesheet" href="styles/home.css">
        
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        
    </head>
    <body>
        <nav class="navbar">
            
        </nav>
        @yield('content')
    </body>
</html>