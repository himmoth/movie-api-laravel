<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

    
    <title>Movie App</title>
</head>
<body>

   @include('partails.nav')

  <div class="container">
    @yield('content')
  </div>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/all.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap5.min.js')}}"></script>
   

</body>
</html>