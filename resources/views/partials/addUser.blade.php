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
    id="cookies-modal"
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
    <div class="bg-white rounded shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
        <div class="p-5">
            <!-- Modal header -->
            <div class="mb-2">
                <div class="flex justify-between items-center">
                    <div class="text-lg font-semibold text-slate-800">{{__("Add user")}}</div>
                    <button class="text-slate-400 hover:text-slate-500" @click="modalOpen = false">
                        <div class="sr-only">Close</div>
                        <svg class="w-4 h-4 fill-current">
                            <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Modal content -->
            <form action="{{ route('addUserTheme',$team->id) }}" method="post">
                @csrf
            <div class="text-sm mb-5">
                <div class="space-y-2">
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex flex-wrap justify-end space-x-2">
                <button class="btn-sm border-slate-200 hover:border-slate-300 text-slate-600" @click="modalOpen = false">Decline</button>
                <button class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white" type="submit">I Accept</button>
            </div>
        </form>
        </div>
    </div>
</div>
