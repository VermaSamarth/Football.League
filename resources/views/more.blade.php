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
                    <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/managers.gif') }} alt="" width="220" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)" >
                        <tr>
                            <th class="border border-gray-400 px-4 py-2" >Serial No</th>
                            <th class="border border-gray-400 px-4 py-2">First Name</th>
                            <th class="border border-gray-400 px-4 py-2">Last Name</th>
                            <th class="border border-gray-400 px-4 py-2">Nationality</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 250px;">Team</th>
                        </tr>
                    </thead>
                    @php $count=0; @endphp
                    <tbody style="text-align: center;">
                        @foreach ($managers as $manager)
                        <tr>
                            @php $count++; @endphp
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$manager->fname}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$manager->lname}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$manager->nationality}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$manager->is_manager->name}}</strong></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            @if (Auth::user()->is_admin)
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <a href="{{route('add_manager')}}"><img src={{ asset('images/add_manager.png') }} alt="" width="220" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg"></a>
            </div>
            @endif
            

            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/stadiums.gif') }} alt="" width="220" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)" >
                        <tr>
                            <th class="border border-gray-400 px-4 py-2" >Serial No</th>
                            <th class="border border-gray-400 px-4 py-2">Name</th>
                            <th class="border border-gray-400 px-4 py-2">Capacity</th>
                            <th class="border border-gray-400 px-4 py-2">Location</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 250px;">Team</th>
                        </tr>
                    </thead>
                    @php $count=0; @endphp
                    <tbody style="text-align: center;">
                        @foreach ($stadiums as $stadium)
                        <tr>
                            @php $count++; @endphp
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$stadium->name}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$stadium->capacity}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$stadium->location}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$stadium->is_home->name}}</strong></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                <a href="{{route('add_stadium')}}"><img src={{ asset('images/add_stadium.png') }} alt="" width="220" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg"></a>
            </div>
        </div>
    </div>
    
</x-app-layout>
