<?php

namespace App\Livewire\Estudent;

use App\Livewire\Forms\EstudentForm;
use App\Models\Plan;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class PlanManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public EstudentForm $form;
    use Actions;
    public function render(){
        $plans=Plan::where('firstname','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.estudent.plan-management',compact('plans'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->plan->id)){
            Plan::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $Plan=Plan::find($this->form->plan->id);
            $Plan->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Plan $Plan){
        //$this->form=$period->toArray();
        $this->form->setForm($Plan);
        $this->isOpen=true;
    }

    public function destroy(Plan $Plan){
        $Plan->delete();
    }
}
