 <div class=" mt-6 mb-6 text-gray-500 leading-relaxed font-serif">
    <p class="text-xl text-bold">
        test here
    </p>
    <br>

     <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
        <div class="flex items-center justify-between p-4">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model="searchTerm" type="text" name="search" id="search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-slate-500 focus:border-slate-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Chercher ...">
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
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                            </svg></a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Matricule
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg>
                            </a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Nom
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg>
                            </a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Poste prévu
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg>
                            </a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Poste réaliser
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg>
                            </a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Observation
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset('./uploads/'.$employee->image) }}" width="40px" height="40px" class="text-center mx-auto rounded-full ">
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
                                    onclick="event.preventDefault();
                                    if(confirm('Souhaitez-vous supprimer cet employé ?'))
                                    document.getElementById('{{ $employee->id }}').submit();" 
                                    class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                <span class="relative px-3 py-2 text-xs transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Supprimer
                                </span>
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        
        <div class="m-4" >
            {{ $employees->links() }}
        </div>

    </div>
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
