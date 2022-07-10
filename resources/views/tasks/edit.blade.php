<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a task') }}
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
        <form action="{{ route('team.task.update',[$teamId,$task->id]) }}" method="post">
            @csrf
            @method('put')
            <!-- Titre -->
            <div>
                <x-label for="title" :value="__('Title')" />
                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $task->title)" required autofocus />
            </div>
            <!-- Catégorie -->
            <x-label for="category" :value="__('Category')" />
                <x-select class="block mt-1 w-full" id="category" name="category">
                    <option value="{{ $task->category->id }}">{{ $task->category->name }}</option>
                    @foreach ($categories as $category)             
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach    
                </x-select>
            <!-- Détail -->
            <div class="mt-4">
                <x-label for="detail" :value="__('Detail')" />
                <x-textarea class="block mt-1 w-full" id="detail" name="detail">{{ old('detail', $task->detail) }}</x-textarea>
            </div>
            <!-- Tâche accomplie -->
            <div class="block mt-4">
                <x-label for="State" :value="__('Status')" />
                <x-select class="block mt-1 w-full" id="status" name="status">
                    <option value="{{ $task->status->id }}">{{ $task->status->name }}</option>
                    @foreach ($statutes as $status)             
                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                    @endforeach    
                </x-select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-tasks-card>
</x-app-layout>
