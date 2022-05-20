<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Employees List') }}
            </h2>
            <a href="{{ route('owner.create') }}" class="text-white px-4 py-2 bg-indigo-500 rounded">Add Employee</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($employees as $empolyee)
            <a href="" class="list-none">
                <li class="p-6 bg-white border-b mb-2 border-gray-200">
                    {{ $empolyee->username }}
                </li>
            </a>
            @endforeach
        </div>
    </div>
</x-app-layout>