  <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a href = '/' class="nav-link active" href="#">Home</a>
          @if (Auth::check())
          <a href = '\posts\create' class="nav-link" href="#">New Blog</a>
          @endif
          @if(!Auth::check())
          <a class="nav-link" href="/login">Log-in</a>
          @endif
          @if(!Auth::check())
          <a class="nav-link" href="/register">New Account</a>
          @endif
          <a class="nav-link" href="#">About</a>
          @if (Auth::check())
           <a class="nav-link ml-auto" href="/logout"> {{ Auth::user()->name}}</a>
          @endif
        </nav>
      </div>
    </div>