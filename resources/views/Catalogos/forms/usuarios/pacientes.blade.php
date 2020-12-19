@extends('layouts.appusuariosanexo37', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card-header text-center">
                <h3 class="card-title">
                </h3>
            </div>

            <!-- Inicio de elemento -->
                         

          <div class="card ">
            <div class="card-body ">
              <ul class="nav nav-pills nav-pills-warning" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Perfil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Direccion
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                    Informacion Adicional
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                    Pareja
                  </a>
                </li>
              </ul>
               <form id="myform" method="post" action='{{url("pacientes/edit/$ids") }}'  autocomplete="off" class="form-horizontal">
       @csrf
       @method('post')

               @forelse ($info as $fo)
              <div class="tab-content tab-space">
                <!-- primer metodo del panel-->
                <div class="tab-pane  active show" id="link1">
                <div class="row">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="name" id="name" number="true" required="true" value="{{ $fo->name }}" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="app_name" id="app_name" type="text" placeholder="Apellido Paterno" value="{{ $fo->app_name }}" required>
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Apellido Materno</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="apm_name" id="apm_name" type="text" placeholder="Apellido Materno" value="{{ $fo->apm_name }}" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Correo Electronico</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="email" id="email" type="email" placeholder="Correo Electronico" value="{{ $fo->email }}" required="true" email="true">
                    </div>
                  </div>
                </div>  
                
                <div class="row">
                  <label class="col-sm-2 col-form-label">Medio de comunicacion</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="sex" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="{{ $fo->medio }}">{{ $fo->medio }}</option>
                        <option value="Email">Email</option>
                        <option value="Telefono">Telefono</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="MSM">MSM</option>
                      </select>
                   </div>
                  </div>
                </div>
              </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Genero</label>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="sex" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                      </select>
                   </div>
                  </div>
                </div>
                <label class="col-sm-2 col-form-label">Telefono celular</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="phone" id="phone" type="text" placeholder="Telefono celular" value="{{ $fo->phone }}" required="true" number="true">
                    </div>
                  </div>
              </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control datepicker" name="fecha_nacimiento" id="fecha_nacimiento" type="text" placeholder="Fecha de nacimiento" required>
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Estado civil</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_edo_civil" id="id_edo_civil" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">SOLTER@</option>
                        <option value="2">CASAD@</option>
                        <option value="3">DIVORCIAD@</option>
                        <option value="4">VIUD@</option>
                      </select>
                   </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Telefono de casa</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="telefono" id="telefono" type="text" placeholder="Telefono de casa">
                    </div>
                  </div>
                 <!-- <label class="col-sm-2 col-form-label">Estado del paciente</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" id="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Bueno</option>
                        <option value="2">Malo</option>
                        <option value="3">Regular</option>
                      </select>
                   </div>
                    </div>
                  </div>-->
                </div>
              

                </div>
                <!-- segundo metodo del panel-->
                <div class="tab-pane" id="link2">
                 

                 <div class="row">
                  <label class="col-sm-2 col-form-label">Ciudad</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ciudad" id="ciudad" type="text" placeholder="Ciudad" value="" >
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Estado</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="id_estado_domicilio" id="id_estado_domicilio" type="text" placeholder="Estado" value="">
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <label class="col-sm-2 col-form-label">Colonia</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="colonia" id="colonia" type="text" placeholder="Colonia" value="" >
                    </div>
                  </div>
                </div>
                  

                <div class="row">
                  <label class="col-sm-2 col-form-label">Calle</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="calle" id="calle" type="text" placeholder="Calle" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">CP</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="cp" id="cp" type="text" placeholder="Codigo Postal" value="">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">No. de exterior</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="num_ext" id="num_ext" type="text" placeholder="No. de exterior" value="" >
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">No. de interior</label>
                  <div class="col-sm-2">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="num_int" id="num_int" type="text" placeholder="No. de interior" value="">
                    </div>
                  </div>
                </div>

                </div>
                <!-- tercer metodo del panel-->
                <div class="tab-pane" id="link3">
                 
                  <div class="row">
                  <label class="col-sm-2 col-form-label">Tipo de sangre</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="tipo_sangre" id="tipo_sangre" type="text" placeholder="Tipo de sangre" value="" >
                    </div>
                  </div>
                </div>
             
                <div class="row">
                  <label class="col-sm-2 col-form-label">Alergias</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="alergias" id="alergias" type="text" placeholder="Alergias" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Ocupacion</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ocupacion" id="ocupacion" type="text" placeholder="Ocupacion" value="" >
                    </div>
                  </div>
                </div>

                </div>

               <!-- cuarto metodo del panel-->
                <div class="tab-pane" id="link4">
               
                <div class="row">
                  <label class="col-sm-2 col-form-label">Nombre de la pareja</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="nombre_pareja" id="nombre_pareja" type="text" placeholder="Nombre de la pareja" value="" >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control datepicker" name="fch_nacimiento_pareja" id="fch_nacimiento_pareja" type="text" placeholder="Fecha de nacimiento" value="">
                      </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Ocupacion de la Pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="ocupacion_pareja" id="ocupacion_pareja" type="text" placeholder="Ocupacion de la Pareja" value="" >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">Celular de la pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="celular_pareja" id="celular_pareja" type="text" placeholder="Celular de la pareja" value="">
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Correo electronico de la pareja</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" name="email_pareja" id="email_pareja" type="text" placeholder="Correo electronico de la pareja" value="">
                    </div>
                  </div>
                </div>

                </div>
<button type="submit" class="btn btn-primary" align="left">Aceptar</button>

        </form>
              </div>
              
               @empty
                  <div class="card-header card-header-primary text-center">
                     <h4>No se encontraron Resultados</h4>
                  </div>
              @endforelse
  
            </div>
          </div>
       
                <!-- fin de cuarto elemento -->

           
        </div>
    </div>
@endsection

@push('js')
   
@endpush
