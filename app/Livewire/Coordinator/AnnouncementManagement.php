<?php

namespace App\Livewire\Coordinator;

use App\Livewire\Forms\AnnouncementForm;
use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class AnnouncementManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public AnnouncementForm $form;
    use Actions;
    public function render(){
        $announcements=Announcement::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.announcement-management', compact('announcements'));
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
