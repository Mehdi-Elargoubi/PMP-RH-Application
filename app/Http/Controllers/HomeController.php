<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
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

    public function store(EmployeeRequest $request){

        if($request->has('image')){
            $file=$request->image;
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
        }

        
        Employee::create([
            'name' => $request->name,
            'matr'=> $request->matr,
            'jobP'=> $request->jobP,
            'jobR'=> $request->jobR,
            'observ'=> $request->observ,
            'equipe'=> $request->equipe,
            // 'image'=> "https://img.freepik.com/vecteurs-libre/employe-du-mois-dans-cadre_23-2148462287.jpg"
            'image'=>$image_name,
        ]);
        return redirect()->route('home')->with([
            'success'=>'L\'employé a été ajouté avec succès.',
        ]);

    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit')->with([
            'employee'=>$employee
        ]);
    }

    public function update(EmployeeRequest $request, $id){

        // $this->validate($request,[
        //     'name'=>'required',
        // ]);

    $employee = Employee::find($id);

    if($request->has('image')){
        $file=$request->image;
        $image_name=time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads'),$image_name);
        unlink(public_path('uploads/').$employee->image);
        $employee->image=$image_name;
    }

    $employee->update([
        'name' => $request->name,
        'matr'=> $request->matr,
        'jobP'=> $request->jobP,
        'jobR'=> $request->jobR,
        'observ'=> $request->observ,
        'equipe'=> $request->equipe,
        'image'=> $employee->image,
    ]);

    return redirect()->route('home')->with([
        'success' => 'Les informations ont été bien modifiés.'
    ]); 

    }

    public function delete($id){
        $employee=Employee::find($id);
        $employee->delete();
        return redirect()->route('home')->with([
            'success' => 'Employé supprimé avec succès'
        ]); 
    

    }







}
