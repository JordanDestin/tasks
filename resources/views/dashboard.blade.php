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
        <form id="destroy{{ $team->id }}" action="#" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </td>
   
  </tr>   @endforeach  
   
<!-- each row -->

</table>




    <div class="px-3 md:lg:xl:px-40 border-t border-b py-20 bg-opacity-10">
        <h2 class="text-2xl leading-normal mb-2 font-bold text-black text-center">Tâches Manager</h2>
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
        <div class="grid grid-cols- md:lg:xl:grid-cols-4 group bg-white shadow-xl shadow-neutral-100 border">
            @foreach ($teams as $team)
            <a href="{{ route('team.show',$team->id) }}">
                <div class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                    <span class="p-5 rounded-full bg-red-500 text-white shadow-lg shadow-red-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </span>
                    <p class="text-xl font-medium text-slate-700 mt-3">{{ $team->name }} {{ $team->id }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <div id="services" class="section relative pt-20 pb-8 md:pt-16 md:pb-0 bg-white">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <!-- Heading start -->
            <header class="text-center mx-auto lg:px-20">
                <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Tâches Manager</h2>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 60" style="margin: 0 auto; height: 35px;" xml:space="preserve">
                    <circle cx="50.1" cy="30.4" r="5" class="stroke-primary" style="fill: transparent; stroke-width: 2; stroke-miterlimit: 10;"></circle>
                    <line x1="55.1" y1="30.4" x2="100" y2="30.4" class="stroke-primary" style="stroke-width: 2; stroke-miterlimit: 10;"></line>
                    <line x1="45.1" y1="30.4" x2="0" y2="30.4" class="stroke-primary" style="stroke-width: 2; stroke-miterlimit: 10;"></line>
                </svg>
            </header>

            <div class="mt-8 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <!-- End heading -->
                <!-- row -->

                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    @foreach ($teams as $team)
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <a href="{{ route('team.show',$team->id) }}">
                            <!-- service block -->
                            <div class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
                                <div class="inline-block text-gray-900 mb-4">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                                        <path
                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                                        ></path>
                                        <path
                                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"
                                        ></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg leading-normal mb-2 font-semibold text-black">{{ $team->name }} {{ $team->id }}</h3>
                            </div>
                            <!-- end service block -->
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</x-app-layout>
