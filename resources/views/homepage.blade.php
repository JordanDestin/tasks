<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>


    
    <h2 class="text-lg text-center font-bold m-5">Tâches Manager</h2>
    <div class=" flex justify-center">
            
        <div class="w-full sm:max-w-md mt-6 mb-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!-- Erreurs de validation -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <!-- Message de réussite -->
            @if (session()->has('message'))
            <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('team.store') }}" method="post">
                @csrf
                <!-- Non -->
                <div>
                    <x-label for="name" :value="__('Create Team')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-3">
                        {{ __('Send') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>



<table class="rounded-t-lg m-5 w-5/6 mx-auto text-gray-100 bg-gradient-to-l from-indigo-500 to-indigo-800">
  <tr class="text-left border-b-2 border-indigo-300">
    <th class="px-4 py-3">#</th>
    <th class="px-4 py-3">@lang('Title')</th>  
  </tr>

  @foreach ($teams as $team)
  <tr class="border-b border-indigo-400">
   
    <td class="px-4 py-3">{{ $team->id }}</td>
    <td class="px-4 py-3">{{ $team->name }}</td>
    <td class="px-4 py-3"><x-link-button href="{{ route('team.show',$team->id) }}">
        @lang('Show')
    </x-link-button>
    </td>
    <td class="px-4 py-3">
        <x-link-button onclick="event.preventDefault(); document.getElementById('destroy{{ $team->id }}').submit();">
            @lang('Delete')
        </x-link-button>
        <form id="destroy{{ $team->id }}" action="{{ route("team.destroy",$team->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </td>
   
  </tr>   @endforeach  
   
<!-- each row -->

</table>

<div class="flex h-screen overflow-hidden">
    <!-- Content area -->
    <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
        <main>
            <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                <!-- Page header -->
                <div class="sm:flex sm:justify-between sm:items-center mb-5">
                    <!-- Post a job button -->
                    <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
                        <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                            <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                        </svg>
                    </button>
                </div>
                <!-- Content -->
                <div class="w-full">
                    <!-- Job list -->
                    <div class="space-y-2">
                        <!-- Job 1 -->
                        @foreach ($teams as $team)
                        <div class="bg-amber-50 shadow-lg rounded-sm border border-amber-300 px-5 py-4">
                            <div class="md:flex justify-between items-center space-y-4 md:space-y-0 space-x-2">
                                <!-- Left side -->
                                <div class="flex items-start space-x-3 md:space-x-4">
                                    <div>
                                        <p class="inline-flex font-semibold text-slate-800" href="job-post.html">{{ $team->name }}</p>
                                    </div>
                                </div>
                                <!-- Right side -->
                                <div class="flex items-center space-x-4 pl-10 md:pl-0">
                                    <div class="text-sm text-slate-500 italic whitespace-nowrap">Jan 4</div>
                                    <div class="text-xs inline-flex font-medium bg-amber-100 text-amber-600 rounded-full text-center px-2.5 py-1"><x-link-button href="{{ route('team.show',$team->id) }}">
                                        @lang('Show')
                                    </x-link-button></div>
                                    
                                    <button class="text-slate-300 hover:text-slate-400">
                                        <span class="sr-only">Bookmark</span>
                                        <svg class="w-3 h-4 fill-current" width="12" height="16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 0C.9 0 0 .9 0 2v14l6-3 6 3V2c0-1.1-.9-2-2-2H2Z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        @endforeach  
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


</x-app-layout>
