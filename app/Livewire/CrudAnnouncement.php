<?php

namespace App\Livewire;

use App\Models\Announcement;
use App\Models\PlanPPP;
use Livewire\Component;
use Illuminate\Support\Str;

class CrudAnnouncement extends Component
{
    public $isOpen=false;
    public $search,$announcement    ;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'announcement.start'=>'required',
        'announcement.end'=>'required',
        'announcement.description'=>'required'

    ];

    public function render(){
        $announcements=Announcement::where('start','LIKE','%'.$this->search.'%')->paginate();
        return view('livewire.crud-announcement',compact('announcements'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['announcement']);
    }

    public function store(){
        $this->validate();

        if(!isset($this->announcement['id'])){
            Announcement::create($this->announcement);
        }else{
            $announcement=Announcement::find($this->announcement['id']);
            $announcement->start=$this->announcement['start'];
            $announcement->end=$this->announcement['end'];
            $announcement->description=$this->announcement['description'];
            $announcement->save();
        }
        $this->reset(['isOpen','announcement']);
        $this->emitTo('CrudAnnouncement','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(Announcement $announcement){
        $this->isOpen=true;
        $this->announcement=$announcement;
        $this->resetValidation();
    }

    public function delete($id){
        Announcement::find($id)->delete();
    }


    public function updatedAnnouncementName(){
        $this->announcement['slug']=Str::slug($this->announcement['name']);
    }
}
