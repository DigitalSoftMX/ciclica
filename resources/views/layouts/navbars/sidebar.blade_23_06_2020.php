<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
   <img src="{{ asset('material') }}/img/logociclicasolo.png" width="50%"/>
   </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('admin_master')

<!-- Roll Recepcion   -------------------------------------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('procesoconsulta') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>


<!-- Agendar Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

<!--Caja--------------------------------------------------------------> 
      <li class="nav-item{{ $activePage == 'caja' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('caja') }}">
              <i class="material-icons">receipt</i>
             </br>
             </a>
            </li>
           
            <li class="nav-item{{ $activePage == 'deudas' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('deudas') }}">
              <i class="material-icons">clear_all</i>
            </br>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'facturacion' ? ' active' : '' }} ">
              <a class="nav-link" href="{{ url('facturacion') }}">
              <i class="material-icons">dock</i>
            </br>
              </a>
            </li>

<!-- PAciantes------------------------------------------------->
       <li class="nav-item {{ $menuParent == 'pacientes' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('pacientes') }}">
        <i><img style="width:25px" src="{{ asset('material') }}/img/thumbnail_Pacientes.png"</i>
         </br>
        </a>
      </li>

<!-- Trabajadores------------------------------------------------->
     <li class="nav-item {{ $menuParent == 'userclient' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('userclient') }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/thumbnail_Perfil.png"</i>
          </br>
        </a>
      </li>

@endrole

@role('Doctor@')

<!-- Roll Doctores   -------------------------------------------------------------------------------->

<!-- Proceso consulta -->

 @if(auth()->user()->anex1 != null)
      <li class="nav-item {{ $menuParent == 'registrarprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('registrarprocesoconsultadoctores') }}">
          <i class="material-icons">vertical_split</i>
         </br>
        </a>
      </li> 
 @endif

<!-- Anexos -->
      <li class="nav-item {{ $menuParent == 'anexoprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('anexoprocesoconsultadoctores') }}">
          <i class="material-icons">ballot</i>
         </br>
        </a>
      </li> 
  
<!-- Historial -->
      <li class="nav-item {{ $menuParent == 'historialprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('historialprocesoconsultadoctores') }}">
          <i class="material-icons">folder_shared</i>
         </br>
        </a>
      </li> 

<!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('estudiosprocesoconsultadoctores') }}">
          <i class="material-icons">healing</i>
         </br>
        </a>
      </li> 

<!-- Receta consulta -->
      <li class="nav-item {{ $menuParent == 'recetaprocesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetaprocesoconsultadoctores') }}">
          <i class="material-icons">rate_review</i>
         </br>
        </a>
      </li> 


<!-- Citas------------------------------------------------->
      <li class="nav-item {{ $menuParent == 'citas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('agendarcitaprocesoconsultadoctores') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li> 

@endrole

@role('Paciente')

<!-- Agendar Citas   -->
      <li class="nav-item {{ $menuParent == 'calendar' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('calendar') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

<!-- Citas   -->
     <li class="nav-item {{ $menuParent == 'procesoconsulta' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('procesoconsulta') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

<!-- Recetas   -->
    <li class="nav-item {{ $menuParent == 'recetas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('recetas') }}">
          <i class="material-icons">date_range</i>
         </br>
        </a>
      </li>

@endrole

   </ul>
  </div>
</div>