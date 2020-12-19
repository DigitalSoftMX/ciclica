<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
    <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
  </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('Doctor@')

<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Ver mis Citas------------------------------------------------->

     <li class="nav-item {{ $menuParent == 'procesoconsultascheckup' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("procesoconsultascheckup/$id") }}" data-toggle="tooltip" title="Consulta Checkup">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
        
<!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctorescheckup' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("estudiosprocesoconsultadoctorescheckup/$id") }}" data-toggle="tooltip" title="Estudios Checkup">
          <i class="iconPlas-regresar"></i>
         </br>
        </a>
      </li> 


@endrole

   </ul>
  </div>
</div>