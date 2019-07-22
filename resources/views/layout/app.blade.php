<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        @include('includes.navbar')
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
</body>
</html>

