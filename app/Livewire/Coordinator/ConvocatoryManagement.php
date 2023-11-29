<?php

namespace App\Livewire\Coordinator;

use App\Livewire\Forms\CartaForm;
use App\Livewire\Forms\ConvocatoryForm;
use App\Models\CartaP;
use App\Models\Company;
use App\Models\Convocatory;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ConvocatoryManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public ConvocatoryForm $form;
    use Actions;
    public function render(){
        $convocatories=Convocatory::where('inicio','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.convocatory-management', compact('convocatories'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->convocatory->id)){
            Convocatory::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $convocatory=Convocatory::find($this->form->convocatory->id);
            $convocatory->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Convocatory $convocatory){
        //$this->form=$period->toArray();
        $this->form->setForm($convocatory);
        $this->isOpen=true;
    }

    public function destroy(Convocatory $convocatory){
        $convocatory->delete();
    }
}
