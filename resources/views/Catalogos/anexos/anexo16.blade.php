@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Consulta')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-8 col-12 mr-auto ml-auto">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card card-wizard" data-color="rose" id="wizardProfile">
                        <form method="post" action="" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')
                        <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                            <div class="card-header text-center">
                                <h3 class="card-title">
                                    Anexo 4
                                </h3>
                            </div>


                            <div class="wizard-navigation">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#consu" data-toggle="tab" role="tab">
                                            Consulta
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#perfil" data-toggle="tab" role="tab">
                                            Perfil
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                                            Historial Clinica
                                        </a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#address" data-toggle="tab" role="tab">
                                            Historial Medico
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <a href="{{ route('anexodocu.index') }}" class="btn btn-sm btn-rose">{{ __('Atras') }}</a>
                                        </div>
                                    </div>

                                    <input name="cita" id="cita" type="hidden" value="">
                                    <input name="id_paciente" id="paciente" type="hidden" value="">
                                    <input name="id_doctor" id="dcctor" type="hidden" value="">
                                    <div class="tab-pane active" id="consu">

                                        <div class="row" >
                                            <div class="col-md-5 mr-auto ml-auto">
                                                <div class="card ">
                                                    <div class="card-header card-header-rose card-header-text">
                                                        <div class="card-icon">
                                                            <i class="material-icons">today</i>
                                                        </div>
                                                        <h4 class="card-title">Fecha Padecimiento</h4>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control datepicker" value="" name="fechaP">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 mr-auto ml-auto">
                                                <div class="card ">
                                                    <div class="card-header card-header-rose card-header-text">
                                                        <div class="card-icon">
                                                            <i class="material-icons">today</i>
                                                        </div>
                                                        <h4 class="card-title">Fecha Consulta</h4>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control " value="}" name="fechaC">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">{{ __('Padecimiento actual') }}</label>
                                            <div class="col-sm-7">
                                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                    <textarea  rows="4" class="form-control{{ $errors->has('descripcionP') ? ' is-invalid' : '' }}" name="descripcionP" id="input-description" type="text"   aria-required="true">{{ old('Padecimiento actual') }}</textarea>
                                                    @include('alerts.feedback', ['field' => 'description'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <!--<label class="col-sm-2 col-form-label">Nombre</label>-->

                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="exampleTalla" class="bmd-label-floating">Talla</label>
                                                <input class="form-control" name="talla" id="talla" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="examplePeso" class="bmd-label-floating">Peso</label>
                                                <input class="form-control" name="peso" id="peso" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="exampleTemp" class="bmd-label-floating">Temp(°C)</label>
                                                <input class="form-control" name="temp" id="temp" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="exampleTalla" class="bmd-label-floating">T.A</label>
                                                <input class="form-control" name="ta" id="ta" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="exampleTalla" class="bmd-label-floating">F.C</label>
                                                <input class="form-control" name="fc" id="fc" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                            <div class="col-md-1 mr-auto ml-auto">
                                                <label for="exampleTalla" class="bmd-label-floating">F.R</label>
                                                <input class="form-control" name="fr" id="fr" type="text" placeholder="" value=""  aria-required="true">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <label class="col-sm-2 col-form-label"><small>Exporacion Fisica:</small></label>
                                            <div class="col-sm-7">
                                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                    <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="expo_me" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                    @include('alerts.feedback', ['field' => 'description'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <label class="col-sm-2 col-form-label"><small>Tratamiento:</small></label>
                                            <div class="col-sm-7">
                                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                    <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                                    @include('alerts.feedback', ['field' => 'description'])
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="icon">
                                                                <i class="fa fa-pencil"></i>
                                                            </div>
                                                            <h6>Agendar Estudios</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Code">
                                                            <div class="icon">
                                                                <i class="fa fa-terminal"></i>
                                                            </div>
                                                            <h6>Nueva Cita</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Develop">
                                                            <div class="icon">
                                                                <i class="fa fa-laptop"></i>
                                                            </div>
                                                            <h6>Ver resultados</h6>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="tab-pane " id="perfil">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Nombre</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group bmd-form-group">
                                                            <input class="form-control" name="name" id="name" type="text" placeholder="" value="" required="true" aria-required="true">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Apellido Paterno</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group bmd-form-group">
                                                            <input class="form-control" name="app_name" id="app_name" type="text" placeholder="" value="" required="true">
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-2 col-form-label">Apellido Materno</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group bmd-form-group">
                                                            <input class="form-control" name="apm_name" id="apm_name" type="text" placeholder="" value="" required="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label class="col-sm-2 col-form-label">Nombre</label>
                                                    <div class="col-sm-4">
                                                        <div class="form-group bmd-form-group">
                                                            <input class="form-control" name="name" id="name" type="text" placeholder="" value="" required="true" aria-required="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 mt-3">
                                                <div class="input-group form-control-lg">
                                                    <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">email</i>
                          </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="bmd-label-floating">Correo electronico</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="" value="" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="tab-pane" id="address">
                                        <div class="row justify-content-center">
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label label-checkbox">Checkboxes and radios</label>
                                                <div class="col-sm-10 checkbox-radios">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""> First Checkbox
                                                            <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""> Second Checkbox
                                                            <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked> First Radio
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> Second Radio
                                                            <span class="circle">
                        <span class="check"></span>
                      </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <label>Street Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Street No.</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="form-group select-wizard">
                                                    <label>Country</label>
                                                    <select class="selectpicker" data-size="7" data-style="select-with-transition" title="Single Select">
                                                        <option value="Afghanistan"> Afghanistan </option>
                                                        <option value="Albania"> Albania </option>
                                                        <option value="Algeria"> Algeria </option>
                                                        <option value="American Samoa"> American Samoa </option>
                                                        <option value="Andorra"> Andorra </option>
                                                        <option value="Angola"> Angola </option>
                                                        <option value="Anguilla"> Anguilla </option>
                                                        <option value="Antarctica"> Antarctica </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="mr-auto">
                                    <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Atras">
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-next btn-fill btn-rose btn-wd" name="next" value="Siguiente">
                                    <input type="button" class="btn btn-finish btn-fill btn-rose btn-wd" name="finish" value="Finish" style="display: none;">
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-rose">{{ __('Guardar ') }}</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Initialise the wizard
            demo.initMaterialWizard();
            setTimeout(function() {
                $('.card.card-wizard').addClass('active');
            }, 600);
        });
    </script>
@endpush


@push('js')
    <script>
        $(document).ready(function() {
            // initialise Datetimepicker and Sliders
            md.initFormExtendedDatetimepickers();
            if ($('.slider').length != 0) {
                md.initSliders();
            }
        });
    </script>
@endpush
