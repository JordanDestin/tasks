<x-task-layout :teamid="$teamId">

    <div class="col-start-2 col-span-4">

        <div class="min-h-screen h-full flex flex-col after:flex-1">


            <div class="max-w-sm mx-auto w-full px-4 py-8">

                <h1 class="text-3xl text-slate-800 font-bold mb-6">{{ __('Create a task') }}</h1>
                <!-- Form -->
                <form action="{{ route('team.task.store',$teamId) }}" method="post">
                    @csrf
                    <!-- Titre -->
                    <div>
                        <x-label for="title" :value="__('Title')" />
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                    </div>

                    <!-- categories -->
                    <div>
                        @if (count($categories) == 0)
                            
                        <div class="flex items-center justify-end mt-4">
                            <button class="button button-pink mr-3" ><x-nav-link :href="route('team.category.create',$teamId)" :active="request()->routeIs('category.create')">
                                {{ __('Add a category') }}
                            </x-nav-link></button>
                        </div>
                        
                        @else         
                        <x-label for="category" :value="__('Category')" />
                        <x-select class="block mt-1 w-full" id="category" name="category">
                            <option value="">sélectionné une catégorie</option>
                            @foreach ($categories as $category)             
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach    
                        </x-select>

                        <div class="flex items-center justify-end mt-4">
                            <button class="button button-pink mr-3" ><x-nav-link :href="route('team.category.create',$teamId)" :active="request()->routeIs('category.create')">
                                {{ __('Create a category') }}
                            </x-nav-link></button>
                        </div>
                        @endif 
                    </div>
                    <!-- Détail -->
                    <div class="mt-4">
                        <x-label for="detail" :value="__('Detail')" />
                        <x-textarea class="block mt-1 w-full" id="detail" name="detail">{{ old('detail') }}</x-textarea>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
             

            </div>

        </div>

    </div>

</x-task-layout>

