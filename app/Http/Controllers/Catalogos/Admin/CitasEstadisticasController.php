<?php namespace App\Http\Controllers\Catalogos\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Core\Util\CatalogTrait;

   class CitasEstadisticasController extends Controller {


    use CatalogTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->field_list = ['cron_inicia'=>'Inicio','cron_doctor'=>'Doctor Inicio','cron_final'=>'Doctor Finalizo','tiempo_cita'=>'Tiempo total','id'=>'Acciones'];
        $this->name = 'Citas Estadisticas';
        $this->name_plural = 'Citas Estadisticas';
        $this->form = 'App\Core\Forms\Admin\CitasForm';
        $this->model = 'App\Models\Catalogos\Citas';
        $this->url_prefix = 'citasestadisticas';
        $validation_add = [
        ];
        $validation_edit = $validation_add;
        $this->setValidatorAdd($validation_add);
        $this->setValidatorEdit($validation_edit);
    }
}