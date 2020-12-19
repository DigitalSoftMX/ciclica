@extends('layouts.app', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{ url('anexos') }}" class="btn btn-sm btn-rose">{{ __('Atras') }}</a>
                </div>
            </div>
            <div class="card-header text-center">
                <h3 class="card-title">
                    Anexo 39
                </h3>
            </div> 

            <!-- Inicio de elemento -->
            <div class="card ">
            <div class="card-body ">
              <div class="tab-content tab-space">
                <!-- primer metodo del panel-->
                <div class="tab-pane  active show" id="link1">
                <div class="row">
                
               <label class="col-sm-12 col-form-label text-center
                ">Cuestionario para la paciente</label>

                
                <label class="col-sm-2 col-form-label">Origen Étnico</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Latina(Mexicana, Centroamericana)</option>
                        <option value="2">Cáucasico(Europeo, Hispánico, Oriente Medio, África del Norte)</option>
                        <option value="2">Negro(Africano, Caribeño, Afroamericano)</option>
                        <option value="2">Asiatico(India, Pakistan, Bangladesh)</option>
                        <option value="2">Este Asiático - Oriental(Chino, Coreano, Japones)</option>
                      </select>
                   </div>
                    </div>
                  </div>

                 <label class="col-sm-2 col-form-label">Otra</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               
               <label class="col-sm-2 col-form-label">Fecha última mestruación</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="date" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               
                <label class="col-sm-2 col-form-label">Como considera su mestruación?</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Desconoce</option>
                        <option value="2">Regular (FUM segura)</option>
                        <option value="2">Regular (FUM insierta o no esta segura)</option>
                        <option value="2">Irregular</option>
                      </select>
                   </div>
                    </div>
                  </div>

                 <label class="col-sm-12 col-form-label text-center
                ">¿Existe antecedente de algun hijo/feto previo con alguna cromosomopatia?</label>


               <label class="col-sm-2 col-form-label">TRISOMIA 21</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="date" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

              <label class="col-sm-2 col-form-label">TRISOMIA 18</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="date" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

                <label class="col-sm-2 col-form-label">TRISOMIA 13</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="date" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

                <label class="col-sm-2 col-form-label label-checkbox">¿Existe antecedente de algun hijo/feto previo con algun efecto o malformacion?</label>
                <div class="col-sm-4 checkbox-radios">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> Si
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> No
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                 </div>
                </div>

                <label class="col-sm-2 col-form-label">Cual?</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               
                <label class="col-sm-2 col-form-label">Total de Embarazos</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

                <label class="col-sm-2 col-form-label">Partos</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>


                <label class="col-sm-2 col-form-label">Cesareas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

                <label class="col-sm-2 col-form-label">Abortos</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>


                <label class="col-sm-2 col-form-label">Ectopicos</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               

                <label class="col-sm-2 col-form-label">Molas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>

 <label class="col-sm-2 col-form-label label-checkbox">MUERTE IN ÚTERO ANTES DE LAS 16 SEMANAS</label>
                <div class="col-sm-4 checkbox-radios">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> Si
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> No
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                 </div>
                </div>


 <label class="col-sm-2 col-form-label label-checkbox">MUERTE IN ÚTERO DESPUES DE LAS 16 SEMANAS</label>
                <div class="col-sm-4 checkbox-radios">
                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> Si
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                     <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> No
                      <span class="circle">
                        <span class="check"></span>
                      </span>
                    </label>
                 </div>
                </div>

               

                <label class="col-sm-2 col-form-label">A las cuentas semanas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
            

                            </form>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fin de cuarto elemento -->

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initGoogleMaps();
        });
    </script>
@endpush
