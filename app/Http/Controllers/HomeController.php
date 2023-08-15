<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $employees = Employee::orderBy("name", "asc")->get(); // Tri par ordre alphabétique ascendant du nom
        //$employees=Employee::all();
        return view('home')->with([
            'employees'=>$employees,
            
            ]); 
    }


    public function show($id){
        $employee = Employee::find($id);
        return view('show')->with([
            'employee' => $employee
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required',
            'matr'=>'required|unique:employees',
        ]);
        
        Employee::create([
            'name' => $request->name,
            'matr'=> $request->matr,
            'jobP'=> $request->jobP,
            'jobR'=> $request->jobR,
            'observ'=> $request->observ,
            'equipe'=> $request->equipe,
            'image'=> "https://img.freepik.com/vecteurs-libre/employe-du-mois-dans-cadre_23-2148462287.jpg"

        ]);
        return redirect()->route('home')->with([
            'success'=>'Employee ajouté',
        ]);

    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit')->with([
            'employee'=>$employee
        ]);
    }

    public function update(Request $request, $id){
    $employee = Employee::find($id);
    $employee->update([
        'name' => $request->name,
        'matr'=> $request->matr,
        'jobP'=> $request->jobP,
        'jobR'=> $request->jobR,
        'observ'=> $request->observ,
        'equipe'=> $request->equipe,
        'image'=> "https://img.freepik.com/vecteurs-libre/employe-du-mois-dans-cadre_23-2148462287.jpg"
    ]);

    return redirect()->route('home')->with([
        'success' => 'Les informations sont modifié'
    ]); 

    }

    public function delete($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('home')->with([
            'success' => 'Employee supprimé'
        ]); 
    

    }







}

