
 
<link href="{{ asset('material') }}/css/pdf.css" rel="stylesheet" />
  
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
                        
                       <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Paciente:  {{ $descrip[0]->usuario }} </h4>
                       <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Doctor:  {{ $descrip[0]->doctores }} </h5>
                       <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $descrip[0]->descripcion }} </p>
                    
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-sm-12">
                      
                    </div>
                  </div>

                </div>
                
            <img src="{{ asset('material') }}/img/base.jpg" style="width: 80%;">
       

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