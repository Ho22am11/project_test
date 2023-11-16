<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Nationalitie;
use App\Models\Religion;
use App\Models\status;
class AddParent extends Component
{
    public $currentStep =  1,

    // Father_INPUTS
    $Email, $Password,
    $Name_Father, $Name_Father_en,
    $National_ID_Father, $Passport_ID_Father,
    $Phone_Father, $Job_Father, $Job_Father_en,
    $Nationality_Father_id, $status_father,
    $Address_Father, $Religion_Father_id,
    $updateMode,

    // Mother_INPUTS
    $Name_Mother, $Name_Mother_en,
    $National_ID_Mother, $Passport_ID_Mother,
    $Phone_Mother, $Job_Mother, $Job_Mother_en,
    $Nationality_Mother_id, $status_mother,
    $Address_Mother, $Religion_Mother_id;



    public function render()
    {
        return view('livewire.add-parent', [
            'Nationalities' => Nationalitie::all(),
            'religions' =>  Religion::all(),
            "statuses" => status::all(),
        ]);

    }
    

    public function firstStepSubmit()
    {
        $this->currentStep = 2;
    }



    public function secondStepSubmit(){
        $this->currentStep = 3 ;
    }
    
    public function back($step){
        $this->currentStep = $step ;
    }
}
