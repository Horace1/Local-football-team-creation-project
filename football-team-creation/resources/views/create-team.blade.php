<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{ route('save-team') }}" method="post">

                        @csrf
                        <label for="team_name">Team Name</label><br>
                        <input type="text" name="team_name" value="{{ old('team_name') }}"><br>
                        @error('team_name')
                            {{ $message }}
                        @enderror
                        <br>
                        <label for="area">Area</label><br>
                        <input type="text" name="area" value="{{ old('area') }}"><br>
                        @error('area')
                        {{ $message }}
                        @enderror
                        <br>
                        <label for="home_pitch">Home Pitch</label><br>
                        <input type="text" name="home_pitch" value="{{ old('home_pitch') }}"><br>
                        @error('home_pitch')
                        {{ $message }}
                        @enderror
                        <br>
                        <button class="rounded-none bg-indigo-500" type="submit">Create Team</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
