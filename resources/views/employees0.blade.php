<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employés') }}
        </h2>
    </x-slot>

         @livewire('employees')
      
</x-app-layout>
