<?php

namespace App\Livewire\Forms;

use App\Models\Announcement;
use App\Models\Company;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AnnouncementForm extends Form{

    public ?Announcement $announcement;

    #[Rule('required|min:2')]
    public $start;

    #[Rule('required|min:2')]
    public $end;

    #[Rule('required|min:2')]
    public $description;

    public function setForm(Announcement $announcement){
        $this->announcement = $announcement;
        $this->start = $announcement->start;
        $this->end = $announcement->end;
        $this->description =$announcement->description;
    }

    public function resetForm(){
        $this->reset();
    }

}
