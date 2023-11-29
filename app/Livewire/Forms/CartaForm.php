<?php

namespace App\Livewire\Forms;

use App\Models\CartaP;
use App\Models\Company;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CartaForm extends Form{

    public ?CartaP $carta;

    #[Rule('required|min:2')]
    public $fecha_solicitud;

    #[Rule('required|min:2')]
    public $estado;

    #[Rule('required|min:2')]
    public $company_id;

    public function setForm(CartaP $carta){
        $this->carta = $carta;
        $this->fecha_solicitud = $carta->fecha_solicitud;
        $this->estado = $carta->estado;
        $this->company_id = $carta->company_id;
    }

    public function resetForm(){
        $this->reset();
    }

}
