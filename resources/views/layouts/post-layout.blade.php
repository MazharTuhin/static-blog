<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Static Blog') }}
        </h2>
    </x-slot> --}}

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 md:grid grid-cols-7 gap-6">
        <div class="col-span-5">
            {{ $slot }}
        </div>
        <div class="col-span-2">
            @if (isset($sidebar))
                {{ $sidebar }}
            @endif
        </div>
    </div>
</x-app-layout>
