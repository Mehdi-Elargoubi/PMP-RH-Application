@extends('master.layout')

@section('title')
    Modifier {{ $employee->name }}
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
                  <h1 class="card-title text-center"><b> Modifier les informations de {{ $employee->name }}  </b></h1>
                    <div class="card-body">
                        <form action="{{ route('employee.update', $employee->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nom Complet</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Saisir le nom d'employee" value="{{ $employee->name }}" >
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label" disabled>Matricule</label>
                                <input type="number" class="form-control" id="exampleFormControlInput2" name="matr" placeholder="Saisir le Matricule d'employee" value="{{ $employee->matr }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput3" class="form-label">Travail Prévu</label>
                                <input type="text" class="form-control" id="exampleFormControlInput3" name="jobP" value="{{ $employee->jobP }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label">Travail Réaliser</label>
                                <input type="text" class="form-control" id="exampleFormControlInput4" name="jobR" value="{{ $employee->jobR }}">
                              </div>

                              <div class="mb-3">
                                <label for="exampleFormControlInput5" class="form-label">Observation</label>
                                <input type="text" class="form-control" id="exampleFormControlInput5" name="observ" value="{{ $employee->observ }}" >
                              </div>                              
                              
                              <div class="mb-3">
                                <label for="exampleFormControlInput6" class="form-label">Equipe</label>
                                <input type="text" class="form-control" id="exampleFormControlInput6" name="equipe" value="{{ $employee->equipe }}" >
                              </div>
                              
                              <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image" value="{{ $employee->image }}">
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