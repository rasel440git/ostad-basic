<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>


@include('layout.header')





@yield('content')





@include('layout.footer')







<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"> </script>

</body>
</html>
