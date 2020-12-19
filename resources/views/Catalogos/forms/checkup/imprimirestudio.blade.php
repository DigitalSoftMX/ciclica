<!-- Modal -->
<form method="post" action="{{url('procesoaestudioscheckup/add') }}" autocomplete="off" class="form-horizontal">
  @csrf
@forelse($citas as $lista)
        <input name="cita" id="cita" type="hidden" value="{{ $lista->id }}">
        <input name="id_paciente" id="paciente" type="hidden" value="{{ $lista->id_paciente }}">
        <input name="id_doctor" id="dcctor" type="hidden" value="{{ $lista->id_doctor }}">
    @empty
        <div class="card-header card-header-primary text-center">
            <h4>No se encontraron Resultados</h4>
        </div>
    @endforelse
@forelse ($info as $product)
<div class="modal fade docs-modalestudios-modal-lg" id="modalestudios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
      <div class="row">
        <div class="col-sm-1">
          <img src="{{ asset('material') }}/img/lateral.jpg" style="height: 100%; width: 50%" >
        </div>

    <div class="col-sm-11">
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="card-body ">
                      <img src="{{ asset('material') }}/img/titulo.jpg" style="width: 100%">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group bmd-form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="{{ $product->name.' '.$product->app_name.' '.$product->apm_name }}" value="{{ $product->name.' '.$product->app_name.' '.$product->apm_name }}" required="true" aria-required="true">
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-sm-12">
                      <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                        <textarea  rows="4" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="indica" id="input-description" type="text" placeholder=""  aria-required="true">{{ old('Exporacion Fisica:') }}</textarea>
                        @include('alerts.feedback', ['field' => 'description'])
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-rose">{{ __('Enviar') }}</button>
          </div>
            <img src="{{ asset('material') }}/img/base.jpg" style="width: 100%; height: 60%">
        </div>
      </div>

     

 </div>
      </div>
  


    </div>
    <div class="card-footer ml-auto">
    </div>
  </div>
</div>

@empty
  <div class="card-header card-header-primary text-center">
    <h4>No se encontraron Resultados</h4>
  </div>
@endforelse
</form>
<!-- Fin Modal -->
