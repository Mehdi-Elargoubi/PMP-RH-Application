<?php

namespace App\Http\Livewire;

use App\Models\employee;
use Livewire\Component;

class Profile extends Component
{
    public $employeeId;
    public $emp_id;
    public $employees;

    public function render()
    {
        return view('livewire.profile');
    }


}
