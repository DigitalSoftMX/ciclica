<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class PacientesForm extends Form
{

    public function buildForm()
    {
        //User
        $this
            ->add('name', 'text',['label'=>'Nombre','rules' => 'required'])
            ->add('app_name', 'text',['label'=>'Apellido Paterno','rules' => 'required'])
            ->add('apm_name', 'text',['label'=>'Apellido Materno','rules' => 'required'])
            ->add('username', 'text',['label'=>'Usuario','rules' => 'required'])
            ->add('password', 'password',['label'=>'Contraseña','rules' => 'required'])
            ->add('email', 'text',['label'=>'Correo electronico','rules' => 'required'])
            ->add('sex', 'text',['label'=>'Sexo','rules' => 'required'])
            ->add('phone', 'text',['label'=>'Telefono Celular','rules' => 'numeric'])

         //Paciente
            ->add('fecha_nacimiento', 'date',['label'=>'Fecha de Nacimiento','rules' => 'required'])
            ->add('id_edo_civil', 'text',['label'=>'Estado Civil','rules' => 'required'])
            ->add('telefono', 'text',['label'=>'Telefono de Casa','rules' => 'required'])
            ->add('id_estado', 'text',['label'=>'Estado del paciente','rules' => 'numeric'])
            
            ->add('id_estado_domicilio', 'text',['label'=>'Estado','rules' => 'required'])
            ->add('cp', 'text',['label'=>'Codigo Postal','rules' => 'required'])
            ->add('ciudad', 'text',['label'=>'Ciudad','rules' => 'required'])
            ->add('calle', 'text',['label'=>'Calle','rules' => 'required'])
            ->add('num_ext', 'text',['label'=>'Numero exterior','rules' => 'required'])
            ->add('num_int', 'text',['label'=>'Numero interior','rules' => 'numeric'])
            ->add('colonia', 'text',['label'=>'Colonia','rules' => 'required'])
            
            ->add('tipo_sangre', 'text',['label'=>'Tipo de Sangre','rules' => 'required'])
            ->add('ocupacion', 'text',['label'=>'Ocupacion','rules' => 'required'])
            ->add('alergias', 'text',['label'=>'Alergias','rules' => 'required'])
            ->add('nombre_pareja', 'text',['label'=>'Nombre de la Pareja','rules' => 'required'])
            ->add('fch_nacimiento_pareja', 'date',['label'=>'Fecha de Nacimiento','rules' => 'required'])
            ->add('ocupacion_pareja', 'text',['label'=>'Ocupacion de la Pareja','rules' => 'required'])
            ->add('celular_pareja', 'text',['label'=>'Celular ','rules' => 'required'])
            ->add('email_pareja', 'text',['label'=>'Correo electronico','rules' => 'required'])

            ;
   }



}