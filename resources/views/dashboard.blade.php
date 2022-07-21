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

</x-app-layout>
