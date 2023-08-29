<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Players') }}
        </h2> --}}
    </x-slot>
   
    <div>
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white-100 text-gray-100">
                    <div class="container flex flex-col justify-right p-4 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                        <div class="flex items-center justify-center p-4 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                            <img src={{ asset('images/players.gif') }} alt="" width="300" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        </div>
                    </div>
                </section>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-center mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/playerinfo.png') }} alt="" width="500" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                    <div style="display: flex; justify-content: center; align-items: center; background-color:rgb(248, 138, 138); border-radius: 10px; padding: 20px;margin-bottom: 20px;">
                        <form action="{{route('add_new_player')}}" method="post" style="align-content: center">
                            @csrf
                            <label for="first_name" style="color: white"><strong>First Name:</strong></label>
                            <input type="text" id="first_name" name="first_name" placeholder="Enter the first name" required><br><br>
                        
                            <label for="last_name" style="color: white"><strong>Last Name</strong>:</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Enter the last name" required><br><br>
                        
                            <label for="play_position" style="color: white"><strong>Position:</strong></label>
                            <input type="text" id="play_position" name="play_position" placeholder="Enter the position" required><br><br>
                        
                            <label for="date_of_birth" style="color: white"><strong>Date of Birth:</strong></label>
                            <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Enter the dob" required><br><br>
                        
                            <label for="jersey_number" style="color: white"><strong>Jersey Number:</strong></label>
                            <input type="number" id="jersey_number" name="jersey_number" placeholder="Enter the jersey number" required><br><br>
                        
                            <label for="nationality" style="color: white"><strong>Nationality:</strong></label>
                            <input type="text" id="nationality" name="nationality" placeholder="Enter the nationality" required><br><br>
                        
                            <label for="team_id" style="color: white"><strong>Team ID:</strong></label>
                            <input type="number" id="team_id" name="team_id" placeholder="Enter the team Id" required><br><br>
                        
                            <button type="submit" style="color: white, border: 2px solid #3498db; background-color: #ffffff; color: red;padding: 8px 16px; border-radius: 4px;cursor: pointer;"><strong>Submit</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

