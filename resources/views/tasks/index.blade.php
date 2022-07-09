<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Tasks List')
        </h2>
    </x-slot>
   {{-- dd($teamId) --}}
  
    @if (count($tasks) == 0)

    <div class="border-b border-gray-200 mt-6 text-center shadow">
      <p>Aucune nouvelle Tâche</p>
      <x-button class="ml-3">
        <a href="{{ route('team.task.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
    </x-button>
  </div>
    @else
    <x-button class="ml-3">
      <a href="{{ route('team.task.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
  </x-button>
    <div class="container flex justify-center mx-auto mt-6 ">
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
                                        <x-link-button href="{{ route('team.task.show',[$teamId,$task->id]) }}">
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