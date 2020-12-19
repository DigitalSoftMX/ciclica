<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
   <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
   </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">


<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Ver mis Citas------------------------------------------------->

     <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudios/edit/$id") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agenda-per-lab"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'citasimagenologia' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudiosimagenologia/edit/$id") }}" data-toggle="tooltip" title="Agendar Estudios de Imagenologia">
          <i class="iconPlas-imagenologia"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'agendarestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarestudios') }}" data-toggle="tooltip" title="Regresar">
          <i class="iconPlas-regresar"></i>
         </br>
        </a>
      </li>


   </ul>
  </div>
</div>