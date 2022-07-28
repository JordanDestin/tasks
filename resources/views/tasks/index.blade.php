<x-task-layout :teamid="$teamId">

  {{-- 
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @lang('Tasks List')
    </h2>
</x-slot>


          @if (count($tasks) == 0)

          <div class="border-b border-gray-200 mt-6 text-center shadow">
              <p>Aucune nouvelle Tâche</p>
              <x-button class="ml-3">
                  <a href="{{ route('team.task.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
              </x-button>
          </div>
          @else
          <div class="border-gray-200 mt-6 text-center">
          <x-button class="ml-3">
            
              <a href="{{ route('team.task.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a>
          </x-button>
          </div>
          <div class="container flex justify-center mx-auto ">
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
                                  <p class="text-gray-800 dark:text-gray-100 text-sm">{{ $task->status->name }}</p>
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
          </div>

           --}}

          

            <!-- Site header -->
            
            
            <main>
                

                    <!-- Smaller container -->
                    <div class="max-w-3xl mx-auto">

                        <!-- Page header -->
                        <div class="sm:flex sm:justify-between sm:items-center mb-8">             
    
                            <!-- Right: Actions -->
                            <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-4">


                                <!-- Add taks button -->
                                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                    </svg>
                                    <span class="ml-2"><a href="{{ route('team.task.create',$teamId) }}" class="ml-4 text-sm text-white-700 dark:text-gray-500 underline"> {{ __('Create a task') }}</a></span>
                                </button>
    
                            </div>
    
                        </div>


                        <!-- Tasks -->
                        <div class="space-y-6">

                            @if (!empty($tasks))
                            <!-- Group 1 -->
                            <div>
                                <h2 class="grow font-semibold text-slate-800 truncate mb-4">{{ __('To do') }}</h2>
                                <div class="space-y-2">
    
                                    <!-- Task -->
                                    @foreach($tasks as $task)
                                    <div class="bg-white shadow-lg rounded-sm border border-slate-200 p-4" draggable="true">
                                        <div class="sm:flex sm:justify-between sm:items-start">
                                            <!-- Left side -->
                                            <div class="grow mt-0.5 mb-3 sm:mb-0 space-y-3">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="cursor-move mr-2">
                                                        <span class="sr-only">Drag</span>
                                                        <svg class="w-3 h-3 fill-slate-500" viexBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill="#CBD5E1" fill-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                  
                                                    <label class="flex items-center">
                                                        
                                                        <span class="font-medium text-slate-800 peer-checked:line-through ml-2">{{ $task->title }}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end space-x-3">
                                                <p class="text-sm">{{ $task->created_at->format('d M Y') }}</p>
                                                <x-link-button href="{{ route('team.task.show',[$teamId,$task->id]) }}">
                                                    @lang('Show')
                                                </x-link-button>
                                       
                                                <!-- Replies button -->
                                                <button class="flex items-center text-slate-400 hover:text-indigo-500">
                                                    <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                                                    </svg>
                                                    <div class="text-sm text-slate-500">7</div>
                                                </button>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @endif
                            <!-- Group 2 -->
                            <div>
                                <h2 class="grow font-semibold text-slate-800 truncate mb-4">{{ __('In progress') }}</h2>
                                <div class="space-y-2">
                                    @foreach ($tasksInProgress as $taskprogress )
                                    <div class="bg-white shadow-lg rounded-sm border border-slate-200 p-4" draggable="true">
                                        <div class="sm:flex sm:justify-between sm:items-start">
                                            <!-- Left side -->
                                            <div class="grow mt-0.5 mb-3 sm:mb-0 space-y-3">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="cursor-move mr-2">
                                                        <span class="sr-only">Drag</span>
                                                        <svg class="w-3 h-3 fill-slate-500" viexBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill="#CBD5E1" fill-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                 
                                                    <label class="flex items-center">
                                            
                                                        <span class="font-medium text-slate-800 peer-checked:line-through ml-2">{{ $taskprogress->title }}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end space-x-3">
                                                <p class="text-sm">{{ $taskprogress->created_at->format('d M Y') }}</p>
                                                <x-link-button href="{{ route('team.task.show',[$teamId,$taskprogress->id]) }}">
                                                    @lang('Show')
                                                </x-link-button>
                                       
                                                <!-- Replies button -->
                                                <button class="flex items-center text-slate-400 hover:text-indigo-500">
                                                    <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                                                    </svg>
                                                    <div class="text-sm text-slate-500">7</div>
                                                </button>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Group 3 -->
                            
                            @if (!empty($tasksPending))
                            <div>
                                <h2 class="grow font-semibold text-slate-800 truncate mb-4">{{ __('Pending') }}</h2>
                                <div class="space-y-2">
                                    @foreach ($tasksPending as $taskPending )
                                    <div class="bg-white shadow-lg rounded-sm border border-slate-200 p-4" draggable="true">
                                        <div class="sm:flex sm:justify-between sm:items-start">
                                            <!-- Left side -->
                                            <div class="grow mt-0.5 mb-3 sm:mb-0 space-y-3">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="cursor-move mr-2">
                                                        <span class="sr-only">Drag</span>
                                                        <svg class="w-3 h-3 fill-slate-500" viexBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill="#CBD5E1" fill-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <!-- Checkbox button -->
                                                    <label class="flex items-center">
                                                        <span class="font-medium text-slate-800 peer-checked:line-through ml-2">{{ $taskPending->title }}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end space-x-3">
                                                <p class="text-sm">{{ $taskPending->created_at->format('d M Y') }}</p>
                                                <x-link-button href="{{ route('team.task.show',[$teamId,$taskPending->id]) }}">
                                                    @lang('Show')
                                                </x-link-button>
                                       
                                                <!-- Replies button -->
                                                <button class="flex items-center text-slate-400 hover:text-indigo-500">
                                                    <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                                                    </svg>
                                                    <div class="text-sm text-slate-500">7</div>
                                                </button>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            
                                </div>
                            </div>
                            @endif
                    
                            <div>
                                <h2 class="grow font-semibold text-slate-800 truncate mb-4">{{ __('Resolved') }}</h2>
                                <div class="space-y-2">
                                    @foreach ($tasksResolved as $taskResolved )
                                    <div class="bg-white shadow-lg rounded-sm border border-slate-200 p-4" draggable="true">
                                        <div class="sm:flex sm:justify-between sm:items-start">
                                            <!-- Left side -->
                                            <div class="grow mt-0.5 mb-3 sm:mb-0 space-y-3">
                                                <div class="flex items-center">
                                                    <!-- Drag button -->
                                                    <button class="cursor-move mr-2">
                                                        <span class="sr-only">Drag</span>
                                                        <svg class="w-3 h-3 fill-slate-500" viexBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill="#CBD5E1" fill-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <!-- Checkbox button -->
                                                    <label class="flex items-center">
                                                        <span class="font-medium text-slate-800 peer-checked:line-through ml-2">{{ $taskResolved->title }}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Right side -->
                                            <div class="flex items-center justify-end space-x-3">
                                                <p class="text-sm">{{ $taskResolved->created_at->format('d M Y') }}</p>
                                                <x-link-button href="{{ route('team.task.show',[$teamId,$taskResolved->id]) }}">
                                                    @lang('Show')
                                                </x-link-button>
                                       
                                                <!-- Replies button -->
                                                <button class="flex items-center text-slate-400 hover:text-indigo-500">
                                                    <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                                                        <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z" />
                                                    </svg>
                                                    <div class="text-sm text-slate-500">7</div>
                                                </button>
                                        
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                           
                        </div>

                    </div>

                
            </main>

       


</x-task-layout>