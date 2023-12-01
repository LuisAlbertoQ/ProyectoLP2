<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\PlanPPP;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use App\Livewire\Forms\AnnouncementForm;

class CrudAnnouncement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public AnnouncementForm $form;
    use Actions;
    public function render(){
        $companies=Announcement::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.announcement-management', compact('companies'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->announcement->id)){
            Announcement::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $announcement=Announcement::find($this->form->announcement->id);
            $announcement->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Announcement $announcement){
        //$this->form=$period->toArray();
        $this->form->setForm($announcement);
        $this->isOpen=true;
    }

    public function destroy(Announcement $announcement){
        $announcement->delete();
    }
}
