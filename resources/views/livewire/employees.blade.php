<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-950  overflow-hidden shadow-xl sm:rounded-lg ">
            
            {{-- from here --}}

            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            
                <h1 class="mt-8 text-4xl  text-gray-900 text-center underline  font-serif ">
                    Liste des employés 
                </h1>
            
                <div class="mb-6 text-gray-500 leading-relaxed font-serif">
    
                    <br>
                    @if($showSuccessMessage)
                    {{-- <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert"> --}}
                        <div class="flex justify-center items-center mx-auto">
                            <div id="success-delete" name="success-delete" class=" text-center inline-block mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transition-opacity duration-300" role="alert">
                                <strong class="font-bold">Succès !</strong>
                                <span class="block sm:inline pr-7">Employé supprimé avec succès.</span>
                                <span 
                                onclick="document.getElementById('success-delete').style.display = 'none';"
                                class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg  class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path d="M14.348 5.652a.5.5 0 010 .707L10.707 10l3.641 3.641a.5.5 0 11-.707.707L10 10.707l-3.641 3.641a.5.5 0 01-.707-.707L9.293 10 5.652 6.359a.5.5 0 01.707-.707L10 9.293l3.641-3.641a.5.5 0 01.707 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    @endif     
                    
                    <br>
                    @if (session()->has('message'))
                        {{-- <div class="flex justify-center items-center mx-auto">
                            <div id="success-delete" name="success-delete" class=" text-center inline-block mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative transition-opacity duration-300" role="alert">
                                <strong class="font-bold">Succès !</strong>
                                <span class="block sm:inline pr-7">{{ session('message') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg  class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path d="M14.348 5.652a.5.5 0 010 .707L10.707 10l3.641 3.641a.5.5 0 11-.707.707L10 10.707l-3.641 3.641a.5.5 0 01-.707-.707L9.293 10 5.652 6.359a.5.5 0 01.707-.707L10 9.293l3.641-3.641a.5.5 0 01.707 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div> --}}

                        <div x-data="{ successModal: true }">
                            {{-- <!-- Button to Open Modal -->
                            <button @click='showModal = true' class="bg-green-500 text-white px-4 py-2 rounded-lg">
                                Open Modal
                            </button> --}}
                        
                            <!-- Modal Overlay -->
                            <div x-show="successModal" class="fixed inset-0 flex items-center justify-center z-50">
                                <!-- Modal Content -->
                                <div class="bg-green-200 rounded-lg shadow-md p-3 px-6 m-4 max-w-xs w-full">
                                    <div class="flex justify-between items-center mb-4">
                                        <h3 class="font-semibold text-lg">Succès !</h3>
                                        <button @click='successModal = false' class="text-gray-600 hover:text-gray-800 transition">
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    <p class="text-gray-700">{{ session('message') }}</p>
                                </div>
                            </div>
                        </div>
                        

                    @endif
                    <br>

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
                        <div class="flex items-center justify-between p-4 gap-4 columns-2 sm:columns-1 ">
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input wire:model="searchTerm" type="text" name="search" id="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-slate-500 focus:border-slate-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Chercher ...">
                            </div>

                            <label for="table-search" class="sr-only">Ajouter</label>
                            <div class="relative">
                                <button data-modal-target="add-Modal" data-modal-toggle="add-Modal" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-slate-400 to-gray-200 group-hover:from-slate-200 group-hover:to-slate-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-slate-100 dark:focus:ring-blue-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                            Ajouter un employé
                                    </span>
                                  </button>                            
                            </div>
                        </div> 


                        
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Photo
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            ID
                                            <a wire:click="sortBy('id')">
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg></a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Matricule
                                            <a wire:click="sortBy('matr')" >
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Nom
                                            <a wire:click="sortBy('name')" >
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Poste prévu
                                            <a wire:click="sortBy('jobP')" >
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Poste réaliser
                                            <a wire:click="sortBy('jobR')" >
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Observation
                                            <a wire:click="sortBy('observ')" >
                                                <svg class="w-3 h-3 ml-1.5 cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3" colspan="3">
                                        <span>Action</span>
                                    </th>
                                </tr>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{-- <img src="{{ asset('uploads/' . $employee->image) }}" width="40px" height="40px" class="text-center mx-auto rounded-full "> --}}
                                            {{-- <img src="{{ asset('uploads/' . $employee->image) }}" width="40px" height="40px" alt="{{ $employee->name }}" width="40px" height="40px" class="text-center mx-auto rounded-full"> --}}
                                            {{-- <img src="{{ asset('storage/' . $employee->image) }}" width="40px" height="40px" alt="{{ $employee->name }}" class="text-center mx-auto rounded-full"> --}}
                                            <img src="{{ asset('storage/' . $employee->image) }}" width="40px" height="40px" alt="{{ $employee->name }}" class="text-center mx-auto rounded-full">
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["id"] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["matr"] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["name"] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["jobP"] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["jobR"] }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $employee["observ"] }}
                                        </td>
                                        <td>
                                            <a href="{{ route('employee.show',$employee->id) }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                <span class="relative text-xs px-3 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    Voir
                                                </span>
                                            </a>                          
                                        </td>
                                        <td>
                                            <a href="{{ route('employee.edit',$employee->id) }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:to-lime-300  group-hover:from-purple-600  hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                <span class="relative text-xs px-3 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    Modifier
                                                </span>
                                            </a>                          
                                        </td>
                                        <td>
                                            <form id="{{ $employee->id }}" action="{{ route('employee.delete', $employee->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                            <button 
                                                    wire:click="changeDelete({{ $employee->id }})"
                                                    data-modal-target="delete-modal" data-modal-toggle="delete-modal"
                                                    {{-- wire:click='confirmEmployeeDeletion({{ $employee->id }})' wire:loading.attr='disabled' --}}
                                                    {{-- onclick="event.preventDefault();
                                                    if(confirm('Souhaitez-vous supprimer cet employé ?'))
                                                    document.getElementById('{{ $employee->id }}').submit();"  --}}
                                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                                <span class="relative px-3 py-2 text-xs transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    Supprimer
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    @include("modal")

                                @endforeach

                            </tbody>
                        </table>
                        
                        <div class="m-4" >
                            {{ $employees->links() }}
                        </div>

                    </div>
                </div>
            </div>

            {{-- to here --}}

            {{-- <div class="mt-5">
                <x-danger-button wire:click="confirmEmployeeDeletion({{ $employee->id }})" wire:loading.attr="disabled">
                    delete
                </x-danger-button>
            </div>


            <x-dialog-modal wire:model="confirmingEmployeeDeletion">
                <x-slot name="title">
                    {{ __('Supprimer l\'employé') }}
                </x-slot>
    
                <x-slot name="content">
                    {{ __('Souhaitez-vous supprimer cet employé ?') }}
                </x-slot>
    
                <x-slot name="footer">
                    <x-secondary-button wire:click="$set('confirmingEmployeeDeletion', false)" wire:loading.attr="disabled">
                        {{ __('Annuler') }}
                    </x-secondary-button>
    
                    <x-danger-button class="ml-3" wire:click="$confirmingEmployeeDeletion" wire:loading.attr="disabled">
                        {{ __('Supprimer') }}
                    </x-danger-button>
                </x-slot>
            </x-dialog-modal> --}}
    

        </div>
    </div>





  ____________

<!-- Modal toggle -->
<button data-modal-target="addModal" data-modal-toggle="addModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button>
  
  





</div>











{{-- <div>
    <input wire:model="searchTerm" type="text" class="form-control" placeholder="searching...">
<br>
<ul class="list-group">
    @if ($employees && $employees->count()>0)
        @foreach ( $employees as $employee )
            <li class="list-group-item">
                {{ $employee->name }}
            </li>
        @endforeach
    @else
        <p class="text-blue-700">
            No user found
        </p>       
    @endif
</ul>
</div> --}}

