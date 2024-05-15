<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SIPKL </title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" > --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet"> 
</head> 
<body> 

    @include('header')
    
    @yield('konten')
    
     
    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script> 

</body>
</html>