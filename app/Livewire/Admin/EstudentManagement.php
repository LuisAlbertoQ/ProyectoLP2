<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\EstudentForm;
use App\Models\CartaP;
use App\Models\Company;
use App\Models\Estudent;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class EstudentManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public EstudentForm $form;
    use Actions;
    public function render(){
        $estudiantes=Estudent::where('codigo','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.admin.estudent-management', compact('estudiantes'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->estudent->id)){
            Estudent::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $estudent=Estudent::find($this->form->estudent->id);
            $estudent->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Estudent $estudent){
        //$this->form=$period->toArray();
        $this->form->setForm($estudent);
        $this->isOpen=true;
    }

    public function destroy(Estudent $estudent){
        $estudent->delete();
    }
}
