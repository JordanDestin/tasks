<x-task-layout :teamid="$teamId">
  {{-- 
  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Categories List')
        </h2>
    </x-slot>


    @if (count($categories) == 0)

    <div class="border-b border-gray-200 shadow">
      <p>Aucune Catégories</p>
      <x-button class="ml-3">
        <a href="{{ route('team.category.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
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

                
                  
                        <x-link-button href="{{ route('team.category.show', [$teamId,$category->id]) }}">
                            @lang('Show')
                        </x-link-button>
                        
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $category->id }}').submit();">
                            @lang('Delete')
                        </x-link-button>
                        <form id="destroy{{ $category->id }}" action="{{ route('team.category.destroy', [$teamId,$category->id]) }}" method="POST" style="display: none;">
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

        --}}
@if (count($categories) == 0)
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-center sm:items-center mb-8">             
    
          <!-- Right: Actions -->
          <div class="grid grid-flow-col sm:auto-cols-max justify-center sm:justify-end gap-4">
      
      
              <!-- Add categories button -->
              <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                  <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                      <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                  </svg>
                  <span class="ml-2"><a href="{{ route('team.category.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a category') }}</a></span>
              </button>
      
          </div>
      
        </div>
   </div>
   @else
<!-- Table -->
<div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
  <div class="sm:flex sm:justify-between sm:items-center mb-8">             
    
    <!-- Right: Actions -->
    <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-4">


        <!-- Add categories button -->
        <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
            <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
            </svg>
            <span class="ml-2"><a href="{{ route('team.category.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a category') }}</a></span>
        </button>

    </div>

  </div>


<div class="col-span-full bg-white shadow-lg rounded-sm border border-slate-200">
  <header class="px-5 py-4 border-b border-slate-100">
      <h2 class="font-semibold text-slate-800">{{ __('Categories lists') }}</h2>
  </header>
  <div class="p-3">

      <!-- Table -->
      <div class="overflow-x-auto">
          <table class="table-auto w-full">
              <!-- Table header -->
              <thead class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm">
                  <tr>
                     
                      <th class="p-2 whitespace-nowrap">
                          <div class="font-semibold text-left">@lang('Title')</div>
                      </th>
                      <th class="p-2 whitespace-nowrap">                       
                      </th>
                      <th class="p-2 whitespace-nowrap">                          
                      </th>
                      
                  
                  </tr>
              </thead>
              <!-- Table body -->
              <tbody class="text-sm divide-y divide-slate-100">
                  <!-- Row -->
                  @foreach($categories as $category)
                  <tr>
                      <td class="p-2 whitespace-nowrap">
                        {{ $category->name }}
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <x-link-button href="{{ route('team.category.show', [$teamId,$category->id]) }}">
                          @lang('Show')
                        </x-link-button>
                      </td>
                      <td class="p-2 whitespace-nowrap">
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $category->id }}').submit();">
                          @lang('Delete')
                        </x-link-button>
                        <form id="destroy{{ $category->id }}" action="{{ route('team.category.destroy', [$teamId,$category->id]) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>

      </div>

      

  </div>
</div>

</div>
@endif   
      
</x-app-layout>