<?php

namespace App\Livewire\Forms;

use App\Models\Plan;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EstudentForm extends Form{
    public ?Plan $plan;

    #[Rule('required|min:7')]
    public $firstname;

    #[Rule('required|min:4')]
    public $lastname;

    #[Rule('required|min:8')]
    public $dni;

    #[Rule('required|min:4')]
    public $startdate;

    #[Rule('required|min:4')]
    public $enddate;

    #[Rule('required|min:4')]
    public $description;
    #[Rule('required|min:4')]
    public $company_id;

    public function setForm(Plan $plan){
        $this->plan = $plan;
        $this->firstname = $plan->name;
        $this->lastname = $plan->year;
        $this->dni = $plan->year;
        $this->startdate = $plan->year;
        $this->enddate = $plan->year;
        $this->description = $plan->year;
        $this->company_id = $plan->year;
    }

    public function resetForm(){
        $this->reset();
    }

}
