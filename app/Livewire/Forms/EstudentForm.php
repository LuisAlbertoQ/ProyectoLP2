<?php

namespace App\Livewire\Forms;

use App\Models\Company;
use App\Models\Convocatory;
use App\Models\Estudent;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EstudentForm extends Form{

    public ?Estudent $estudent;

    #[Rule('required|min:2')]
    public $codigo;

    #[Rule('required|min:2')]
    public $nombre;

    #[Rule('required|min:2')]
    public $apellido;

    #[Rule('required|min:1')]
    public $ciclo;
    #[Rule('required|min:1')]
    public $email;
    #[Rule('required|min:1')]
    public $celular;
    #[Rule('required|min:1')]
    public $usuario_id;

    public function setForm(Estudent $estudent){
        $this->estudent = $estudent;
        $this->codigo = $estudent->codigo;
        $this->nombre = $estudent->nombre;
        $this->apellido = $estudent->apellido;
        $this->ciclo = $estudent->ciclo;
        $this->email = $estudent->email;
        $this->celular = $estudent->celular;
        $this->usuario_id = $estudent->usuario_id;
    }

    public function resetForm(){
        $this->reset();
    }

}
