<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
   <!-- <div class="navbar-wrapper">
         <a class="navbar-brand" href="#"> <img src="{{ asset('material') }}/img/logociclica.png" width="27%"/> </a> 
    </div>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a href="{{ route('register') }}" class="nav-link" style="color: black">
            <i class="material-icons">person_add</i> {{ __('Register') }}
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          <a href="{{ route('login') }}" class="nav-link" style="color: black">
            <i class="material-icons">fingerprint</i> {{ __('Login') }}
          </a>
        </li>
        @auth()
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" style="color: black">
                  <i class="material-icons">directions_run</i>
                  <span>{{ __('Logout') }}</span>
              </a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>