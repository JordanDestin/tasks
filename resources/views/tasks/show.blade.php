<x-app-layout>
 

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
              <p>@if($task->state)
              La tâche a été accomplie !
              @else
                La tâche n'a pas encore été accomplie.
              @endif
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










          <div class="max-w-2xl mx-auto">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
          
           
          </div>
      </div>
    </div>
    </div>
 
 
</x-app-layout>

