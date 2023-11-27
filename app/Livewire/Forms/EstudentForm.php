<?php

namespace App\Livewire\Forms;

use App\Models\Plan;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EstudentForm extends Form{
    public ?Plan $plan;

    #[Rule('required|min:2')]
    public $firstname;

    #[Rule('required|min:2')]
    public $lastname;

    #[Rule('required|min:8')]
    public $dni;

    #[Rule('required|date_format:Y-m-d')]
    public $startdate;

    #[Rule('required|date_format:Y-m-d')]
    public $enddate;

    #[Rule('required|min:20')]
    public $description;

    #[Rule('required|min:1')]
    public $company_id;

    public function setForm(Plan $plan){
        $this->plan = $plan;
        $this->firstname = $plan->firstname;
        $this->lastname = $plan->lastname;
        $this->dni = $plan->dni; 
        $this->startdate = $plan->startdate;
        $this->enddate = $plan->enddate;
        $this->description = $plan->description;
        $this->company_id = $plan->company_id;
    }

    public function resetForm(){
        $this->reset();
    }

}
