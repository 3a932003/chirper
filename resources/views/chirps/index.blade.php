<x-app-layout>
     <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
         <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ ('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('message') }}
            </textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
             <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                 <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                     {{ __('Dashboard') }}
                 </x-nav-link>
                 <x-nav-link :href="route('chirps.index')" :active="request()->routeIs('chirps.index')">
                     {{ __('Chirps') }}
                 </x-nav-link>
             </div>
             <div class="pt-2 pb-3 space-y-1">
                 <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                     {{ __('Dashboard') }}
                 </x-responsive-nav-link>
                 <x-responsive-nav-link :href="route('chirps.index')" :active="request()->routeIs('chirps.index')">
                     {{ __('Chirps') }}
                 </x-responsive-nav-link>
             </div>
        </form>
    </div>
</x-app-layout>
