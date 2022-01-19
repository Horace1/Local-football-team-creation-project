<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Player') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                    
                    <form action="{{ route('update-player', $player->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <label for="player_name">Player Name</label><br>
                        <input type="text" name="player_name" value="{{ $player->player_name }}"><br>
                        @error('player_name')
                            {{ $message }}
                        @enderror
                        <br>
                        <label for="position">Position</label><br>
                        <input type="text" name="position" value="{{ $player->position }}"><br>
                        @error('position')
                        {{ $message }}
                        @enderror
                        <br>
                        <label for="team">Choose a Team:</label><br>
                        <select name="team" id="team">
                        @foreach ($teams as $team)                        
                        <option value="{{ $team->team_name }}">{{ $team->team_name }}</option>
                        @endforeach
                        </select>
                        <br>   
                        <button type="submit">Update Player</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
