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
                <div class="flex items-center justify-center p-3 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                    <img src={{ asset('images/teaminfo.png') }} alt="" width="500" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg" style="
                    padding-bottom: 10px;"></a>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; background-color:rgb(248, 138, 138); border-radius: 10px; padding: 20px;margin-bottom: 20px;">
                    <form action="{{route('add_new_stadium')}}" method="post" style="align-content: center" enctype="multipart/form-data" >
                        @csrf
                        <table class="table-auto border-collapse w-full">
                            <thead style="color:white; background-color:rgb(246, 70, 70)" >
                                <tr>
                                    <th class="px-4 py-2" >Manager</th>
                                    <th class="px-4 py-2" >Details</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;border border-white-400 px-4 py-2">

                                <tr>
                                    <td class="px-4 py-2"><label for="name" style="color: white"><strong>Stadium Name:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="text" id="name" name="name" placeholder="Enter the stadium name" required><br><br></td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2"><label for="location" style="color: white"><strong>Location:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="text" id="location" name="location" placeholder="Enter the location" required><br><br></td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2"><label for="team_id" style="color: white"><strong>Team ID:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="team_id" name="team_id" placeholder="Enter the team ID" required><br><br></td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2"><label for="capacity" style="color: white"><strong>Capacity:</strong></label></td>
                                    <td class=" px-4 py-2"><input type="number" id="capacity" name="capacity" placeholder="Enter the capacity" required><br><br></td>
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

