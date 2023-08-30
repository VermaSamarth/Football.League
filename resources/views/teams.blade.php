<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Football Clubs') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-4 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-3 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/teams.gif') }} alt="" width="180" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="padding-bottom: 50px;">
                <div class="container flex flex-col justify-right p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-3 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/epl_crop.gif') }} alt="" width="300" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2">Serial No</th>
                            <th class="border border-gray-400 px-4 py-2">Club Badge</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Name</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Location</th>
                            <th class="border border-gray-400 px-4 py-2">Formation Year</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Stadium Name</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Division</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Manager</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @php $count=0; @endphp
                        @foreach ($teams as $team)
                            @if ($team->division==1)
                            @php $count++; @endphp
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" ><img src="other_images/{{$team->logo}}" alt=""></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->location}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" ><strong>{{$team->year}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->stadium_name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{"Premier League"}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Pep Guardiola</strong></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container flex flex-col justify-right p-4 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-3 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/efl_crop.gif') }} alt="" width="440" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)">
                        <tr>
                            <th class="border border-gray-400 px-4 py-2">Serial No</th>
                            <th class="border border-gray-400 px-4 py-2">Club Badge</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Name</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Location</th>
                            <th class="border border-gray-400 px-4 py-2">Formation Year</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Stadium Name</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Division</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Manager</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @php $count=0; @endphp
                        @foreach ($teams as $team)
                            @if ($team->division==2)
                            @php $count++; @endphp
                                <tr>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" ><img src="other_images/{{$team->logo}}" alt=""></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->location}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" ><strong>{{$team->year}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$team->stadium_name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{"EFL Championship"}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Pep Guardiola</strong></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                @if (Auth::user()->is_admin==1)
                <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                    <a href="{{route('admin_add_team')}}"><img src={{ asset('images/addteam.png') }} alt="" width="200" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-right: 20px;"></a>
                    {{-- <a href="{{route('admin_add_team')}}"><img src={{ asset('images/file_upload.png') }} alt="" width="203" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-left: 20px;"></a> --}}
                </div>
                @else
                    <div><br><br><br></div>
                @endif
            </div>
        </div>
    </div>
    
</x-app-layout>
