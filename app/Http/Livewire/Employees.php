<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\employee;
use Livewire\WithPagination;

class Employees extends Component
{
    use WithPagination;

    //for searching
    public $searchTerm='';
    private $employees;

    //for sorting
    public $sortBy='id';
    public $sortAsc = true;

    //for deleting
    public $emps;
    public $employeeID=0;
    public $showSuccessMessage = false;


    public $confirmingEmployeeDeletion=false;

    public function render()
    {

        // $this->employees=Employee::where(function ($query) {
        //     $query->where('name', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('matr', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('jobP', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('jobR', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('observ', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('equipe', 'like', '%' . $this->searchTerm . '%')
        //           ->orWhere('image', 'like', '%' . $this->searchTerm . '%');
        // })->orderBy("id", "asc")->paginate(5);

        // // $emps=Employee::orderBy("id", "asc")->paginate(5);

        // return view('livewire.employees', [

        //     'employees' => Employee::paginate(10),

        // ]);
        $this->employees = Employee::where(function ($query) {
            $query->where('name', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('matr', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('jobP', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('jobR', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('observ', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('equipe', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('image', 'like', '%' . $this->searchTerm . '%');
        })->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')->paginate(5);

        return view('livewire.employees',[
            'employees' => $this->employees,
        ]);
    }

    
    public function sortBy($field){
        if($field==$this->sortBy){
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy=$field;
    }

    public function changeDelete($id){
        $this->employeeID=$id;
    }

    public function deleteEmployee(){
        $this->showSuccessMessage = false;   
        // if($this->employeeID==0){
        //     return;
        // }
        $employee=Employee::find($this->employeeID);
        $employee->delete();
        // $this->employeeID=0;
        $this->showSuccessMessage = true;   
    }



}
