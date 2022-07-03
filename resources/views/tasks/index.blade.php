<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Tasks List')
        </h2>
    </x-slot>
   
  
    @if (count($tasks) == 0)

    <div class="border-b border-gray-200 shadow">
      <p>Aucune nouvelle Tâche</p>
      <x-button class="ml-3">
        <a href="{{ route('tasks.create') }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
    </x-button>
  </div>
    @else
    
    <div class="container flex justify-center mx-auto mt-6 ">
      {{-- <div class="flex flex-col">
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
                    @foreach($tasks as $task)
                      <tr class="whitespace-nowrap">
                        <td class="px-4 py-4 text-sm text-gray-500">{{ $task->id }}</td>
                        <td class="px-4 py-4">{{ $task->title }}</td>
                        <td class="px-4 py-4">@if($task->state) {{ __('Done') }} @else {{ __('To do') }} @endif</td>
                        <x-link-button href="{{ route('tasks.show', $task->id) }}">
                            @lang('Show')
                        </x-link-button>
                        
                        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $task->id }}').submit();">
                            @lang('Delete')
                        </x-link-button>
                        <form id="destroy{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div> --}}


      <div class="mx-auto container py-20 px-6">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        
                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                      @foreach($tasks as $task) 
                      <div class="rounded">
                          
                            <div class="w-full h-64 flex flex-col justify-between dark:bg-gray-800 bg-white dark:border-gray-700 rounded-lg border border-gray-400 mb-6 py-5 px-4">
                                <div>
                                    <h4 class="text-gray-800 dark:text-gray-100 font-bold mb-3">{{ $task->title }}</h4>
                                    <p class="text-gray-800 dark:text-gray-100 text-sm">{{ $task->detail }}</p>
                                    <p class="text-gray-800 dark:text-gray-100 text-sm">{{ $task->category->name }}</p>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between text-gray-800 dark:text-gray-100">
                                        <p class="text-sm">{{ $task->created_at->format('d M Y') }}</p>
                                        <x-link-button href="{{ route('tasks.show', $task->id) }}">
                                          @lang('Show')
                                      </x-link-button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach

                </div>
                
</div>
      @endif
      
</x-app-layout>