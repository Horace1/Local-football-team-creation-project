<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('update-team') }}" method="post">

                        @csrf
                        @method('PUT')                                              

                        <label for="team_name">Team Name</label><br>
                        <input type="text" name="team_name" value="{{ $team->team_name }}"><br>
                        @error('player_name')
                            {{ $message }}
                        @enderror
                        <br>
                        <label for="area">Area</label><br>
                        <input type="text" name="area" value="{{ $team->area }}"><br>
                        @error('position')
                        {{ $message }}
                        @enderror
                        <br>
                        <label for="home_pitch">Home Pitch</label><br>
                        <input type="text" name="home_pitch" value="{{ $team->home_pitch }}"><br>
                        @error('team')
                        {{ $message }}
                        @enderror
                        <br>
                        <button type="submit">Update Team</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
