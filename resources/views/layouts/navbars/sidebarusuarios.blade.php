<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
    <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
  </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('Doctor@')

<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Ver mis Citas------------------------------------------------->

      
        <!-- Citas laboratorio------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("pacientes/ver/$id") }}" data-toggle="tooltip" title="Perfil">
          <i class="iconPlas-agenda-per-lab"></i>
         </br>
        </a>
      </li>
     
     <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudios/$id") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agregar-estudio-lab"></i>
         </br>
        </a>
      </li> 
      
      <!-- Estudios -->
      <!--<li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudiosimagenologia/$id") }}">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> 
      -->
       <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("laboratorio/edit/$id") }}" data-toggle="tooltip" title="Agendar Laboratorio">
          <i class="iconPlas-laboratorio"></i>
         </br>
        </a>
      </li> 
      
    <!--  <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("imagenologia/edit/$id") }}">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> -->
      
<!-- Recetas   -->
    <li class="nav-item {{ $menuParent == 'recetas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("recetas/edit/$id") }}" data-toggle="tooltip" title="Recetas">
          <i class="iconPlas-recetas"></i>
         </br>
        </a>
      </li>
      
       <li class="nav-item {{ $menuParent == 'pacientes' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pacientes') }}" data-toggle="tooltip" title="Pacientes">
        <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>
      
@endrole

@role('Asistente')

<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Ver mis Citas------------------------------------------------->

      
        <!-- Citas laboratorio------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("pacientes/ver/$id") }}" data-toggle="tooltip" title="Perfil">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>
     
     <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudios/$id") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> 
      
       <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("laboratorio/edit/$id") }}" data-toggle="tooltip" title="Laboratorio">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> 
      
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("imagenologia/edit/$id") }}" data-toggle="tooltip" title="Imagenologia">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> 
      
      
       <li class="nav-item {{ $menuParent == 'pacientes' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pacientes') }}" data-toggle="tooltip" title="Regresar">
        <i class=" iconPlas-regresar"></i>
         </br>
        </a>
      </li>
      
@endrole

   </ul>
  </div>
</div>