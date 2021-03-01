<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    @section('navbar')
        This is the master sidebar.
    @show

    @section('content')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
