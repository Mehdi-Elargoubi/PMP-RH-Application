<?php

namespace App\Http\Livewire;

use App\Http\Requests\EmployeeRequest;
use Livewire\Component;
use App\Models\employee;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Nette\Utils\Image;

class Employees extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $confirmEmployeeAdd;

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

    public function render(){

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
        })->orderBy($this->sortBy, $this->sortAsc ? 'ASC' : 'DESC')->paginate(10);

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
        $employee=Employee::find($this->employeeID);
        $employee->delete();
        session()->flash('message','Employé supprimé avec succès.');
        return redirect()->to(route('employees0'));
        //return view('livewire.employees');
    }


    public $name, $matr, $jobP, $jobR, $observ, $image, $equipe, $imageName;

    protected function rules(){
        return [
            'name' => 'required|string|min:5',
            'matr' => 'required',
        ];
    }
    protected $messages = [
        'name.required' => 'Le champ Nom est obligatoire.',
        'name.min' => 'Le champ Nom est obligatoire 5.',
        'matr.required' => 'Le champ Matricule est obligatoire.',
    ];

    public function updated($fields){
        $this->validateOnly($fields);
    }
    // bda f 114 o sala f 178

    public $filepath="";
    public $showModal = false;
    public function saveEmployee(){

        $validatedData=$this->validate();

        $newEmployee = new employee();
        $newEmployee -> name =$this->name ;
        $newEmployee -> matr =$this->matr ;
        $newEmployee -> jobP =$this->jobP ;
        $newEmployee -> jobR =$this->jobR ;
        $newEmployee -> observ =$this->observ ;
        // $newEmployee -> image =$this->image ;
        // if ($this->image) {
        //     $file=$this->image;
        //     $imageName=time().'_'.$file->getClientOriginalName();
        //     $imagePath = $file->storeAs('',$imageName, 'public');
        //     // $imagePath = $file->move(public_path('uploads'),$imageName);
        
        //     $newEmployee->image = $imagePath;
        // }

        if ($this->image) {
            $file = $this->image;
            $imageName = time() . '_' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads', $imageName, 'public'); // Stocker dans le dossier 'uploads'
            $newEmployee->image = $imagePath;
            $this->filepath = $imagePath;
          
        }else{
            $imageName = 'uploads/worker.png';
            $newEmployee->image = $imageName;
        }
    

        // if($request->has('image')){
        //     $file=$request->image;
        //     $image_name=time().'_'.$file->getClientOriginalName();
        //     $file->move(public_path('uploads'),$image_name);
        //     $file->move(public_path('uploads'),$imageName);
        // }
        // else{
        //     $image_name='worker.png';
        // }

        $newEmployee->save();

        // if($this->image) {
        //     $this->imageName = time() . '_' . $this->image->getClientOriginalName();
        //     $this->image->storeAs('uploads', $this->imageName, 'public');
        //     // $this->image->move(public_path('uploads'),$this->imageName);
        // } else {
        //     $this->imageName = 'worker.png';
        // }

        // Employee::create([
        //     'name' => $this->name,
        //     'matr' => $this->matr,
        //     'jobP' => $this->jobP,
        //     'jobR' => $this->jobR,
        //     'observ' => $this->observ,
        //     'equipe' => $this->equipe,
        //     'image' => $this->imageName,
        // ]);
        $this->showModal = true;
        // Employee::create($validatedData);
        session()->flash('message','L\'employé a été ajouté avec succès.');
        // $this->emit('employeeAdded');
        $this->resetInput();
        return redirect()->to('employees0');
    }
    // 7bess hna

    public function resetInput(){
        $this->name='';
        $this->matr='';
        $this->jobP='';
        $this->jobR='';
        $this->observ='';
        $this->equipe='';
        $this->image=null;
    }


    public function closeModal(){
        $this->resetInput();
    }

    // Update Employé
    public $employee_id;

    public function editEmployee(int $id){
        $employee = Employee::find($id);
        if($employee){
            $this->employee_id=$employee->id;
            $this->name=$employee->name;
            $this->matr=$employee->matr;
            $this->jobP=$employee->jobP;
            $this->jobR=$employee->jobR;
            $this->observ=$employee->observ;
            $this->imageName=$employee->image;

            // if ($this->image) {
            //     $file = $this->image;
            //     $imageName = time() . '_' . $file->getClientOriginalName();
            //     $imagePath = $file->storeAs('', $imageName, 'public');
            //     $employee->image = $imagePath;
            // }else{
            //     // $employee->image = $this->imageName ;
            //     $this->imageName=$employee->image;
            // }
        
        }else{
            return redirect()->to('employees0');
         }
    }

    public function updateEmployee(){
        $validatedData=$this->validate();
        $employee = Employee::find($this->id);

        if ($this->image) {
            $file = $this->image;
            $imageName = time() . '_' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('', $imageName, 'public');
            // $employee->image = $imagePath;
            $this->image = $imagePath;
        }else{
            $this->image =$this->imageName;
        }

        Employee::where('id',$this->employee_id)->update([
            // $employee->update([
            'name' => $this->name,
            'matr' => $this->matr,
            'jobP' => $this->jobP,
            'jobR' => $this->jobR,
            'observ' => $this->observ,
            'equipe' => $this->equipe,
            'image' => $this->image,

        ]);
        
        session()->flash('message', " Les informations de l'employé "  . $this->name . " ont été mises à jour avec succès.");
        $this->resetInput();
        return redirect()->to('employees0');
    }





}
