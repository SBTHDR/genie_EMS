<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Employee') }}
            </h2>
            <a href="{{ route('owner.index') }}" class="text-white px-4 py-2 bg-indigo-500 rounded">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form class="p-6" action="{{ route('owner.store') }}" method="POST">
                    @csrf

                    <div class="mb-6">
                      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                      <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter employee username">

                      @error('username')
                          <p class="text-red-400 text-sm mb-2">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                        <input type="emial" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter employee email">

                        @error('username')
                          <p class="text-red-400 text-sm mb-2">{{ $message }}</p>
                        @enderror
                      </div>

                      <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter employee password">

                        @error('username')
                          <p class="text-red-400 text-sm mb-2">{{ $message }}</p>
                        @enderror
                      </div>

                    <button type="submit" class="text-white bg-indigo-500 hover:bg-indigo-700 rounded-md w-full sm:w-auto px-5 py-2.5 text-center">Save</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>