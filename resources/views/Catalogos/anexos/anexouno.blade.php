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
                    Anexo 1
                </h3>
            </div>

            <!-- Inicio de elemento -->
            <div class="card ">
            <div class="card-body ">
              <ul class="nav nav-pills nav-pills-warning" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                    Antecendentes Heredo Familiares
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                    Antecedentes personales no patologicos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                    Antecedentes personales patologicos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                    Antecedentes gineco-obstetros
                  </a>
                </li>
              </ul>
              <div class="tab-content tab-space">
                <!-- primer metodo del panel-->
                <div class="tab-pane  active show" id="link1">
                <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Hipertensión</label>
                <div class="col-sm-10 checkbox-radios">
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
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Cancer</label>
                <div class="col-sm-10 checkbox-radios">
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
                <label class="col-sm-2 col-form-label">Ginecológico</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Edad de aparición</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Otros</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               <label class="col-sm-2 col-form-label">Edad de aparición</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
              </div>
              
              <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Diabetes Mellitus</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Patología Tiroidea</label>
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
                <label class="col-sm-2 col-form-label">Otros</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
              </div> 

                </div>
                <!-- segundo metodo del panel-->
                <div class="tab-pane" id="link2">
                 <div class="row">
                 <label class="col-sm-2 col-form-label">Tipo de Sangre</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               </div>
               <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Ejercicio</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Tabaquismo</label>
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
              </div> 
         <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Alcoholismo</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Drogras</label>
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
              </div>
                       <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Extreñimiento</label>
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
              </div> 
 

                </div>
                <!-- tercer metodo del panel-->
                <div class="tab-pane" id="link3">
                 
                  <div class="row">
                 <label class="col-sm-2 col-form-label">Alergias</label>
                  <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
               </div>
               <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Cirugías</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Transfuncionales</label>
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
              </div> 
         <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Infecciosas</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Crónico degenerativas</label>
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
              </div>
                <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Traumatismos</label>
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
                <label class="col-sm-2 col-form-label label-checkbox">Ginecológicos</label>
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
               </div> 
 
                </div>

               <!-- cuarto metodo del panel-->
                <div class="tab-pane" id="link4">
               <div class="row">
               <label class="col-sm-2 col-form-label">Menarca</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Ritmo</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>

               <div class="row">
                    <label class="col-sm-2 col-form-label">Cantidad</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Escaso</option>
                        <option value="2">Normal</option>
                        <option value="2">Abundante</option>
                      </select>
                   </div>
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Dolor</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Leve</option>
                        <option value="2">Moderado</option>
                        <option value="2">Severo</option>
                      </select>
                   </div>
                    </div>
                  </div>
              </div>
                
               <div class="row">
                    <label class="col-sm-2 col-form-label">No. de Toallas por dia</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>
                  <label class="col-sm-2 col-form-label">Tratamiento</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
              </div>
              <div class="row">
               <label class="col-sm-2 col-form-label">FUM</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">IVSA</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
                    <label class="col-sm-2 col-form-label">Parejas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>
                    <label class="col-sm-2 col-form-label">MPF</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Actual</option>
                        <option value="2">Previos</option>
                      </select>
                   </div>
                    </div>
                  </div>
                </div>

                   <div class="row">
               <label class="col-sm-2 col-form-label">Gestas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Cesáreas</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>

                 <div class="row">
               <label class="col-sm-2 col-form-label">Partos</label>
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
                 <label class="col-sm-2 col-form-label">Ectópicos</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>

              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">G1</h5>
              </div>
                     <div class="row">
               <label class="col-sm-2 col-form-label">Año</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Edad mat.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Sexo</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Peso</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
               <label class="col-sm-2 col-form-label">Resol</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Comp</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
                 <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>                 
                </div>
                   <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                <div class="col-sm-10 checkbox-radios">
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
              </div>



             <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">G2</h5>
              </div>
                     <div class="row">
               <label class="col-sm-2 col-form-label">Año</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Edad mat.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Sexo</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Peso</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
               <label class="col-sm-2 col-form-label">Resol</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Comp</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
                 <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>                 
                </div>
                   <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                <div class="col-sm-10 checkbox-radios">
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
              </div>

              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">G3</h5>
              </div>
                     <div class="row">
               <label class="col-sm-2 col-form-label">Año</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Edad mat.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Sexo</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Peso</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
               <label class="col-sm-2 col-form-label">Resol</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Comp</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
                 <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>                 
                </div>
                   <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                <div class="col-sm-10 checkbox-radios">
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
              </div>


              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">G4</h5>
              </div>
              <div class="row">
               <label class="col-sm-2 col-form-label">Año</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Edad mat.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Dur. de emb.</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Sexo</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
             <div class="row">
               <label class="col-sm-2 col-form-label">Peso</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Vivo y Sano</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
               <label class="col-sm-2 col-form-label">Resol</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Comp</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
               <div class="row">
                 <label class="col-sm-2 col-form-label">Lactancia #Meses</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>                 
                </div>
                   <div class="row">
                <label class="col-sm-2 col-form-label label-checkbox">Meses</label>
                <div class="col-sm-10 checkbox-radios">
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
              </div>


                <div class="row">
               <label class="col-sm-2 col-form-label">Citología Cervical</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">DOCMA</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
              <div class="row">
               <label class="col-sm-2 col-form-label">Autoexploración</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">USG</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
              <div class="row">
               <label class="col-sm-2 col-form-label">Mastografía</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Menopausia</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
              <div class="row">
               <label class="col-sm-2 col-form-label">Antecedentes de Infertilidad</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <input class="form-control" type="text" name="" id="" required="true" aria-required="true">
                    </div>
                  </div>
                </div>


              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Esquema de Vacunacion VPH</h5>
              </div>
              
             <div class="row">
                  <label class="col-sm-2 col-form-label"></label>
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
                   <label class="col-sm-2 col-form-label">Numero de Dosis</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>         
                        <option value="7">7</option>         
                        <option value="8">8</option>         
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                   </div>
                    </div>
                  </div>  
              </div>

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Padecimiento Actual</h5>
            </div>
             
            <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Padecimiento Actual</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>
            
             <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Exploración Fisica</h5>
            </div>
           
            <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Exploración Fisica</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Estudios de Gabinete y Laboratorio</h5>
            </div>
           
            <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Estudios de Gabinete y Laboratorio</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Impresión Diagnostica</h5>
            </div>
           
              <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Impresión Diagnostica</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tratamiento</h5>
            </div>
           
              <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Tratamiento</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>

            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Plan Médico</h5>
            </div>
           
              <div class="row ">
                    <label class="col-sm-2 col-form-label"><small>Plan Médico</small></label>
                    <div class="col-sm-10">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
              </div>
            
             <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Pronóstico</h5>
            </div>
           
            <div class="row ">
                 <label class="col-sm-2 col-form-label">Para la Vida</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Bueno</option>
                        <option value="2">Reservado</option>
                        <option value="3">Malo</option>
                      </select>
                   </div>
                    </div>
                  </div>
                 <label class="col-sm-2 col-form-label">Para la Función</label>
                  <div class="col-sm-4">
                    <div class="form-group bmd-form-group">
                      <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0"><select class="selectpicker col-sm-12 pl-0 pr-0" name="id_estado" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="1">Bueno</option>
                        <option value="2">Reservado</option>
                        <option value="3">Malo</option>
                      </select>
                   </div>
                    </div>
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
