
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    @include('links.link')
  </head>

  <body>

   

    @include('layouts.nav')

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

  </body>
</html>
