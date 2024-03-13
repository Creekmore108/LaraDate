<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        <!-- Secondary Navigation Menu -->
        <div class="flex">

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                {{-- <x-nav-link href="{{ route('browse') }}" :active="request()->routeIs('browse')"> --}}
                <x-nav-link href="">
                    {{ __('navigation.new') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="" >
                    {{ __('navigation.online') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="" >
                    {{ __('navigation.distance') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="" >
                    {{ __('navigation.match %') }}
                </x-nav-link>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
