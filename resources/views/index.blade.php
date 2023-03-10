<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token()}}">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

</head>
<body>
    @yield('content')
</body>
</html>
