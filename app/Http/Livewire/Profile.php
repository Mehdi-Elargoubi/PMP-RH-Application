<?php

namespace App\Http\Livewire;

use App\Models\employee;
use Livewire\Component;

class Profile extends Component
{

    public $employeeId;
    public $emp_id;
    public $employee;

    public function mount($id){

        $this->employee = Employee::find($id); 
    } 

    
    // public function show($id){
       
    //     $employee = Employee::find($id);
    //     return view('profile')->with([
    //         'employee' => $employee
    //     ]);
    //     return view('livewire.employees',[
    //         'employees' => $this->employees,
    //     ]);

    // }



    // public function mount($id){
    //     $this->employee = Employee::find($id);
        
    //     // return view('profile')->with([
    //     //     'employee' => $this->employee
    //     // ]);

    // }

    public function render()
    {
        // $id=5;
        // $employee=Employee::find($this->employeeId);
        return view('livewire.profile',[
            'employee'=>$this->employee
        ]);
    }


    // public function render()
    // {
    //     return view('livewire.profile',[
    //         'employee'=>$employee
    //     ]);
    // }


}
