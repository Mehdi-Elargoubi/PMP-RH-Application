
<!-- Deletion Modal -->
  
  <div wire:ignore.self id="delete-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Fermer</span>
              </button>
              <div class="p-6 text-center">
                  <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Souhaitez-vous supprimer cet employé?</h3>
                  <button wire:click="deleteEmployee()" data-modal-hide="delete-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                      Supprimer
                  </button>
                  <button data-modal-hide="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Annuler</button>
              </div>
          </div>
      </div>
  </div>
  


    <!-- Add-modal -->
    
    <div wire:ignore.self data-modal-hide="addModal" id="addModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full  max-h-full max-w-[800px]">

            <!-- Modal content -->
            <div  class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ajouter un Employé</h3>
                    {{-- <form class="space-y-6" action="{{ route('employee.store') }}" enctype="multipart/form-data" method="post"> --}}
                    <form enctype="multipart/form-data"  wire:submit.prevent="saveEmployee" class="space-y-6" >
                            @csrf
                        <!-- Formulaire -->
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-2 m-2">
                                {{-- name --}}
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                    <input wire:model='name' type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                    @error('name') <span class="error text-sm italic underline text-red-500">{{ $message }}</span> @enderror
                                </div>
                                {{-- matricule --}}
                                <div>
                                    <label for="matr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matricule</label>
                                    <input wire:model='matr' type="number" id="matr" name="matr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                    @error('matr') <span class="error text-sm italic underline text-red-500">{{ $message }}</span> @enderror
                                </div>
                                {{-- poste prévu --}}
                                <div>
                                    <label for="jobP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste prévu</label>
                                    <input wire:model='jobP' type="text" id="jobP" name="jobP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                </div>  
                                {{-- poste réalisé --}}
                                <div>
                                    <label for="jobR" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste réalisé</label>
                                    <input wire:model='jobR' type="text" id="jobR" name="jobR" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- observation --}}
                                <div>
                                    <label for="observ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observation</label>
                                    <input wire:model='observ' type="text" id="observ" name="observ" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- equipe --}}
                                <div>
                                    <label for="equipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Équipe</label>
                                    <input wire:model='equipe' type="text" id="equipe" name="equipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- image --}}
                                <div class="md:col-span-2 flex items-center justify-center w-full">
                                    <label for="image" class=" block text-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Image </label>
                                    <label for="image" class="ms-3 flex flex-col items-center justify-center w-full h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class=" flex flex-col items-center justify-center pt-2 pb-3">
                                            <svg class="pt-2 w-6 h-6 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-1 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class=" text-xs text-gray-500 dark:text-gray-400">PNG, JPG, JPEG</p>
                                        </div>
                                        <input wire:model="image" id="image" name="image" type="file" class="hidden" />
                                    </label>
                                </div>  

                                
                                @if ($image)
                                    <img class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" width="50px" height="50px" alt="">                                    
                                @endif

                            </div>

                            <div class="flex items-center justify-center h-full">
                                <button  type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Ajouter
                                    </span>
                                </button>
                                <button data-modal-hide="addModal" type="reset" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Annuler
                                    </span>
                                </button>
                            </div>                            
                            
                    </form>
                </div>
            </div>

        </div>
    </div>


    {{-- Modal . new --}}
    <div wire:ignore.self id="add-Modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-h-full max-w-[800px]">
    
            <div  class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="add-Modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Ajouter un Employé new</h3>
                    {{-- <form class="space-y-6" action="{{ route('employee.store') }}" enctype="multipart/form-data" method="post"> --}}
                    <form enctype="multipart/form-data"  wire:submit.prevent="saveEmployee" class="space-y-6" >
                            @csrf
                        <!-- Formulaire -->
                            <div class="grid gap-6 mb-6 md:grid-cols-2 p-2 m-2">
                                {{-- name --}}
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                    <input wire:model='name' type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                    @error('name') <span class="error text-sm italic underline text-red-500">{{ $message }}</span> @enderror
                                </div>
                                {{-- matricule --}}
                                <div>
                                    <label for="matr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Matricule</label>
                                    <input wire:model='matr' type="number" id="matr" name="matr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                    @error('matr') <span class="error text-sm italic underline text-red-500">{{ $message }}</span> @enderror
                                </div>
                                {{-- poste prévu --}}
                                <div>
                                    <label for="jobP" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste prévu</label>
                                    <input wire:model='jobP' type="text" id="jobP" name="jobP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                                </div>  
                                {{-- poste réalisé --}}
                                <div>
                                    <label for="jobR" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poste réalisé</label>
                                    <input wire:model='jobR' type="text" id="jobR" name="jobR" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- observation --}}
                                <div>
                                    <label for="observ" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observation</label>
                                    <input wire:model='observ' type="text" id="observ" name="observ" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- equipe --}}
                                <div>
                                    <label for="equipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Équipe</label>
                                    <input wire:model='equipe' type="text" id="equipe" name="equipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=" " >
                                </div>
                                {{-- image --}}
                                <div class="md:col-span-2 flex items-center justify-center w-full">
                                    <label for="image" class=" block text-center mb-2 text-sm font-medium text-gray-900 dark:text-white">Image </label>
                                    <label for="image" class="ms-3 flex flex-col items-center justify-center w-full h-20 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class=" flex flex-col items-center justify-center pt-2 pb-3">
                                            <svg class="pt-2 w-6 h-6 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-1 text-xs text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class=" text-xs text-gray-500 dark:text-gray-400">PNG, JPG, JPEG</p>
                                        </div>
                                        <input wire:model="image" id="image" name="image" type="file" class="hidden" />
                                    </label>
                                </div>  

                                
                                @if ($image)
                                    <img class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" width="50px" height="50px" alt="">                                    
                                @endif

                            </div>

                            <div class="flex items-center justify-center h-full">
                                <button  @if ($showModal==true) data-modal-hide="add-Modal" @endif type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Ajouter
                                    </span>
                                </button>
                                <button data-modal-hide="add-Modal" type="reset" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                        Annuler
                                    </span>
                                </button>
                            </div>                            
                            
                    </form>
                </div>
            </div>
    
        </div>
    </div>



{{-- modal 2  --}}

    <div wire:ignore.self id="addModal2" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-h-full max-w-[800px]">
    
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" wire:click="resetForm">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                    <form enctype="multipart/form-data" wire:submit.prevent="saveEmployee" class="space-y-6">
                        @csrf
                        <!-- Form content -->
                        <!-- ... (your form fields) ... -->
                        <div class="flex items-center justify-center h-full">
                            <button type="submit" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Ajouter
                                </span>
                            </button>
                            <button type="button" wire:click="resetForm" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Annuler
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    














<script>
    // Livewire.on('employeeAdded', () => {
    //     showAddModal = false;
    // });

// Livewire.on('employeeAdded', () => {
//     // Fermer le modal après 7 secondes
//     setTimeout(() => {
//         document.getElementById('addModal').classList.add('hidden');
//     }, 2000);
// });

</script>

    
@section('script')
    {{-- <script>
        window.addEventListener('close-modal', event => {
            $('#addModal').modal('hide');
        })
    </script> --}}
@endsection