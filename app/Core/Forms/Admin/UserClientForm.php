<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class UserClientForm extends Form
{

    public function buildForm()
    {
        $this
             ->add('name', 'text',['label'=>'Nombre','rules' => 'required'])
            ->add('app_name', 'text',['label'=>'Apellido Paterno','rules' => 'required'])
            ->add('apm_name', 'text',['label'=>'Apellido Materno','rules' => 'required'])
            ->add('username', 'text',['label'=>'Usuario','rules' => 'required'])
            ->add('password', 'password',['label'=>'Contraseña','rules' => 'required'])
            ->add('email', 'text',['label'=>'Correo electronico','rules' => 'required'])
            ->add('sex', 'text',['label'=>'Sexo','rules' => 'required'])
            ->add('phone', 'text',['label'=>'Telefono','rules' => 'numeric'])
            ->add('tipousuario', 'text',['label'=>'Selecciona tipo de Usuario','rules' => 'required']);       
    }
}