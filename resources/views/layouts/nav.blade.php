 <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="{{ url('/') }}">Home</a>
          <a class="nav-link" href="#">Stats</a>
          <a class="nav-link" href="#">Owner Stats</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>

          @if (Auth::check())
          
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>

          @endif

        </nav>
      </div>
    </div>