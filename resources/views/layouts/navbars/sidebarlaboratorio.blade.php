<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
    <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
  </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('Laboratorio')

<!-- ------------------------------------------------->

@if($tipo == 2)
     <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio/$id") }}" data-toggle="tooltip" title="Consulta">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

     <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio25/$id") }}" data-toggle="tooltip" title="Consulta Anexo25">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio26/$id") }}" data-toggle="tooltip" title="Consulta Anexo26">
<i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio27/$id") }}" data-toggle="tooltip" title="Consulta Anexo27">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio28/$id") }}" data-toggle="tooltip" title="Consulta Anexo28">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultalaboratorio29/$id") }}" data-toggle="tooltip" title="Consulta Anexo29">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
@endif      
      <!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudios/$id") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agregar-estudio-lab"></i>
         </br>
        </a>
      </li> 
      
      <!-- Costo -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("agendarcaja/edit/$id") }}" data-toggle="tooltip" title="Caja">
          <i class="iconPlas-agregar-precio"></i>
         </br>
        </a>
      </li> 
      
      
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("laboratorio") }}" data-toggle="tooltip" title="Laboratorio">
          <i class="iconPlas-regresar"></i>
         </br>
        </a>
      </li> 
      

@endrole

   </ul>
  </div>
</div>