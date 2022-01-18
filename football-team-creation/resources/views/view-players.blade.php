<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Players') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed border border-slate-400 bg-slate-200 text-left">
                        <thead>
                            <th class="border border-slate-300">Player Name</th>
                            <th class="border border-slate-300">Position</th>
                            <th class="border border-slate-300">Team</th>
                            <th class="border border-slate-300">Edit</th>
                            <th class="border border-slate-300">Delete</th>
                        </thead>
                        <tbody>                            
                            @forelse ($players as $player)
                                <tr>
                                    <td class="border border-slate-300">{{ $player->player_name }}</td>
                                    <td class="border border-slate-300">{{ $player->position }}</td>
                                    <td class="border border-slate-300">{{ $player->team }}</td>
                                    <td class="border border-slate-300"><a href="{{ route('edit-player', $player->id) }}">Edit</a></td>
                                    <td class="border border-slate-300"><a href="{{ route('delete-player', $player->id) }}">Delete</a></td>
                                </tr>
                            @empty
                                <p>No Players</p>
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>