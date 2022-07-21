<x-task-layout :teamid="$teamId">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a category') }}
        </h2>
    </x-slot>
    <x-tasks-card>
        <!-- Erreurs de validation -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Message de réussite -->
        @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('team.category.update', [$teamId,$category->id]) }}" method="post">
            @csrf
            @method('put')
            <!-- Titre -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$category->name)" required autofocus />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-tasks-card>
</x-app-layout>
