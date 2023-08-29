<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Fixtures') }}
        </h2> --}}
    </x-slot>

    <div class="py-0">
        <div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <section class="bg-white-100 text-gray-100">
                <div class="container flex flex-col justify-right p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
                    <div class="flex items-center justify-right p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
                        <img src={{ asset('images/fixtures.png') }} alt="" width="200" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg">
                    </div>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                            <tr>
                                <td class="border border-gray-400 px-4 py-2"><strong>1</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Manchester City</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Manchester United</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>10-08-2023</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Etihad Stadium</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>5 - 2</strong></td>
                                <td class="border border-gray-400 px-4 py-2"><strong>Mike Dean</strong></td>
                                <td class="border border-gray-400 px-4 py-2" style="width: 183.6px;"><strong>Manchester City</strong></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-400 px-4 py-2">2</td>
                                <td class="border border-gray-400 px-4 py-2">Liverpool FC</td>
                                <td class="border border-gray-400 px-4 py-2">Chelsea FC</td>
                                <td class="border border-gray-400 px-4 py-2">12-08-2023</td>
                                <td class="border border-gray-400 px-4 py-2">Anfield</td>
                                <td class="border border-gray-400 px-4 py-2">2 - 2</td>
                                <td class="border border-gray-400 px-4 py-2">Joe Michaels</td>
                                <td class="border border-gray-400 px-4 py-2">Draw</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    
</x-app-layout>
