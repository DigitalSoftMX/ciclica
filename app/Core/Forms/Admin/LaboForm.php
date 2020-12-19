<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class LaboForm extends Form
{

    public function buildForm()
    {
        $this
            ->add('codigo', 'text',['label'=>'Codigo','rules' => 'required'])
            ->add('clave', 'text',['label'=>'Clave','rules' => 'required'])
            ->add('descripcion', 'text',['label'=>'Descripcion','rules' => 'required'])
            ->add('precio', 'text',['label'=>'Precio']);
    }
}