<?php

namespace App\Livewire\Coordinator;

use App\Livewire\Forms\CartaForm;
use App\Models\CartaP;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CartaManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public CartaForm $form;
    use Actions;
    public function render(){
        $cartas=CartaP::where('fecha_solicitud','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.carta-management', compact('cartas'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->carta->id)){
            CartaP::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $carta=CartaP::find($this->form->carta->id);
            $carta->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(CartaP $carta){
        //$this->form=$period->toArray();
        $this->form->setForm($carta);
        $this->isOpen=true;
    }

    public function destroy(CartaP $carta){
        $carta->delete();
    }
}
