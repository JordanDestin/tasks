<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a category')
        </h2>
    </x-slot>

  
    <x-tasks-card>

      <x-link-button href="{{ route('category.edit', $category->id) }}">
        @lang('edit')
    </x-link-button>
    
        <h3 class="font-semibold text-xl text-gray-800">@lang('Title')</h3>
        <p>{{ $category->name }}</p>
        
    
    </x-tasks-card>
</x-app-layout>