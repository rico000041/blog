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
    @if($flash = session('message'))
    
      <div class="alert alert-success" role= 'alert'>
        <center>
        {{$flash}} {{ Auth::user()->name}} 
        </center>
      </div>    
    @endif

    @include('layouts.header')
    <div class="container">
        <div class="row">
           <div class="col-sm-8 blog-main">
              @yield('content')
            </div>
              @include('layouts.sidebar')

      </div>
      
    </div>
    

  
    @include('layouts.footer')

  </body>
</html>
