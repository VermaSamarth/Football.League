<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Latest News') }} --}}
        </h2>
    </x-slot>

    <div class="py-0">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white-100 text-gray-100">
                    <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                        <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                            <img src={{ asset('images/news.gif') }} alt="" width="300" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                        </div>
                    </div>
                </section>
                <div class="max-w-7xl mx-auto sm:px-5 lg:px-7">
                    <h1 class="text-xl font-bold text-center mb-6"><strong>No News listings right now.</strong></h1>
                    <p class="text-lg text-gray-700 text-center leading-relaxed mb-6">
                        We will be updating soon.
                    </p>
                </div>
        </div>
    </div>
    
</x-app-layout>
