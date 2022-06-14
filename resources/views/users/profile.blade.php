<x-layout>
    <x-slot name="title">Profile</x-slot>
    <div class="flex flex-col items-center gap-8 px-4 py-4">

        <div class="flex flex-col bg-white drop-shadow-md rounded-md w-full sm:w-2/5 px-4 py-4 gap-4">
            <h1 class="text-xl font-bold">Profile</h1>
            @if (isset($message))
                <p class="alert">
                    {{ $message }}
                </p>
            @endif
            <form method="POST" action="/profile" class="flex flex-col gap-2">
                @csrf
                <div class="flex flex-col">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" value="{{ $profile->username ?? old('username') }}"/>
                    @error('username')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="bio">bio</label>
                    <textarea type="text" name="bio">{{ $profile->bio ?? old('bio') }}</textarea>
                    @error('bio')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-700">Mettre à jour</button>
            </form>
        </div>
    </div>
</x-layout>
