@extends('layouts.app', ['activePage' => 'form_wizard', 'menuParent' => 'forms', 'titlePage' => __('Wizard Forms')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-10 col-10 mr-auto ml-auto">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card card-wizard" data-color="rose" id="wizardProfile">
                        <form method="post" action="{{url('procesoconsultas/add') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')
                        <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                            <div class="card-header text-center">
                                <h3 class="card-title">
                                    Documentos 1-22
                                </h3>
                            </div>



                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="consu">
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Anexo1" data-toggle="modal" data-target=".docs-anexo1-modal-lg"  class="btn btn-rose">{{ __('Anexo 1') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Anexo2" data-toggle="modal" data-target=".docs-anexo2-modal-lg" class="btn btn-rose">{{ __('Anexo 2') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexotres-modal-lg" class="btn btn-rose">{{ __('Anexo 3') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo4-modal-lg" class="btn btn-rose">{{ __('Anexo 4') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo5-modal-lg" class="btn btn-rose">{{ __('Anexo 5') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo6-modal-lg" class="btn btn-rose">{{ __('Anexo 6') }}</button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo7-modal-lg" class="btn btn-rose">{{ __('Anexo 7') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo8-modal-lg" class="btn btn-rose">{{ __('Anexo 8') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo9-modal-lg" class="btn btn-rose">{{ __('Anexo 9') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo10-modal-lg" class="btn btn-rose">{{ __('Anexo 10') }}</button>
                                            </div>
                                            <!--<div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo11-modal-lg" class="btn btn-rose">{{ __('Anexo 11') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo12-modal-lg" class="btn btn-rose">{{ __('Anexo 12') }}</button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo13-modal-lg" class="btn btn-rose">{{ __('Anexo 13') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo14-modal-lg" class="btn btn-rose">{{ __('Anexo 14') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo15-modal-lg" class="btn btn-rose">{{ __('Anexo 15') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo16-modal-lg" class="btn btn-rose">{{ __('Anexo 16') }}</button>
                                            </div>
   -->
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo17-modal-lg" class="btn btn-rose">{{ __('Anexo 17') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo18-modal-lg" class="btn btn-rose">{{ __('Anexo 18') }}</button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo19-modal-lg" class="btn btn-rose">{{ __('Anexo 19') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo20-modal-lg" class="btn btn-rose">{{ __('Anexo 20') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo21-modal-lg" class="btn btn-rose">{{ __('Anexo 21') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo22-modal-lg" class="btn btn-rose">{{ __('Anexo 22') }}</button>
                                            </div>
<!--                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo23-modal-lg" class="btn btn-rose">{{ __('Anexo 23') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo24-modal-lg" class="btn btn-rose">{{ __('Anexo 24') }}</button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo25-modal-lg" class="btn btn-rose">{{ __('Anexo 25') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo26-modal-lg" class="btn btn-rose">{{ __('Anexo 26') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo27-modal-lg" class="btn btn-rose">{{ __('Anexo 27') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo28-modal-lg" class="btn btn-rose">{{ __('Anexo 28') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo29-modal-lg" class="btn btn-rose">{{ __('Anexo 29-33') }}</button>
                                            </div>

                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo34-modal-lg" class="btn btn-rose">{{ __('Anexo 34') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo35-modal-lg" class="btn btn-rose">{{ __('Anexo 35') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo36-modal-lg" class="btn btn-rose">{{ __('Anexo 36') }}</button>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">

                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo37-modal-lg" class="btn btn-rose">{{ __('Anexo 37') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo37_1-modal-lg" class="btn btn-rose">{{ __('Anexo 37.1') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo35-modal-lg" class="btn btn-rose">{{ __('Anexo 38') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo39-modal-lg" class="btn btn-rose">{{ __('Anexo 39') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo40-modal-lg" class="btn btn-rose">{{ __('Anexo 40') }}</button>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="button" name="jobb" value="Codes" data-toggle="modal" data-target=".docs-anexo41-modal-lg" class="btn btn-rose">{{ __('Anexo 41') }}</button>
                                            </div>---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

   
    @include("Catalogos.anexos.anexo1prueba")
    @include("Catalogos.anexos.anexo2prueba")
    @include("Catalogos.anexos.anexosprueba")

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
