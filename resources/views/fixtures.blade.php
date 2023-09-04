@php
    use Carbon\Carbon;
    $currentDate = Carbon::today();
@endphp

<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div>
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <section class="bg-white-100 text-gray-100">
                        <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                            <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                                <img src={{ asset('images/upcoming.gif') }} alt="" width="500" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                            </div>
                        </div>
                    <table class="table-auto border-collapse w-full">
                        <thead style="color:white; background-color:rgb(241, 42, 42)">
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Serial No</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Home Team</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Away Team</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">MatchDay</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Venue</th>
                                <th class="border border-gray-400 px-4 py-2">Score</th>
                                <th class="border border-gray-400 px-4 py-2">Referee</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Winner</th>
                                @if (Auth::user()->is_admin)    
                                    <th class="border border-gray-400 px-4 py-2" style="width: 80.6px; align-text-last:center">Update</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            @php $count=0; @endphp
                            @foreach ($schedules as $schedule)
                                @if (!$schedule->status)
                                @php $count++; @endphp
                                
                                <tr style="text-content: center">
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->home_team->name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->away_team->name}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->match_date}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->venue}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->home_goals." - ".$schedule->away_goals}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->referee1}}</strong></td>
                                    <td class="border border-gray-400 px-4 py-2"><strong>{{"-"}}</strong></td>
                                    @if (Auth::user()->is_admin)    
                                        @if($currentDate >= $schedule->match_date)
                                            <td class="border border-gray-400 px-4 py-2" style="background-color: rgb(14, 220, 14)"><a href="/admin/schedule/update/{{$schedule->id}}"><strong>{{"+"}}</strong></a></td>
                                        @else
                                            <td class="border border-gray-400 px-4 py-2" style="background-color: rgb(241, 103, 103)"><strong>{{"+"}}</strong></td>
                                        @endif
                                    @endif
                                </tr> 
                                @endif
                            @endforeach 
                        </tbody>
                    </table>


                    <section class="bg-white-100 text-gray-100">
                        <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                            <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                                <img src={{ asset('images/results.gif') }} alt="" width="200" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                            </div>
                        </div>
                    </section>
                    <table class="table-auto border-collapse w-full">
                        <thead style="color:white; background-color:rgb(241, 42, 42)">
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Serial No</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Home Team</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Away Team</th>
                                <th class="border border-gray-400 px-4 py-2">MatchDay</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Venue</th>
                                <th class="border border-gray-400 px-4 py-2">Score</th>
                                <th class="border border-gray-400 px-4 py-2">Referee</th>
                                <th class="border border-gray-400 px-4 py-2" style="width: 183.6px;">Winner</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $count=0; @endphp 
                            @foreach ($schedules as $schedule)
                                @if ($schedule->status)
                                    @php $count++; @endphp
                                        <tr>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$count}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->home_team->name}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->away_team->name}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->match_date}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->venue}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->home_goals." - ".$schedule->away_goals}}</strong></td>
                                        <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->referee1}}</strong></td>
                                            @if ($schedule->home_goals < $schedule->away_goals)
                                                <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->away_team->name}}</strong></td>
                                            @elseif ($schedule->home_goals > $schedule->away_goals)
                                                <td class="border border-gray-400 px-4 py-2"><strong>{{$schedule->home_team->name}}</strong></td>
                                            @else
                                                <td class="border border-gray-400 px-4 py-2"><strong>{{"Draw"}}</strong></td> 
                                            @endif
                                        </tr> 
                                @endif
                            @endforeach 
                        </tbody>
                    </table>

                    @if (Auth::user()->is_admin)
                        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                            <a href="{{route('add_fixtures')}}"><img src={{ asset('images/addfixture.png') }} alt="" width="200" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-right: 20px;
                            "></a>
                            <a href="{{route('excel_schedule')}}"><img src={{ asset('images/file_upload.png') }} alt="" width="203" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-left: 20px;
                            "></a>
                        </div>
                    @else
                        <div><br><br></div>
                    @endif
                </div>
        </div>
    </div>
    
</x-app-layout>
