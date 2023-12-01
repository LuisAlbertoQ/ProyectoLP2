<?php

namespace App\Livewire\Coordinator;

use App\Livewire\Forms\CompanyForm;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CompanyManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public CompanyForm $form;
    use Actions;
    public function render(){
        $companies=Company::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.company-management', compact('companies'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->company->id)){
            Company::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $company=Company::find($this->form->company->id);
            $company->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Company $company){
        //$this->form=$period->toArray();
        $this->form->setForm($company);
        $this->isOpen=true;
    }

    public function destroy(Company $company){
        $company->delete();
    }
}
