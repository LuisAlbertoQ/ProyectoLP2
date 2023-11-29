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

    #[Rule('required|min:2')]
    public $ruc;

    #[Rule('required|min:2')]
    public $rubro;

    public function setForm(Company $company){
        $this->company = $company;
        $this->name = $company->name;
        $this->address = $company->address;
        $this->ruc = $company->ruc;
        $this->rubro = $company->rubro;
    }

    public function resetForm(){
        $this->reset();
    }

}
