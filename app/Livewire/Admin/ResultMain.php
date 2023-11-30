<?php

namespace App\Livewire\Admin;

use App\Models\Company;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ResultMain extends Component
{
    public function render()
    {
        $companies=Company::all();
        return view('livewire.admin.result-main',compact('companies'));
    }
    public function generateReport(){
        $companies=Company::all();
        $pdf= FacadePdf::loadView('reports.voting-result',compact('companies'));

        return $pdf->stream();
    }
}
