<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/custom/style.css')}}">        
        <title>Aayush Rijal</title>
    </head>
    <body>
       @yield('content')
       <script src="{{asset('js/vendor/jquery-2.2.3.min.js')}}"></script>
       <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    </body>
</html>
