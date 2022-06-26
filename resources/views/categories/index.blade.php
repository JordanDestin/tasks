<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Categories List')
        </h2>
    </x-slot>


    @if (count($categories) == 0)

    <div class="border-b border-gray-200 shadow">
      <p>Aucune nouvelle Tâche</p>
      <x-button class="ml-3">
        <a href="{{ route('category.create') }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
    </x-button>
  </div>
    @else
    
    <div class="container flex justify-center mx-auto mt-6 ">
      <div class="flex flex-col">
          <div class="w-full">
              <div class="border-b border-gray-200 shadow">
                <table class="tabletask">
                  <thead class="bg-indigo-50">
                    <tr>
                      <th class="px-2 py-2 text-xs text-gray-500">#</th>
                      <th class="px-2 py-2 text-xs text-gray-500">@lang('Title')</th>
                      <th class="px-2 py-2 text-xs text-gray-500">Etat</th>
                      <th class="px-2 py-2 text-xs text-gray-500"></th>
                      <th class="px-2 py-2 text-xs text-gray-500"></th>
                      <th class="px-2 py-2 text-xs text-gray-500"></th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    @foreach($categories as $category)
                      <tr class="whitespace-nowrap">
                        <td class="px-4 py-4 text-sm text-gray-500">{{ $category->id }}</td>
                        <td class="px-4 py-4">{{ $category->name }}</td>

                
                  
                        <x-link-button href="{{ route('category.show', $category->id) }}">
                            @lang('Show')
                        </x-link-button>
                        
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $category->id }}').submit();">
                            @lang('Delete')
                        </x-link-button>
                        <form id="destroy{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div> 

      @endif
      
</x-app-layout>