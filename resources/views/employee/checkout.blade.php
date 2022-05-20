<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Employee') }}
            </h2>
            
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b mb-2 border-gray-200 flex justify-between items-center">
                <p>{{ $currentDate }}</p>
                <form action="{{ route('employee.check-out') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-white px-4 py-2 bg-indigo-400 rounded">Check Out</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>