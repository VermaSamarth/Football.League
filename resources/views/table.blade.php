<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Points Table') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="padding-bottom: 50px;">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-4 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-3 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/points_table.gif') }} alt="" width="370" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container flex flex-col justify-right p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-4 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/epl_crop.gif') }} alt="" width="300" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)" >
                        <tr>
                            <th class="border border-gray-400 px-4 py-2" >Position</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Team</th>
                            <th class="border border-gray-400 px-4 py-2">Games Played</th>
                            <th class="border border-gray-400 px-4 py-2">Games Won</th>
                            <th class="border border-gray-400 px-4 py-2">Games Lost</th>
                            <th class="border border-gray-400 px-4 py-2">Games Drew</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Scored</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Conceded</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Diffference</th>
                            <th class="border border-gray-400 px-4 py-2">Points</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @foreach ($points as $point)
                        <tr>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$loop->index+1}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$point->details->name}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->matches_played}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->wins}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->losses}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->draws}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_scored}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_conceded}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_scored - $point->goals_conceded}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->points}}</strong></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container flex flex-col justify-right p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-4 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/efl_crop.gif') }} alt="" width="300" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
                <table class="table-auto border-collapse w-full">
                    <thead style="color:white; background-color:rgb(241, 42, 42)" >
                        <tr>
                            <th class="border border-gray-400 px-4 py-2" >Position</th>
                            <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Team</th>
                            <th class="border border-gray-400 px-4 py-2">Games Played</th>
                            <th class="border border-gray-400 px-4 py-2">Games Won</th>
                            <th class="border border-gray-400 px-4 py-2">Games Lost</th>
                            <th class="border border-gray-400 px-4 py-2">Games Drew</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Scored</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Conceded</th>
                            <th class="border border-gray-400 px-4 py-2">Goals Diffference</th>
                            <th class="border border-gray-400 px-4 py-2">Points</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;">
                        @foreach ($points as $point)
                        <tr>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$loop->index+1}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>{{$point->details->name}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->matches_played}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->wins}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->losses}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->draws}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_scored}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_conceded}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->goals_scored - $point->goals_conceded}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$point->points}}</strong></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-app-layout>


<x-footer/>