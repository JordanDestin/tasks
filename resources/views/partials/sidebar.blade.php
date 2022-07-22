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