<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
    <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
  </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('Doctor@')

<li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}" data-toggle="tooltip" title="Consulta">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

      <!-- Agendar Citas------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agregar-consulta"></i>
         </br>
        </a>
      </li>

      <!-- Costos de la consulta------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'costosconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('costosconsulta') }}" data-toggle="tooltip" title="Costos">
          <i class="iconPlas-precio"></i>
         </br>
        </a>
      </li>
      
        <!-- Citas laboratorio------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudios/edit/0") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agenda-per-lab"></i>
         </br>
        </a>
      </li>
      
      <!-- Citas imagenologia------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasimagenologia' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudiosimagenologia/edit/0") }}" data-toggle="tooltip" title="Agendar Estudios de Imagenologia">
          <i class="iconPlas-imagenologia"></i>
         </br>
        </a>
      </li>
      
      <!-- checkup------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'citascheckup' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('citascheckup') }}" data-toggle="tooltip" title="Citas Checkup">
        <i class=" iconPlas-consultas"></i>
         </br>
        </a>
      </li>
      
      <!-- PAciantes------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'pacientes' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pacientes') }}" data-toggle="tooltip" title="Pacientes">
        <i class="iconPlas-paciente"></i>
         </br>
        </a>
      </li>
      
<!-- Perfi   -->
     <li class="nav-item {{ $menuParent == 'profiledoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('profiledoctores') }}" data-toggle="tooltip" title="Perfil">
        <i class=" iconPlas-iconCiclica75"></i>
          </br>
        </a>
      </li>
      

@endrole

   </ul>
  </div>
</div>