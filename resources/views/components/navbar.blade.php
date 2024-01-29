    <nav class="navbar navbar-expand-lg shadow-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('new-blog')}}">New blog</a>
              </li>
            </ul>
            <ul class="d-flex h-100 align-items-center my-auto">
              @guest
                  
              <li class="nav-item ">
                <a class="nav-link" href="{{route('login')}}">Accedi/</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
              </li>
              @endguest
              <li class="nav-item ">
                <a class="nav-link" href="{{route('login')}}">
                  @auth
                      Benvenuto {{Auth::user()->name}}
                  @endauth
                  </a>
              </li>
              <li class="nav-item me-3 ms-5">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              </li>
              <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </ul>
          </div>
        </div>
      </nav>
