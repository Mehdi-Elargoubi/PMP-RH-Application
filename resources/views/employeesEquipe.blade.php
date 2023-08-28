{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile User') }}
        </h2>
            @livewire('profile')
            //comment
            {{-- <livewire:profile :id="$id" /> 
         
</x-app-layout> --}}

<x-app-layout>

    <x-slot name="header">
        Par groupe - 0
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-950  overflow-hidden shadow-xl sm:rounded-lg ">
                
                {{-- from here --}}
    
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                
                    <h1 class="mt-8 text-4xl  text-gray-900 text-center underline  font-serif ">
                        Employés par Équipe 
                    </h1>
                    
                    <div class="grid grid-cols-2 md:grid-cols-1 ">
                        @foreach ($employeesEquipe as $equipe => $employees)
                        
                            <div class="m-4 mt-8 text-gray-500 leading-relaxed font-serif">  
                                <h2 class="font-semibold text-3xl font-serif m-2 text-center "> <span class="underline">Équipe</span> : 0 {{ $equipe }}</h2>

                                <br>
        
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">     
                                    
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Photo
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    <div class="flex items-center ">
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
        
                                                <th scope="col" class="px-6 py-3">
                                                    <div class="flex items-center">
                                                        Équipe
                                                        <a wire:click="sortBy('equipe')" >
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
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                {{-- <li>{{ $employee->name }}</li> --}}
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <img src="{{ asset('storage/' . $employee->image) }}" width="40px" height="40px" alt="{{ $employee->name }}" class="text-center mx-auto rounded-full">
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{$employee->matr }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{ $employee->name }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{ $employee->jobP }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{ $employee->jobR }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{ $employee->observ }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center font-serif">
                                                        {{ $employee->equipe }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('profile', $employee->id) }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                            <span class=" font-serif relative text-xs px-3 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                                Voir
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
    
            </div>
        </div>
    
    </div>

</x-app-layout>

