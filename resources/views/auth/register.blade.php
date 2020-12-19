@extends('layouts.app', [
  'class' => 'off-canvas-sidebar',
  'classPage' => 'register-page',
  'activePage' => 'register',
  'title' => __('Register'),
  'pageBackground' => asset("material").'/img/instalaciones.jpg'
])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-5 ml-auto mr-auto">
      <div class="card card-signup">
        <h2 class="card-title text-center">{{ __('Registrarse') }}</h2>
        <div class="card-body">
          <div class="row">
            
            <div class="col-md-12 mr-auto">
            
              <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="has-default{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                      <div id="email-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('email') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default{{ $errors->has('password') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" name="password" placeholder="{{ __('Contraseña...') }}" class="form-control" required>
                    @if ($errors->has('password'))
                      <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                        <strong>{{ $errors->first('password') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default{{ $errors->has('name') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('nombre') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default{{ $errors->has('app_name') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">person</i>
                      </span>
                    </div>
                    <input type="text" name="app_name" class="form-control" placeholder="{{ __('Apellido Paterno...') }}" value="{{ old('app_name') }}" required>
                    @if ($errors->has('app_name'))
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('apellido paterno') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default{{ $errors->has('apm_name') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">people</i>
                      </span>
                    </div>
                    <input type="text" name="apm_name" class="form-control" placeholder="{{ __('Apellido Materno...') }}" value="{{ old('apm_name') }}" required>
                    @if ($errors->has('apm_name'))
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('apellido materno') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                <div class="has-default{{ $errors->has('phone') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">phone</i>
                      </span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="{{ __('Telefono...') }}" value="{{ old('phone') }}" required>
                    @if ($errors->has('phone'))
                      <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                        <strong>{{ $errors->first('phone') }}</strong>
                      </div>
                     @endif
                  </div>
                </div>
                
                <div class="has-default{{ $errors->has('medio') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">M</i>
                      </span>
                    </div>
              
                 <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                 
                          <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                            <select class="selectpicker col-sm-12 pl-0 pr-0" name="medio" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                                    <option value="Email">Email</option>
                                    <option value="Telefono">Telefono</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="MSM">MSM</option>
                            </select>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="has-default{{ $errors->has('sex') ? ' has-danger' : '' }} mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">wc</i>
                      </span>
                    </div>
              
                 <div class="col-sm-10">
                    <div class="form-group bmd-form-group">
                 
              <div class="dropdown bootstrap-select col-sm-12 pl-0 pr-0">
                <select class="selectpicker col-sm-12 pl-0 pr-0" name="sex" data-style="select-with-transition" title="" data-size="100" tabindex="-98">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                </select>
              </div>
          </div>
          </div>
        
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-round mt-4">{{ __('Aceptar') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
    });
  </script>
@endpush
