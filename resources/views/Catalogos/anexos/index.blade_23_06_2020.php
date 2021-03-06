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



                                        <div class="row" >
                                            <div class="col-4 ">

                                                        <div class="row">
                                                            <div class="col-12 text-right">
                                                                <a href="{{ route('anexouno.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 1') }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>

                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo2.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 2') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo4.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 4') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo6.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 6') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo8.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 8') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo10.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 10') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo14.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 14') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo16.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 16') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo18.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 18') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo20.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 20') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-4 ">

                                                <div class="row">
                                                    <div class="col-12 text-right">
                                                        <a href="{{ route('anexo22.index') }}" class="btn btn-sm btn-rose">{{ __('Anexo 22') }}</a>
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
