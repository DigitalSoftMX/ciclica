<style>
    .sidebar .nav i {
    color: #e6e6e6 !important;
}
</style>
<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #5F249F">
  <div class="logo" align="center" style="background-color: white">
   <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
   </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('admin_master')

<!-- Roll Recepcion   -------------------------------------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('procesoconsulta') }}" data-toggle="tooltip" title="Consulta">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>


<!-- Agendar Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}" data-toggle="tooltip" title="Agendar Citas">
          <i class="iconPlas-agenda-dia"></i>
         </br>
        </a>
      </li>
      
<!-- Agendar Estudios------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'agendarestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarestudios') }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agregar-consulta"></i>
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

<!-- Trabajadores------------------------------------------------->
     <li class="nav-item {{ $menuParent == 'userclient' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('userclient') }}" data-toggle="tooltip" title="Empleados">
          <i class="iconPlas-iconCiclica75"></i>
          </br>
        </a>
      </li>
	 
	  <li class="nav-item {{ $menuParent == 'anotaciones' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('anotaciones') }}" data-toggle="tooltip" title="Anotaciones">
        <i class="iconPlas-iconCiclica73"></i>
        </br>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'precioslaboratorios' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('precioslaboratorios') }}" data-toggle="tooltip" title="Precios Laboratorio">
              <i class="iconPlas-agregar-precio"></i>
            </br>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'preciosgenerales' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('preciosgenerales') }}" data-toggle="tooltip" title="Precios Generales">
              <i class="material-icons">dock</i>
            </br>
              </a>
            </li>
@endrole

@role('Caja')
<!--Caja--------------------------------------------------------------> 
     
      <li class="nav-item{{ $activePage == 'citascaja' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('citascaja') }}" data-toggle="tooltip" title="Consulta">
              <i class="iconPlas-agenda-dia"></i>
             </br>
             </a>
            </li>
           
            <li class="nav-item{{ $activePage == 'caja' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('caja') }}" data-toggle="tooltip" title="Caja">
              <i class="iconPlas-caja"></i>
             </br>
             </a>
            </li>
           
            <li class="nav-item{{ $activePage == 'deudas' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('deudas') }}" data-toggle="tooltip" title="Deudas">
              <i class="material-icons">clear_all</i>
            </br>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'facturacion' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('facturacion') }}" data-toggle="tooltip" title="Facturacion">
              <i class="iconPlas-precio"></i>
            </br>
              </a>
            </li>
            <!--<li class="nav-item{{ $activePage == 'preciosfarmacia' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('preciosfarmacia') }}">
              <i class="material-icons">dock</i>
            </br>
              </a>
            </li>-->
@endrole

@role('Doctor@')

<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Consulta -->
      <li class="nav-item {{ $menuParent == 'consultaprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('consultaprocesoconsultadoctores') }}" data-toggle="tooltip" title="Historial Clinico">
          <i class="iconPlas-consultas"></i>
         </br>
        </a>
      </li> 

<!-- Anexos -->
      <li class="nav-item {{ $menuParent == 'anexoprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('anexoprocesoconsultadoctores') }}" data-toggle="tooltip" title="SubEspecialidad">
          <i class="iconPlas-agregar-consulta"></i>
         </br>
        </a>
      </li> 
  
<!-- Historial -->
      <li class="nav-item {{ $menuParent == 'historialprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('historialprocesoconsultadoctores') }}" data-toggle="tooltip" title="Historial Medico">
          <i class="iconPlas-estudios"></i>
         </br>
        </a>
      </li> 

<!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('estudiosprocesoconsultadoctores') }}" data-toggle="tooltip" title="Estudios">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li> 

<!-- Receta consulta -->
      <li class="nav-item {{ $menuParent == 'recetaprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetaprocesoconsultadoctores') }}" data-toggle="tooltip" title="Consulta">
          <i class="iconPlas-recetas"></i>
         </br>
        </a>
      </li> 

<!-- Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarcitaprocesoconsultadoctores') }}" data-toggle="tooltip" title="Agendar Citas">
          <i class="iconPlas-iconCiclica73"></i>
         </br>
        </a>
      </li> 
      
<!-- Citas laboratorio------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudios/edit/0") }}" data-toggle="tooltip" title="Agendar Citas Laboratorio">
          <i class="iconPlas-agregar-estudio"></i>
         </br>
        </a>
      </li>
      
<!-- Citas imagenologia------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasimagenologia' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudiosimagenologia/edit/0") }}" data-toggle="tooltip" title="Agendar Citas Imagenologia">
          <i class="iconPlas-agregar-img"></i>
         </br>
        </a>
      </li>

@endrole

@role('Laboratorio')
      <!-- Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citaslaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}" >
          <i class="iconPlas-agregar-estudio-lab"></i>
         </br>
        </a>
      </li> 
      <!--<li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('consultarprocesoconsultalaboratorio') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li> -->
      
      <li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('laboratorio') }}" >
          <i class="iconPlas-agenda-per-lab"></i>
         </br>
        </a>
      </li>
      
@endrole

@role('Imagenologia')
      <!-- Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citaslaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="iconPlas-agenda-dia"></i>
         </br>
        </a>
      </li> 
      <!--<li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('consultarprocesoconsultalaboratorio') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li> -->
      
      <li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('imagenologia') }}">
          <i class="iconPlas-imagenologia"></i>
         </br>
        </a>
      </li>
      
@endrole

@role('Paciente')

      <li class="nav-item {{ $menuParent == 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>

      <li class="nav-item {{ $menuParent == 'calendars' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}" data-toggle="tooltip" title="Consultas"> 
          <i class="iconPlas-agenda-dia"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'agendarestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarestudios') }}" data-toggle="tooltip" title="Solicitar Estudios">
          <i class="iconPlas-agregar-estudio"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudios/0") }}" data-toggle="tooltip" title="Consultar Estudios">
          <i class="iconPlas-agregar-consulta"></i>
         </br>
        </a>
      </li> 
      
      <!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudiosimagenologia/0") }}" data-toggle="tooltip" title="Agendar Estudio de Imagenologia">
          <i class="iconPlas-agregar-img"></i>
         </br>
        </a>
      </li> 
      
       <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("laboratorio") }}" data-toggle="tooltip" title="Consultar Estudios de Laboratorio">
          <i class="iconPlas-laboratorio"></i>
         </br>
        </a>
      </li> 
      
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("imagenologia") }}" data-toggle="tooltip" title="Consultar Estudios de ">
          <i class="iconPlas-imagenologia"></i>
         </br>
        </a>
      </li> 
      
<!-- Recetas   -->
    <li class="nav-item {{ $menuParent == 'recetas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetas') }}" data-toggle="tooltip" title="Mis recetas">
          <i class="iconPlas-recetas"></i>
         </br>
        </a>
      </li>
      
      <!-- PAciantes------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'pacientes' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pacientes') }}" data-toggle="tooltip" title="Paciente">
        <i class="iconPlas-paciente"></i>
         </br>
        </a>
      </li>

@endrole

@role('Enfermera')

<!-- Signos Vitales   -->
    <li class="nav-item {{ $menuParent == 'recetascitas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetascitas') }}" data-toggle="tooltip" title="Toma de Signos Vitales">
          <i class=" iconPlas-agenda-dia"></i>
         </br>
        </a>
      </li>

<!-- Recetas   -->
    <li class="nav-item {{ $menuParent == 'recetas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetas') }}" data-toggle="tooltip" title="Recetas">
          <i class="iconPlas-recetas"></i>
         </br>
        </a>
      </li>
      
       <li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('laboratorio') }}" data-toggle="tooltip" title="Consulta Laratorios">
          <i class="iconPlas-estudio-lab"></i>
         </br>
        </a>
      </li>
      
      <li class="nav-item {{ $menuParent == 'consultalaboratorio' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('imagenologia') }}" data-toggle="tooltip" title="Consulta Imagenologia">
          <i class="iconPlas-agregar-img"></i>
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
      
       <!-- checkup------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'citascheckup' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('citascheckup') }}" data-toggle="tooltip" title="Checkup">
        <i class="iconPlas-consultas"></i>
         </br>
        </a>
      </li>
      


@endrole

@role('Asistente')

<!-- Roll Recepcion   -------------------------------------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('procesoconsulta') }}" data-toggle="tooltip" title="Consulta">
          <i class="iconPlas-estudios"></i>
         </br>
        </a>
      </li>

<!-- Agendar Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}" data-toggle="tooltip" title="Agendar Citas">
          <i class="iconPlas-agregar-consulta"></i>
         </br>
        </a>
      </li>

 <!-- Citas laboratorio------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudios/edit/0") }}" data-toggle="tooltip" title="Agendar Estudios">
          <i class="iconPlas-agregar-estudio-lab"></i>
         </br>
        </a>
      </li>
      
<!-- Citas imagenologia------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citasimagenologia' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("agendarestudiosimagenologia/edit/0") }}" data-toggle="tooltip" title="Agendar Estudios de Imagenologia">
          <i class="iconPlas-agregar-img"></i>
         </br>
        </a>
      </li>
      
<!-- Agendar Estudios------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'agendarestudios' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarestudios') }}" data-toggle="tooltip" title="Consulta">
          <i class=" iconPlas-agregar-consulta"></i>
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
      
<!-- Precios------------------------------------------------->
      
      <li class="nav-item{{ $activePage == 'preciosgenerales' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('preciosgenerales') }}" data-toggle="tooltip" title="Precios">
              <i class=" iconPlas-precio"></i>
            </br>
              </a>
            </li>
      
            <li class="nav-item{{ $activePage == 'precioslaboratorios' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('precioslaboratorios') }}" data-toggle="tooltip" title="Precios Laboratorio">
              <i class=" iconPlas-precio"></i>
            </br>
              </a>
            </li>
            

@endrole


   </ul>
  </div>
</div>