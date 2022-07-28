<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        rel="stylesheet" />
    

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body
    class="font-inter antialiased bg-slate-100 text-slate-600"
    :class="{ 'sidebar-expanded': sidebarExpanded }"
    x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
>

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>
   
               {{--  <header class="flex flex-shrink-0">
                    <div class="flex-shrink-0 px-4 py-3 bg-gray-800 w-64">
                        <button class="flex items-center block w-full">
                            <img class="h-8 w-8 rounded-full object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=144&q=80" alt="" />
                            <span class="ml-4 text-sm font-medium text-white">{{ Auth::user()->name }}</span>
                         
                        </button>
                    </div>

                   
                    <div class="flex-1 flex bg-indigo-600 px-6 items-center justify-between">
                 
                 
                    </div>
                </header>
                --}}
               
                    @include("partials.sidebar")
                    {{--  <div class="w-64 p-6 bg-gray-100 overflow-y-auto">
                        <nav>
                            <a href="{{ route('dashboard') }}" >
                            <h2 class="font-semibold text-gray-600 uppercase tracking-wide">@lang("Theme List")</h2>
                        </a>
                            <div class="mt-3">
                                <a href="{{ route('category.index') }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
                                    <span>
                                        <i class="h-6 w-6 fa fa-envelope-o fill-current text-gray-700" aria-hidden="true"></i>
                                        <span class="text-gray-900">Catégories</span>
                                    </span>
                                    <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">6</span>
                                </a>
                            </div>
                     
                            <div class="mt-3">
                                <a href="{{ route('team.show',4) }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
                                    <span>
                                        <i class="h-6 w-6 fa fa-flag-o fill-current text-gray-700" aria-hidden="true"></i>
                                        <span class="text-gray-900">Tâches</span>
                                    </span>
                                </a>
                            </div>
                       
                            
                          
                   
                         
            
                        </nav>
                    </div>
                    --}}
                    
                    <main class="bg-gray-200">
                        <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

                        {{ $slot }}
                        </div>
                    </main>
                
     

        @yield('javascript')

 
    </body>
</html>
