<?php

namespace App\Livewire\Coordinator;

use App\Models\Plan;
use Livewire\Component;
use Livewire\WithPagination;

class ListManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search;
    public function render()
    {
        $plans=Plan::where('firstname','like','%'.$this->search.'%')->latest('id')->paginate(6);;
        return view('livewire.coordinator.list-management', compact('plans'));
    }
}
