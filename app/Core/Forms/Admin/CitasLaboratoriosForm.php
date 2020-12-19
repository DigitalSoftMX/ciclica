<?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class CitasLaboratoriosForm extends Form
{

    public function buildForm()
    {
        $this
                        
            ->add('fecha', 'date',['label'=>'Fecha'])
            ->add('horario', 'time',['label'=>'Horario'])
            ->add('nota', 'textarea',['label'=>'Nota'])
            ->add('id_paciente', 'text',['label'=>'Paciente'])
            ->add('id_doctor', 'text',['label'=>'Doctor'])
            ->add('id_especialidad', 'text',['label'=>'Especialidad'])
            ;       
    }
}