<?php

namespace App\Livewire\Forms;

use App\Models\Company;
use App\Models\Convocatory;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ConvocatoryForm extends Form{

    public ?Convocatory $convocatory;

    #[Rule('required|min:2')]
    public $inicio;

    #[Rule('required|min:2')]
    public $fin;

    #[Rule('required|min:2')]
    public $descripcion;

    #[Rule('required|min:2')]
    public $company_id;

    public function setForm(Convocatory $convocatory){
        $this->convocatory = $convocatory;
        $this->inicio = $convocatory->inicio;
        $this->fin = $convocatory->fin;
        $this->descripcion = $convocatory->descripcion;
        $this->company_id = $convocatory->company_id;
    }

    public function resetForm(){
        $this->reset();
    }

}
