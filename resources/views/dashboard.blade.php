<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evenimente politehnica') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="/eveniment1">Eveniment 1</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="/eveniment2">Eveniment 2</a>
                </div>
                <div class="p-6 text-gray-900">
                    <a href="/eveniment3">Eveniment 3</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
