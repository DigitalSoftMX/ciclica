<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class PreciogeneForm extends Form
{

    public function buildForm()
    {
        $this
            ->add('clave', 'text',['label'=>'Clave','rules' => 'required'])
            ->add('descripcion', 'text',['label'=>'Descripcion','rules' => 'required'])
            ->add('precio', 'text',['label'=>'Precio','rules' => 'required']);
    }



}