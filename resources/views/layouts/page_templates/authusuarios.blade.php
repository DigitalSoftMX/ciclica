<div class="wrapper ">
  @include('layouts.navbars.sidebarusuarios')
  <div class="main-panel"> 
    @include('layouts.navbars.navs.auth')
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>