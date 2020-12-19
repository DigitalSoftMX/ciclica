<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class AnotacionForm extends Form
{

    public function buildForm()
    {
        $this
            ->add('anotacion', 'text', ['label' => 'Descripcion de Anotacion', 'rules' => 'required'])
            ->add('estu', 'text', ['label' => 'Estudio', 'rules' => 'required']);
    }
}
