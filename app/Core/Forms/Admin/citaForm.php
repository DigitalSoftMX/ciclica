 <?php namespace App\Core\Forms\Admin;

use Kris\LaravelFormBuilder\Form;
use App\User;

class citaForm extends Form
{

    public function buildForm()
    {
        $this
                        
            ->add('name', 'text',['label'=>'Descripción']);       
    }
}