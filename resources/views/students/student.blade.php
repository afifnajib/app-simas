<x-app-layout>
    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="min-w-0 flex-1">
              <h3 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-2xl sm:tracking-tight">{{ __('Student') }}</h3>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-10 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{}}" target="_blank" rel="noopener noreferrer">Tambah Student</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>