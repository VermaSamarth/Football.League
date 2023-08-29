<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Points Table') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/table.png') }} alt="" width="280" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                            <th class="border border-gray-400 px-4 py-2">Edit</th>
                        </tr>
                    </thead>
                    <tbody style="text-align-last: center">
                        <tr>
                            <td class="border border-gray-400 px-4 py-2"><strong>1</strong></td>
                            <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Manchester City</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>38</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>32</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>2</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>4</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>102</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>22</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>80</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong>100</strong></td>
                            <td class="border border-gray-400 px-4 py-2"><strong><a href="http://">+</a></strong></td>
                        </tr>
                        <tr>
                            <td class="border border-gray-400 px-4 py-2">2</td>
                            <td class="border border-gray-400 px-4 py-2">Manchester United</td>
                            <td class="border border-gray-400 px-4 py-2">38</td>
                            <td class="border border-gray-400 px-4 py-2">30</td>
                            <td class="border border-gray-400 px-4 py-2">4</td>
                            <td class="border border-gray-400 px-4 py-2">4</td>
                            <td class="border border-gray-400 px-4 py-2">82</td>
                            <td class="border border-gray-400 px-4 py-2">22</td>
                            <td class="border border-gray-400 px-4 py-2">60</td>
                            <td class="border border-gray-400 px-4 py-2">94</td>
                            <td class="border border-gray-400 px-4 py-2">94</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-app-layout>
