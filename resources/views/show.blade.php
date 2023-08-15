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
        <h1> L'employee <b> {{ $employee["name"] }}</b></h1>
        <div class="col-md-8">
            <table class="table table-striped table-bordered mt-3" >
                <thead>
                  <tr class="text-center">
                    <th>Photo</th>
                    <th>ID</th>
                    <th>Matricule</th>
                    <th>Name</th>
                    <th>Poste Prévu</th>
                    <th>Poste réaliser</th>
                    <th>Observation</th>
                  </tr>
                </thead>
                  <tr class="text-center">
                    <td><img src="{{ asset("https://img.freepik.com/vecteurs-libre/employe-du-mois-dans-cadre_23-2148462287.jpg") }}" width="30px" height="30px" class="text-center mx-auto"></td>
                    <td>{{ $employee["id"] }}</td>
                    <td> {{ $employee["matr"] }}</td>
                    <td>{{ $employee["name"] }}</td>
                    <td>{{ $employee["jobP"] }}</td>
                    <td>{{ $employee["jobR"] }}</td>
                    <td>{{ $employee["observ"] }}</td>
                  </tr>
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