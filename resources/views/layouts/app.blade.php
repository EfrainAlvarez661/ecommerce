<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .topbar {
      width: 100%;
      background: #28a745; /* Verde */
      color: white;
      padding: 15px 25px;
      font-size: 18px;
      font-weight: bold;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
      text-align: left;
    }
    </style>
    @yield('css')

</head>
<body>


@include('layouts.navbar')
@yield('content')
@include('layouts.footer')
    
</body>
</html>