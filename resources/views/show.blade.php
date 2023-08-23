{{-- @extends('master.layout')

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

@section('content') --}}

<x-app-layout>


    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile User') }}
        </h2> --}}
        
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-blue-950  overflow-hidden shadow-xl sm:rounded-lg ">
                            
                        {{-- Old code START --}}
                        {{-- <div class="row m-5">
                            <h1> L'employé <b> {{ $employee["name"] }}</b></h1>
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
                                        <td><img src="{{ asset('./uploads/'.$employee->image) }}" alt="{{ $employee->name }}" width="40px" height="40px" class="text-center mx-auto"></td>
                                        <td>{{ $employee["id"] }}</td>
                                        <td>{{ $employee["matr"] }}</td>
                                        <td>{{ $employee["name"] }}</td>
                                        <td>{{ $employee["jobP"] }}</td>
                                        <td>{{ $employee["jobR"] }}</td> 
                                        <td>{{ $employee["observ"] }}</td>
                                    </tr>
                                </table>
                            </div>

                        </div> --}}
                        {{-- old code END --}}
                        <div class=" ps-10 pt-10">
                            <a href="{{ route('employees0') }}" class="flex items-center space-x-2 text-indigo-600 hover:underline">
                                <svg class="w-14 h-14 text-indigo-50 border-2 border-indigo-50 rounded-full p-1" " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                            </a>
                        </div>



                        {{-- New code START --}}
                        <div class="p-16">
                            <div class="p-8 bg-white shadow mt-4">
                                <div class="grid grid-cols-1 md:grid-cols-3">
                                    <div class="grid grid-cols-3 text-center order-last md:order-first mt-20 md:mt-0">
                        
                                        {{-- <div>
                                            <p class="font-bold text-gray-700 text-xl">22</p>
                                            <p class="text-gray-400">Friends</p>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-700 text-xl">10</p>
                                            <p class="text-gray-400">Photos</p>
                                        </div>
                                            <div>
                                            <p class="font-bold text-gray-700 text-xl">89</p>
                                            <p class="text-gray-400">Comments</p>
                                        </div> --}}
                                    </div>
                                    <div class="relative">
                                        <div class="w-48 h-48 bg-gray-200 mx-auto rounded-full shadow-2xl absolute inset-x-0 top-0 -mt-24 flex items-center justify-center text-indigo-500">
                                            <img 
                                            {{-- src="{{ asset('./uploads/'.$employee->image) }}" alt="{{ $employee->name }}"  --}}
                                            src="{{ asset('storage/' . $employee->image) }}"
                                            class="text-center mx-auto rounded-full">
                                        </div>
                                    </div>
                                
                                    {{-- <div class="space-x-8 flex justify-between mt-32 md:mt-0 md:justify-center">
                                        <button class="text-white py-2 px-4 uppercase rounded bg-blue-400 hover:bg-blue-500 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                                            Connect
                                        </button>
                                        <button class="text-white py-2 px-4 uppercase rounded bg-gray-700 hover:bg-gray-800 shadow hover:shadow-lg font-medium transition transform hover:-translate-y-0.5">
                                            Message
                                        </button>
                                    </div> --}}
                                </div>
                                
                                <div class=" border-gray-400 mt-20 text-center border-b pb-6 mb-8 pt-20 mx-20 px-10  w-auto">
                                    <dl class=" divide-y divide-gray-100">
                                        <h1 class=" my-3 py-3 mt-0 pt-0 text-6xl font-bold font-mono text-gray-700">{{ $employee["name"] }}<span class="font-light text-gray-500">  </span></h1>
                                        <p class="my-3 py-3 font-semibold font-serif cursor-pointer text-indigo-700 text-4xl ">{{ $employee["matr"] }}</p>
                                    
                                        <div class="my-3 py-3">
                                            <span class="font-semibold font-mono  text-gray-700 text-xl uppercase">Poste Prévu : </span>
                                            <span class="text-gray-600 font-serif text-xl">{{ $employee["jobP"] }} </span>
                                        </div>
                                        <div class="my-3 py-3">
                                            <span class="font-semibold font-mono text-gray-700 text-xl uppercase">Poste Réalisé : </span>
                                            <span class="text-gray-600 font-serif text-xl">{{ $employee["jobR"] }} </span>
                                        </div>
                                        <div class="my-3 py-3">
                                            <span class="font-semibold font-mono text-gray-700 text-xl uppercase">équipe : </span>
                                            <span class="text-gray-600 font-serif text-xl">{{ $employee["equipe"] }} </span>
                                        </div>

                                        
                                        <div class="my-3 py-3">
                                            <span class="font-semibold font-mono text-gray-700 text-xl uppercase">Observation : </span>
                                            <span class="text-gray-600 font-serif text-xl">{{ $employee["observ"] }} </span>
                                        </div>
                                    </dl>
                                    {{-- <p class="mt-8 text-gray-500">Solution Manager - Creative Tim Officer</p>
                                    <p class="mt-2 text-gray-500">University of Computer Science</p> --}}
                                </div>
                                
                                {{-- <div class="mt-12 flex flex-col justify-center">
                                    <p class="text-gray-600 text-center font-light lg:px-16">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</p>
                                    <button class="text-indigo-500 py-2 px-4  font-medium mt-4">
                                        Show more
                                    {{ $employee->id }}
                                    </button>
                                </div> --}}
                             
                            </div>
                        </div>
                        {{-- New code END --}}
                        
                    </div>
                </div>
            </div>

</x-app-layout>


{{-- @endsection --}}


