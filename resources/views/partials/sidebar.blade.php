
{{--  
<div class="w-64 p-6 bg-gray-100 overflow-y-auto">
  
    <nav>
        <a href="{{ route('homepage') }}" >
        <h2 class="font-semibold text-gray-600 uppercase tracking-wide">@lang("Theme List")</h2>
    </a>
    <div class="mt-3">
        <a href="{{ route('team.show',$idteam) }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between hover:bg-gray-200 rounded-lg">
            <span>
                <i class="h-6 w-6 fa fa-flag-o fill-current text-gray-700" aria-hidden="true"></i>
                <span class="text-gray-900">Tâches</span>
            </span>
        </a>
    </div>
    <div class="mt-3">
        <a href="{{ route('team.task.create',$idteam) }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
            <span>
                <i class="h-6 w-6 fa fa-envelope-o fill-current text-gray-700" aria-hidden="true"></i>
                <span class="text-gray-900">@lang("Create a task")</span>
            </span>
            <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">6</span>
        </a>
    </div>
       
        <div class="mt-3">
            <a href="{{ route('team.category.index',$idteam) }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
                <span>
                    <i class="h-6 w-6 fa fa-envelope-o fill-current text-gray-700" aria-hidden="true"></i>
                    <span class="text-gray-900">@lang("Categories List")</span>
                </span>
                <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">6</span>
            </a>
        </div>
        <div class="mt-3">
            <a href="{{ route('team.category.create',$idteam) }}" class="-mx-3 py-1 px-3 text-sm font-medium flex items-center justify-between bg-gray-200 rounded-lg">
                <span>
                    <i class="h-6 w-6 fa fa-envelope-o fill-current text-gray-700" aria-hidden="true"></i>
                    <span class="text-gray-900">@lang("Create a category")</span>
                </span>
                <span class="inline-block px-4 py-1 text-center py-1 leading-none text-xs font-semibold text-gray-700 bg-gray-300 rounded-full">6</span>
            </a>
        </div>
 


    </nav>
</div>
--}}







<div>
  <!-- Sidebar backdrop (mobile only) -->
  <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200" :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
   
        <div id="sidebar" class="flex flex-col absolute z-40 left-0 top-0  lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>

                <ul class="mt-3">
                    <!-- Dashboard -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0">
                        <a class="block text-slate-200 hover:text-slate-200 truncate transition duration-150" href="{{ route('homepage') }}" >
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-400" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z" />
                                        <path class="fill-current text-slate-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z" />
                                        <path class="fill-current text-slate-400" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                                </div>
                           
                            </div>
                        </a>
                
                    </li>
                    <!-- Catégories -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="{{ route('team.category.index',$idteam) }}" >
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-400" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z" />
                                        <path class="fill-current text-slate-700" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z" />
                                        <path class="fill-current text-slate-600" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Catégories</span>
                                </div>
                  
                            </div>
                        </a>
                    
                    </li>
              
                    <!-- Tasks -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" >
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="{{ route('team.show',$idteam) }}">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z" />
                                        <path class="fill-current text-slate-600" d="M1 1h22v23H1z" />
                                        <path class="fill-current text-slate-400" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z" />
                                    </svg>
                                    <span class="text-sm font-medium ml-3  lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tâches</span>
                                </div>
                      
                            </div>
                        </a>

                    </li>
                
                    
                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                   
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>

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
</div>