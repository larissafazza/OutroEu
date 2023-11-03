<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1"> <title>Outro Eu</title> <link rel="icon"
    href="images/outroeu.jpg" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> <!--
    Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com"
    crossorigin> <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
    rel="stylesheet"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect"
    href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Montserrat:wght@300&family=Roboto:wght@300&display=swap"
    rel="stylesheet">

<link rel="preconnect" href="https://fonts.bunny.net"> <!-- Styles -->
<link rel="stylesheet" href="css/fans.css"> <!--
    Scripts --> <!-- <link rel="stylesheet" href="js/fans.js"> -->

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">

</head>

<body>
    <!-- <nav class="navbar">

        </nav> -->
    @yield('content')
</body>

</html>
<script src="{{ asset('js/fans.js') }}">

</script>