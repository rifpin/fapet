<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('templates.stylesheet')
  </head>
  <body>
    @include('templates.header')
    <div class="container">
        @yield('content')
    </div>
    @include('templates.footer')
    @include('templates.script') 
  </body>
</html>