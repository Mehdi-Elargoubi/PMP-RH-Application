@extends('master.layout')

@section('title')
    Create
@endsection

@section('content')

    <div class="row m-4">
        <div class="col-md-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card" >
                <div class="card-body">
                  <h1 class="card-title text-center"><b>Ajouter un employee</b></h1>
                    <div class="card-body">
                        <form action="{{ route('employee.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nom Complet</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Saisir le nom d'employee">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Matricule</label>
                                <input type="number" class="form-control" id="exampleFormControlInput2" name="matr" placeholder="Saisir le Matricule d'employee">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput3" class="form-label">Travail Prévu</label>
                                <input type="text" class="form-control" id="exampleFormControlInput3" name="jobP" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label">Travail Réaliser</label>
                                <input type="text" class="form-control" id="exampleFormControlInput4" name="jobR">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput5" class="form-label">Observation</label>
                                <input type="text" class="form-control" id="exampleFormControlInput5" name="observ" >
                              </div>                              
                              
                              <div class="mb-3">
                                <label for="exampleFormControlInput6" class="form-label">Equipe</label>
                                <input type="text" class="form-control" id="exampleFormControlInput6" name="equipe" >
                              </div>                              
                              
                              <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                              </div>

                              <div class="mb-3 d-flex justify-content-center">
                                <button class="btn btn-primary">
                                    Valider     
                               </button>
                              </div>
                        </form>
                    </div>
                  {{-- <a href="#" class="btn btn-primary mx-auto">Ajouter</a> --}}
                </div>
              </div>
        </div>
    </div>
@endsection