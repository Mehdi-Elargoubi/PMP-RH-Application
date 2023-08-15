@extends('master.layout')

@section ('style')
   <style>
     /* h1{
        background-color:rgb(114, 242, 114);
    } */
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }
   </style>
@endsection

@section('title')
    Accueil
@endsection

@section('content')
    <div class="row m-5">
        <h1> Liste des employees</h1>
        <div class="col-md-8">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif


            <table class="table table-striped table-bordered mt-3" >
                <thead>
                  <tr class="text-center">
                    {{-- <th>Photo</th> --}}
                    <th>ID</th>
                    <th>Matricule</th>
                    <th>Name</th>
                    <th>Poste Prévu</th>
                    <th>Poste réaliser</th>
                    <th>Observation</th>
                    <th colspan="3">Action</th>
                  </tr>
                </thead>
                @foreach ($employees as $employee)
                  <tr class="text-center">
                    {{-- <td><img src="{{ asset("https://img.freepik.com/vecteurs-libre/employe-du-mois-dans-cadre_23-2148462287.jpg") }}" width="30px" height="30px" class="text-center mx-auto"></td> --}}
                    <td>{{ $employee["id"] }}</td>
                    <td> {{ $employee["matr"] }}</td>
                    <td>{{ $employee["name"] }}</td>
                    <td>{{ $employee["jobP"] }}</td>
                    <td>{{ $employee["jobR"] }}</td>
                    <td>{{ $employee["observ"] }}</td>
                    <td><a href="{{ route('employee.show',$employee->id) }}" class="btn btn-primary">Voir</a></td>
                    <td><a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form id="{{ $employee->id }}" action="{{ route('employee.delete', $employee->id) }}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        <button 
                            onclick="event.preventDefault();
                            if(confirm('Voulez-vous supprimer cet employee ?'))
                            document.getElementById('{{ $employee->id }}').submit();" 
                        class="btn btn-danger">
                            Supprimer
                        </button>
                    </td>
                  </tr>
                  @endforeach
            </table>
        </div>

    </div>
@endsection


@section ('script')
   <script>
        // alert("hello from Home Page");
        $(document).ready(function () {
        $('#dtOrderExample').DataTable({
            "order": [[ 3, "desc" ]]
        });
            $('.dataTables_length').addClass('bs-select');
        });
   </script>
@endsection