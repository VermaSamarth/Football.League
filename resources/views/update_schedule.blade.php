<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Football Clubs') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-4 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/teams.png') }} alt="" width="180" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center justify-center mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                    <img src={{ asset('images/teaminfo.png') }} alt="" width="500" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg"></a>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; background-color:rgb(248, 138, 138); border-radius: 10px; padding: 20px;margin-bottom: 20px;">
                    <form action="/admin/schedule/update/{{$schedule->id}}/store" method="post" style="align-content: center" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT');
                        <table class="table-auto border-collapse w-full">
                            <thead style="color:white; background-color:rgb(246, 70, 70)" >
                                <tr>
                                    <th class="px-4 py-2" >Fixture</th>
                                    <th class="px-4 py-2" >Details</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: left;border border-white-400 px-4 py-2">
                                <tr>
                                    <td class="px-4 py-2"><label for="home_id" style="color: white"><strong>Home Team ID:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="home_id" name="home_id" placeholder="Enter the team name" value="{{old('home_id',$schedule->home_id)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="away_id" style="color: white"><strong>Away Team ID:</strong></label></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="away_id" name="away_id" placeholder="Enter the team name" value="{{old('away_id',$schedule->away_id)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="matchday" style="color: white"><strong>Date of MatchDay:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="date" id="matchday" name="matchday" placeholder="Enter the match date" value="{{old('match_date',$schedule->match_date)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="venue" style="color: white"><strong>Match Venue:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="text" id="venue" name="venue" placeholder="Enter the stadium name" value="{{old('venue',$schedule->venue)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="home_goals" style="color: white"><strong>Home Team Goals:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="home_goals" name="home_goals" placeholder="Enter the home goals" ><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="away_goals" style="color: white"><strong>Away Team Goals:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="away_goals" name="away_goals" placeholder="Enter the away goals" ><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="referee1" style="color: white"><strong>Referee Name 1:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="text" id="referee1" name="referee1" placeholder="Enter the referee 1 " value="{{old('referee1',$schedule->referee1)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="referee2" style="color: white"><strong>Referee Name 2:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="text" id="referee2" name="referee2" placeholder="Enter the referee 2" value="{{old('referee2',$schedule->referee2)}}" required><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="status" style="color: white"><strong>Match Status:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="status" name="status" placeholder="Status 1 or 0" value="{{old('status',$schedule->status)}}" ><br><br></td>
                                </tr>
                                
                                <tr>
                                    <td class=" px-4 py-2"><label for="winner_id" style="color: white"><strong>Winner ID:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="winner_id" name="winner_id" placeholder="Enter the winner id" ><br><br></td>
                                </tr>
                                
                            </tbody>
                        </table> 
                        <div class="container flex flex-col justify-center items-center p-3 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                            <button type="submit" style="color: white; border: 2px solid #e13636; background-color: #ffffff; color: rgb(213, 59, 59); padding: 8px 16px; border-radius: 4px; cursor: pointer;">
                                <strong>Submit</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>