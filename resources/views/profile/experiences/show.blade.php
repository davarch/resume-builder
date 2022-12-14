<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Experience {{ $profile->owner->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($profile->experiences as $experience)
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold">{{ $experience->jobTitle->name }}: {{ $experience->company->name }}</h3>
                        <p>{{ $experience->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
