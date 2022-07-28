<x-task-layout :teamid="$teamId">

<!-- Task -->
<div class="max-w-3xl mx-auto">
<div class="bg-white shadow-lg rounded-sm border border-slate-200 p-4" draggable="true">
  <div class="sm:flex sm:justify-between sm:items-start">
      <!-- Left side -->

  
      <div class="grow mt-0.5 mb-3 sm:mb-0 space-y-3">
          <div class="flex items-center">
              <!-- Drag button -->
              <span class="sr-only">Drag</span>
              <button class="cursor-move mr-2">
                  
                  <svg class="w-3 h-3 fill-slate-500" viexBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 1h12v2H0V1Zm0 4h12v2H0V5Zm0 4h12v2H0V9Z" fill="#CBD5E1" fill-rule="evenodd" />
                  </svg>
              </button>
     
                  <div class="font-medium text-slate-800 peer-checked:line-through ml-2">{{ $task->title }}</div>
            
          </div>
          <!-- Nested checkboxes -->
          <ul class="pl-12 space-y-3">
              <li>
                  <label class="flex items-center">
                      <input type="checkbox" class="peer focus:ring-0 focus-visible:ring w-5 h-5 bg-white border border-slate-200 text-indigo-500 rounded-full" checked />
                      <span class="text-sm text-slate-800 peer-checked:line-through ml-3">Finish the presentation</span>
                  </label>
              </li>
              <li>
                  <label class="flex items-center">
                      <input type="checkbox" class="peer focus:ring-0 focus-visible:ring w-5 h-5 bg-white border border-slate-200 text-indigo-500 rounded-full" />
                      <span class="text-sm text-slate-800 peer-checked:line-through ml-3">Finish the design</span>
                  </label>
              </li>
              <li>
                  <label class="flex items-center">
                      <input type="checkbox" class="peer focus:ring-0 focus-visible:ring w-5 h-5 bg-white border border-slate-200 text-indigo-500 rounded-full" />
                      <span class="text-sm text-slate-800 peer-checked:line-through ml-3">Publish the content</span>
                  </label>
              </li>
          </ul>
      </div>
      <!-- Right side -->
      <div class="flex items-center justify-end space-x-3">
          <!-- Avatars -->
          <div class="flex shrink-0 -space-x-3 -ml-px">
            <div class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $task->status->name }}</div>
          </div>
          <!-- To-do info -->
          <div class="flex items-center text-slate-400 ml-3">
              <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                  <path d="M6.974 14c-.3 0-.7-.2-.9-.5l-2.2-3.7-2.1 2.8c-.3.4-1 .5-1.4.2-.4-.3-.5-1-.2-1.4l3-4c.2-.3.5-.4.9-.4.3 0 .6.2.8.5l2 3.3 3.3-8.1c0-.4.4-.7.8-.7s.8.2.9.6l4 8c.2.5 0 1.1-.4 1.3-.5.2-1.1 0-1.3-.4l-3-6-3.2 7.9c-.2.4-.6.6-1 .6z" />
              </svg>
              <div class="text-sm text-slate-500">1/3</div>
          </div>
          <!-- Attach button -->
          <button class="text-slate-400 hover:text-indigo-500">
              <svg class="w-4 h-4 shrink-0 fill-current mr-1.5" viewBox="0 0 16 16">
                  <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0zM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2z" />
              </svg>
          </button>
      </div>
  </div>
</div>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('Show a task')
        </h2>
    </x-slot>

    <div class="container mx-auto">
      <div class='flex items-center justify-center mt-8 '>  
        <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
        <div class="flex w-full items-center justify-between border-b pb-3">
          <div class="flex items-center space-x-3">
            <div class="text-lg font-bold text-slate-700">
              <p> {{ $task->status->name }}
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-8">
            <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $task->category->name }}</button>
            <div class="text-xs text-neutral-500">
              <p>{{ $task->created_at->format('d/m/Y') }}</p>
              @if($task->created_at != $task->updated_at)
                <h3 class="font-semibold text-xl text-gray-800 pt-2">@lang('Last update')</h3>
                <p>{{ $task->updated_at->format('d/m/Y') }}</p>
              @endif
            </div>
            <x-link-button href="{{ route('team.task.edit',[$teamId,$task->id]) }}">
              @lang('Update')
            </x-link-button>
          </div>
        </div>
    
        <div class="mt-4 mb-6">
          <div class="mb-3 text-xl font-bold">{{ $task->title }}</div>
          <div class="text-sm text-neutral-600">{{ $task->detail }}</div>
        </div>
    
        
          <div class="flex items-center justify-between text-slate-500">
            <div class="flex space-x-4 md:space-x-8">
              <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                
              </div>
     
            </div>
          </div>

          <form action="{{ route('task.checklist.store',$task) }}" method="post">
            @csrf
            
            <div>
                <x-label for="name" :value="__('name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
            </div>

           
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Add') }}
                </x-button>
            </div>
          </form> 
          <div class="border-b border-gray-200 shadow">
            <table class="w-full">
         
              <tbody class="bg-white">
                @foreach($checklists as $checklist)
                  <tr class="whitespace-nowrap">                 
                    <td class="px-4 py-4">{{ $checklist->name }}</td>
                  
                    <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $checklist->id }}').submit();">
                        @lang('Delete')
                    </x-link-button>
                    <form id="destroy{{ $checklist->id }}" action="{{ route('task.checklist.destroy', [$task->id, $checklist->id]) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')                       
                    </form>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @foreach($comments as $comment)      
            <textarea id="comment" name="comment" rows="1" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message...">{{ $comment->comment }}</textarea> 
            <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $comment->id }}').submit();">
                @lang('Delete')
            </x-link-button>
            <form id="destroy{{ $comment->id }}" action="{{ route('task.comment.destroy', [$task->id, $comment->id]) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')                       
            </form>
         
        @endforeach



          <form action="{{ route('task.comment.store',$task) }}" method="post">
            @csrf
            
            <div class="max-w-2xl mx-auto">

              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                <textarea id="comment" name="comment" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>            
            </div>
           
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Add') }}
                </x-button>
            </div>
          </form> 


          
      </div>
    </div>
    </div>


  </div>



 
 
</x-app-layout>

