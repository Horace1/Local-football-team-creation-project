<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Teams') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed border border-slate-400 bg-slate-200 text-left">
                        <thead>
                            <th class="border border-slate-300">Team Name</th>
                            <th class="border border-slate-300">Area</th>
                            <th class="border border-slate-300">Home Pitch</th>
                            <th class="border border-slate-300">Edit</th>
                            <th class="border border-slate-300">Delete</th>
                        </thead>
                        <tbody>
                            
                                @forelse ($teams as $team)
                                    <tr>
                                        <td class="border border-slate-300"><a href="{{ route('view-players', $team->id) }}">{{ $team->team_name }}</a></td>
                                        <td class="border border-slate-300">{{ $team->area }}</td>
                                        <td class="border border-slate-300">{{ $team->home_pitch }}</td>
                                        <td class="border border-slate-300"><a href="{{ route('edit-team', $team->id) }}">Edit</a></td>
                                        <td class="border border-slate-300"><a href="{{ route('delete-team', $team->id) }}">Delete</a></td>
                                    </tr>
                                @empty
                                    <p>No Teams</p>
                                @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
