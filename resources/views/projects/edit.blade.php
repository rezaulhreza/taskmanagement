<x-app-layout>
    <x-slot name="header">
        @livewire('project.header')
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            @livewire('project.edit', ['project' => $project])

        </div>
    </div>
</x-app-layout>
