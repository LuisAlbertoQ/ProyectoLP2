<?php

namespace App\Livewire\Forms;

use App\Models\Company;
use App\Models\Convocatory;
use App\Models\Induction;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InductionForm extends Form{

    public ?Induction $induction;

    #[Rule('required|min:2')]
    public $asunto;

    #[Rule('required|min:2')]
    public $archivo;

    #[Rule('required|min:2')]
    public $asistencias;


    public function setForm(Induction $induction){
        $this->induction = $induction;
        $this->asunto = $induction->asunto;
        $this->archivo = $induction->archivo;
        $this->asistencias = $induction->asistencias;

    }

    public function resetForm(){
        $this->reset();
    }

}
