<?php

namespace App\Http\Livewire;

use App\Models\employee;
use Livewire\Component;

class Profile extends Component
{
    public $employeeId;
    public $emp_id;
    public $employees;

    // public function mount($id){
    //     $this->employee = Employee::find($id); 
    // } 

    public function render()
    {
        $employeeEquipe = Employee::orderBy('equipe')
            ->get()
            ->grouprBy('equipe');

        return view('livewire.profile',[
            'employees'=>$employeeEquipe
        ]);
    }



}
