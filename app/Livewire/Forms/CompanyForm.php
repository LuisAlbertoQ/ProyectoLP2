<?php

namespace App\Livewire\Forms;

use App\Models\Company;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form{

    public ?Company $company;

    #[Rule('required|min:2')]
    public $name;

    #[Rule('required|min:2')]
    public $address;

    public function setForm(Company $company){
        $this->company = $company;
        $this->name = $company->firstname;
        $this->address = $company->lastname;
    }

    public function resetForm(){
        $this->reset();
    }

}
