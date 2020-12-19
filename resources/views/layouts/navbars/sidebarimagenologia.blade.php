<div class="sidebar" data-color="purple" data-background-color="" style="background-color: #572a86">
  <div class="logo" align="center" style="background-color: white">
    <img src="{{ asset('material') }}/img/logociclicasolo.png" width="80px" height="80px" style="padding: 0px; width: 80px; height: 80px;"/>
  </div>
  <div class="sidebar-wrapper">
    
    <ul class="nav">
         
@role('Imagenologia')

<!-- ------------------------------------------------->

     <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultaimagenologia34/$id") }}" data-toggle="tooltip" title="Consulta de Imagenologia Anexo 35">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>

     <li class="nav-item {{ $menuParent == 'procesoconsultadoctores' ? 'active' : '' }}">
        <a class="nav-link" href="{{ url("consultarprocesoconsultaimagenologia35/$id") }}" data-toggle="tooltip" title="Consulta de Imagenologia Anexo 35">
          <i class="iconPlas-resultados"></i>
         </br>
        </a>
      </li>
      
      <!-- Estudios -->
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("addestudiosimagenologia/$id") }}" data-toggle="tooltip" title="Agendar Estudios de Imagenologia">
          <i class="iconPlas-agregar-img"></i>
         </br>
        </a>
      </li> 
      
      <!-- Costo -->
      <!--<li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("agendarcaja/edit/$id") }}">
          <i class=" iconPlas-agregar-precio"></i>
         </br>
        </a>
      </li> 
      -->
      
      <li class="nav-item {{ $menuParent == 'estudiosprocesoconsultadoctores' ? 'active' : '' }}">
         <a class="nav-link" href="{{ url("imagenologia") }}" data-toggle="tooltip" title="Imagenologia">
          <i class="iconPlas-regresar"></i>
         </br>
        </a>
      </li> 
      

@endrole

   </ul>
  </div>
</div>