<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>


    
    <h2 class="text-lg text-center font-bold m-5">Tâches Manager</h2>
    {{-- 
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


 --}}



<div class="flex justify-center">


<div class="flex h-screen overflow-hidden">
    <!-- Content area -->
    <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
        <main>
            <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                <!-- Page header -->
                <div class="sm:flex sm:justify-between sm:items-center mb-5">
                    <!-- Post a job button -->
                    
                    <!-- Basic Modal -->
                    <div class="m-1.5">
                        <!-- Start -->
                        <div x-data="{ modalOpen: false }">
                            <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white"
                            @click.prevent="modalOpen = true"
                                aria-controls="basic-modal">
                                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg>
                            </button>
                        
                            <!-- Modal backdrop -->
                            <div
                                class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity"
                                x-show="modalOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-out duration-100"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                aria-hidden="true"
                                x-cloak
                            ></div>
                            <!-- Modal dialog -->
                            <div
                                id="basic-modal"
                                class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                                role="dialog"
                                aria-modal="true"
                                x-show="modalOpen"
                                x-transition:enter="transition ease-in-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in-out duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-4"
                                x-cloak
                            >

                            <form action="{{ route('team.store') }}" method="post">
                                @csrf

                                <div class="bg-white rounded shadow-lg overflow-auto max-w-lg p-4 w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                    <!-- Modal header -->
                                    <div class="px-5 py-3 border-b border-slate-200">
                                        <div class="flex justify-between items-center">
                                            <div class="font-semibold text-slate-800"><x-label for="name" :value="__('Create Team')" /></div>
                                            <button class="text-slate-400 hover:text-slate-500" @click="modalOpen = false">
                                                <div class="sr-only">Close</div>
                                                <svg class="w-4 h-4 fill-current">
                                                    <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Modal content -->
                                
                                        <!-- Non -->
                                        
                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus /> 
                                
                                    <!-- Modal footer -->
                                    <div class="px-5 py-4">
                                        <div class="flex flex-wrap justify-end space-x-2">
                                            <button class="btn-sm border-slate-200 hover:border-slate-300 text-slate-600" @click="modalOpen = false">Close</button>
                                            <x-button class="ml-3">
                                                {{ __('Send') }}
                                            </x-button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                            </div>                                            
                        </div>
                        <!-- End -->
                    </div>
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
                                    <div class="text-sm text-slate-500 italic whitespace-nowrap">{{ $team->created_at }}</div>
                                    <div class="text-xs inline-flex font-medium bg-amber-100 text-amber-600 rounded-full text-center px-2.5 py-1"><x-link-button href="{{ route('team.show',$team->id) }}">
                                        @lang('Show')
                                    </x-link-button></div>
                                    
                                    <button class="text-rose-500 hover:text-rose-600 rounded-full"
                                    onclick="event.preventDefault(); document.getElementById('destroy{{ $team->id }}').submit();">
                                        <span class="sr-only">@lang('Delete')</span>
                                        <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                            <path d="M13 15h2v6h-2zM17 15h2v6h-2z" />
                                            <path d="M20 9c0-.6-.4-1-1-1h-6c-.6 0-1 .4-1 1v2H8v2h1v10c0 .6.4 1 1 1h12c.6 0 1-.4 1-1V13h1v-2h-4V9zm-6 1h4v1h-4v-1zm7 3v9H11v-9h10z" />
                                        </svg>
                                    </button>
                                    <form id="destroy{{ $team->id }}" action="{{ route("team.destroy",$team->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

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
</div>

</x-app-layout>
