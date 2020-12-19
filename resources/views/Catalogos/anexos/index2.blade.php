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
                                    Documentos 24-40
                                </h3>
                            </div>



                            <div class="card-body">
                                <div class="tab-content">


                                    <div class="tab-pane active" id="consu">



                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo24.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 24') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo26.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 26') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo28.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 28') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo30.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 30') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo32.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 32') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo34.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 34') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="#" class="btn btn-sm btn-rose">{{ __('Anexo 36') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="#" class="btn btn-sm btn-rose">{{ __('Anexo 38') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" >
                                            <div class="col-4">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo40.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 40') }}</a>
                                                    </div>
                                                </div>
                                            </div>
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
