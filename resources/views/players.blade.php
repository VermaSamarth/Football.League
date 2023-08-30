<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Players') }}
        </h2> --}}
    </x-slot>
   
    <div>
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <section class="bg-white-100 text-gray-100">
                    <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                            <img src={{ asset('images/players.gif') }} alt="" width="300" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        </div>
                    </div>
                </section>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <table class="table-auto border-collapse w-full">
                        <thead style="color:white; background-color:rgb(241, 42, 42)">
                            <tr>
                                <th class="border border-gray-400 px-4 py-2">Serial No</th>
                                <th class="border border-gray-400 px-4 py-2">First Name</th>
                                <th class="border border-gray-400 px-4 py-2">Last Name</th>
                                <th class="border border-gray-400 px-4 py-2">Jersey Number</th>
                                <th class="border border-gray-400 px-4 py-2">Position</th>
                                <th class="border border-gray-400 px-4 py-2">Date of Birth</th>
                                <th class="border border-gray-400 px-4 py-2">Nationality</th>
                                <th class="border border-gray-400 px-4 py-2">Team Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $player)
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$loop->index+1}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->fname}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->lname}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->jersey}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->position}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->dob}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->nationality}}</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>{{$player->team_id}}</strong></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (Auth::user()->is_admin)
                        <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                            <a href="{{route('admin_add_player')}}"><img src={{ asset('images/addplayer.png') }} alt="" width="200" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-right: 20px;"></a>
                            <a href="{{route('excel_players')}}"><img src={{ asset('images/file_upload.png') }} alt="" width="203" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="padding-left: 20px;"></a>
                        </div>
                    @else   
                        <div><br><br></div>
                    @endif   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

