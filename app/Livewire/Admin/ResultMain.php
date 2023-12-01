<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\CompanyForm;
use App\Models\Company;
use App\Models\User;
use Livewire\Component;


use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ResultMain extends Component
{
    public CompanyForm $form;
    public function render()
    {
        $companies=Company::all();
        $pdf= FacadePdf::loadView('reports.voting-result',compact('companies'));


        return $pdf->stream();
    }
    public function generateReport(){
        $companies=Company::all();
        $pdf= FacadePdf::loadView('reports.voting-result',compact('companies'));


        return $pdf->stream();
    }

}
