<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/kickoff.gif') }} alt="" width="900" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                    <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/Banner.png') }} alt="" width="1400" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                    </div>
                </div>
            </section>
        </div>
    </div>
    
</x-app-layout>
