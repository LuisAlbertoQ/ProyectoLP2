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

    }
    public function generateReport(){
        $companies=Company::take(1);
        $pdf= FacadePdf::loadView('reports.voting-result',compact('companies'));


        return $pdf->stream();
    }

}
