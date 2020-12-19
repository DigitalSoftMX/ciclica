<!-- Navbar -->
<nav class="navbar navbar-expand-lg  p-0  bg-white" style=";  height: 70px !important;  box-shadow: none !important; color: #562E85"> 
    <div class="container-fluid">
      <h3 class="align-middle m-0 text-uppercase font-weight-bold" style="width: 100% !important; text-align: center;
}">Ciclica Med</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
           
           @role('Enfermera')
            <li class="nav-item dropdown">
            <a class="nav-link" href="https://ciclica.lealtaddigitalsoft.mx/public/recetascitas">
              <i class="material-icons">notifications</i>
              <span class="notification" id="countsuceso"> </span>
            <div class="ripple-container"></div></a>
            </li>
          @endrole
          
           @role('Doctor@')
            <li class="nav-item dropdown">
            <a class="nav-link" href="https://ciclica.lealtaddigitalsoft.mx/public/dashboard">
              <i class="material-icons">notifications</i>
              <span class="notification" id="countsucesodoctor"> </span>
            <div class="ripple-container"></div></a>
            </li>
          @endrole
          
          <li class="nav-item dropdown">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                  {{ __('Cuenta') }}
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <!--<a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Perfil') }}</a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar Sesion') }}</a>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- End Navbar -->