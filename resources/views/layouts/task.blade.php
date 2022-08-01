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



                    <div class="relative flex flex-col flex-1 ">
                        <header class="sticky top-0 bg-white border-b border-slate-200 z-30">
                            <div class="px-4 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between h-16 -mb-px">
                        
                                    <!-- Header: Left side -->
                                    <div class="flex">
                                        <!-- Hamburger button -->
                                        <button
                                            class="text-slate-500 hover:text-slate-600 lg:hidden"
                                            @click.stop="sidebarOpen = !sidebarOpen"
                                            aria-controls="sidebar"
                                            :aria-expanded="sidebarOpen"
                                        >
                                            <span class="sr-only">Open sidebar</span>
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="4" y="5" width="16" height="2" />
                                                <rect x="4" y="11" width="16" height="2" />
                                                <rect x="4" y="17" width="16" height="2" />
                                            </svg>
                                        </button>
                        
                                    </div>
                        
                                    <!-- Header: Right side -->
                                    <div class="flex items-center space-x-3">
                                        <!-- Divider -->
                                        <hr class="w-px h-6 bg-slate-200" />
                        
                                        <!-- User button -->
                                        <div class="relative inline-flex" x-data="{ open: false }">
                                            <button
                                                class="inline-flex justify-center items-center group"
                                                aria-haspopup="true"
                                                @click.prevent="open = !open"
                                                :aria-expanded="open"                        
                                            >  
                                               
                                                <div class="flex items-center truncate">
                                                    <span class="truncate ml-2 text-sm font-medium group-hover:text-slate-800">{{ Auth::user()->name }}</span>
                                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                                    </svg>
                                                </div>
                                            </button>
                        
                                            
                        
                                            <div
                                                class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-slate-200 py-1.5 rounded shadow-lg overflow-hidden mt-1"                
                                                @click.outside="open = false"
                                                @keydown.escape.window="open = false"
                                                x-show="open"
                                                x-transition:enter="transition ease-out duration-200 transform"
                                                x-transition:enter-start="opacity-0 -translate-y-2"
                                                x-transition:enter-end="opacity-100 translate-y-0"
                                                x-transition:leave="transition ease-out duration-200"
                                                x-transition:leave-start="opacity-100"
                                                x-transition:leave-end="opacity-0"
                                                x-cloak                    
                                            >
                                              
                                                <ul>
                                                    <li>
                                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="{{ route("profile.index") }}" @click="open = false" @focus="open = true" @focusout="open = false">{{ __('My account') }}</a>
                                                    </li>
                                                    <li>
                                                        <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false" href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}</a>
                                                    </li>
                                                </ul>                
                                            </div>
                                        </div>
                        
                                    </div>
                        
                                </div>
                            </div>
                        </header>
                        <main class="bg-gray-200">
                            <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    
                            {{ $slot }}
                            </div>
                        </main>
                        </div>
                    
                    
                
     

        @yield('javascript')

 
    </body>
</html>
