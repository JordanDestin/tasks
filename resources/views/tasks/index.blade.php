<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        @lang('Tasks List')
    </h2>
</x-slot>
{{-- dd($teamId) --}}


<div class="h-screen flex flex-col">
    <header class="flex flex-shrink-0">
        <div class="flex-shrink-0 px-4 py-3 bg-gray-800 w-64">
            <button class="flex items-center block w-full">
                <img class="h-8 w-8 rounded-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80" alt="" />
                <span class="ml-4 text-sm font-medium text-white">{{ Auth::user()->name }}</span>
             
            </button>
        </div>
        <div class="flex-1 flex bg-indigo-600 px-6 items-center justify-between">
            <nav>
              <a href="{{ route('dashboard') }}" class="hover:bg-gray-600 rounded-lg bg-gray-800 inline-block text-sm font-medium text-white px-3 py-2 leading-none">@lang("Theme List")</a>
                <a href="{{ route('category.index') }}" class="hover:bg-gray-600 rounded-lg bg-gray-800 inline-block text-sm font-medium text-white px-3 py-2 leading-none">@lang("Categories List")</a>
                <a href="{{ route('category.create') }}" class="ml-2 hover:bg-gray-600 rounded-lg inline-block text-sm font-medium text-white px-3 py-2 leading-none">@lang("Create a category")</a>
                <a href="{{ route('team.task.create',$teamId) }}" class="hover:bg-gray-600 rounded-lg inline-block text-sm font-medium text-white px-3 py-2 leading-none">@lang("Create a task")</a>
                
            </nav>
     
        </div>
    </header>
    <div class="flex-1 flex overflow-x-hidden">
        <div class="w-64 p-6 bg-gray-100 overflow-y-auto">
            <nav>
                <h2 class="font-semibold text-gray-600 uppercase tracking-wide">MailBoxes</h2>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-envelope-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Inbox</span>
                        </span>
                        <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">6</span>
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-flag-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Flagged</span>
                        </span>
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-pencil-square-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Drafts</span>
                        </span>
                        <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">2</span>
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-user-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Assigned</span>
                        </span>
                        <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">1</span>
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-check-circle-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Closed</span>
                        </span>
                    </a>
                </div>
                <div class="mt-3">
                    <a href="" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                        <span>
                            <i class="h-6 w-6 fa fa-trash-o fill-current text-gray-700" aria-hidden="true"></i>
                            <span class="text-gray-900">Junk</span>
                        </span>
                    </a>
                </div>

            </nav>
        </div>
        <main class="bg-gray-200 w-full">

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
          <div class="container flex justify-center mx-auto mt-6">
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
        </main>
    </div>
</div>



</x-app-layout>