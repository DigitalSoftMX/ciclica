

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title></title>
</head>
<body>
<header class="clearfix">
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>
</header>
<main>
    



<div class="container">
  <div class="row">
    <div class="col-md-8 ml-auto mr-auto">
      <div class="card card-signup">
        <div class="card-body">
          <div class="row">
            
            <div class="col-md-12 mr-auto">
            



    <div class="col-sm-11">
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active">
                <div class="card-body ">
                  
    
                <div class="card-body ">
                      <img src="{{ asset('material') }}/img/titulo.jpg" style="width: 100%">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group bmd-form-group">
                        
                       <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Paciente:  {{ $caja[0]->usuario }} </h4>
                       
                      </div>
                    </div>
                  </div>
   
             <div>
                  <table style="width: 95%">
                    <thead class="text-primary">
                    <tr>
                      <th style="width: 50px">
                          {{ __('Costo') }}
                      </th>
                      <th style="width: 50px">
                        {{ __('Nombre') }}
                      </th>
                      <th style="width: 60px">
                        {{ __('Clave') }}
                      </th>
                      <th style="width: 200px">
                        {{ __('Descripcion') }}
                      </th>
                      <th style="width: 200px">
                        {{ __('Medico') }}
                      </th>
                      <th style="width: 60px">
                        {{ __('Fecha') }}
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $item)
                      <tr>  
                          <td>
                            {{ $item->costo }}
                          </td>
                          <td>
                            {{ $item->nomb }}
                          </td>
                          <td>
                            {{ $item->clave }}
                          </td>
                          <td>
                            {{ $item->descripcion }}
                          </td>
                          <td>
                            {{ $item->doctores }}
                          </td>
                          <td>
                            {{ $item->created_at->format('Y-m-d') }}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                
                <div>
                <label class="col-sm-12 col-form-label">Cantidad: {{$cantidad}}</label>
                </div>
                <div>
                <label class="col-sm-12 col-form-label">Iva: {{$iva}}</label>
                </div>
                <div>
                <label class="col-sm-12 col-form-label">Total: {{$total}}</label>
                </div>


                </div>
                
           <!-- <img src="{{ asset('material') }}/img/base.jpg" style="width: 80%;">-->
       

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





</main>
</body>
</html>