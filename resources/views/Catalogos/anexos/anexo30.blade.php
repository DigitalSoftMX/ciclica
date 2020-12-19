@extends('layouts.app', ['activePage' => 'form_regular', 'menuParent' => 'forms', 'titlePage' => __('Regular Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="card-header text-center">
                <h3 class="card-title">
                    Anexo 30
                </h3>
            </div>
            <div class="row">
                <div class="col-md-10 text-right">
                    <a href="{{ route('anexodocu2.index') }}" class="btn btn-sm btn-rose">{{ __('Atras') }}</a>
                </div>
            </div>


            <!-- Inicio de elemento -->
            <!-- segundo elemento -->
            <!-- Inicio de elemento -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">battery_std</i>
                            </div>
                            <h4 class="card-title"></h4>
                        </div>
                        <br>

                        <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header card-header-rose card-header-text">
                                    <div class="card-icon">
                                        <i class="material-icons">av_timer</i>
                                    </div>
                                    <h4 class="card-title">Hora de Recoleccion de muestra:</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group">
                                        <input type="text" class="form-control timepicker" value="10/05/2016">
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-icon">
                                            <i class="material-icons">av_timer</i>
                                        </div>
                                        <h4 class="card-title">Hora de procesado de la muestra:</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <input type="text" class="form-control timepicker" value="10/05/2016">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-icon">
                                            <i class="material-icons">library_books</i>
                                        </div>
                                        <h4 class="card-title">Fecha de Estudio:</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker" value="10/06/2018">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="card-header card-header-rose card-header-text">
                                        <div class="card-icon">
                                            <i class="material-icons">library_books</i>
                                        </div>
                                        <h4 class="card-title">Fecha de Impresión</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker" value="10/06/2018">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                            <form method="#" action="#">

                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <label for="examplePaciente" class="bmd-label-floating">Paciente</label>
                                        <input type="text" class="form-control" id="examplePaciente">
                                    </div>

                                    <div class="col-md-1">
                                        <label for="exampleEdad" class="bmd-label-floating">Edad</label>
                                        <input type="text" class="form-control" id="exampleEdad">
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <label for="exampleEmail" class="bmd-label-floating">Conyugue</label>
                                        <input type="email" class="form-control" id="exampleEmail">
                                    </div>

                                    <div class="col-md-1">
                                        <label for="exampleEmail" class="bmd-label-floating">Edad</label>
                                        <input type="email" class="form-control" id="exampleEmail">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <label for="exampleEmail" class="bmd-label-floating">Médico Solicitante</label>
                                        <input type="email" class="form-control" id="exampleEmail">
                                    </div>
                                </div>
                                <br>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" >
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-header-icon card-header-rose">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title ">INSEMINACION ARTIFICIAL HUMANA</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Pre-Capacitación
                                    </th>
                                    </thead>
                                    <BR>
                                    <thead class=" text-primary">
                                    <th>
                                        Parámetro Evaluado
                                    </th>
                                    <th>
                                        Resultado
                                    </th>
                                    <th>
                                        Valores de Referencia(LIR)*
                                    </th>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            Dias de abstinencia sexual
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# dias">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="2-7 dias" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Licuefacción
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# min">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="20-60 min" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Viscosidad
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# cm">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Normal (Filamentro <2 cm)" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Volumen
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# ml">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="1.5-6 ml" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Aspecto
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="#">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="Amarillento/ Gris opalecente/ Blanquecino" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Concentracion espermatica por mililitro
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# ml">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="15 x 10/ml" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Concentración espermática total
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# millones:">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="39 millones" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Movilidad total (A+B+C)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="40%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Movilidad progresiva (A+B)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="32%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Morfología (Normales)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="4%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <thead class=" text-primary">
                                    <th>
                                        Post-Capacitación
                                    </th>
                                    </thead>
                                    <BR>
                                    <thead class=" text-primary">
                                    <th>
                                        Parámetro Evaluado
                                    </th>
                                    <th>
                                        Resultado
                                    </th>
                                    <th>
                                        Valores de Referencia(LIR)*
                                    </th>
                                    </thead>
                                    <tr>
                                        <td>
                                            Volumen
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# ml">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="0.5-1 ml" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Concetración espermática por mililitro
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="# ml">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="15 x 10 / ml" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Movilidad total (A+B+C)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="40%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Movilidad progresiva (A+B)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="32%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            Morfología (Normales)
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="%">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="4%" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row ">
                                <label class="col-sm-2 col-form-label"><small>Observaciones adicionales:</small></label>
                                <div class="col-sm-9">
                                    <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <textarea  rows="2" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                                        @include('alerts.feedback', ['field' => 'description'])
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin de seguno elemento -->



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


