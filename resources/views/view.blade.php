<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title-block')</title>
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>-->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class = "container">
   <div class="row">
       @include('inc.header')
       <div class="col-3">

        </div>
        <div class="col-6 main-container">
            @yield('content')
        </div>
       <div class="col-3"> 
       
        </div>
      
    </div>
</div> 
 @include('inc.footer')
</body>
</html>