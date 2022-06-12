<x-layout>
    <x-slot name="title">Connexion</x-slot>
    <div class="flex flex-col items-center gap-8 px-4 py-4">

        <div class="flex flex-col bg-white drop-shadow-md rounded-md w-full sm:w-2/5 px-4 py-4 gap-4">
            <h1 class="text-xl font-bold">Connexion</h1>
            <form method="POST" action="/users/authenticate" class="flex flex-col gap-2">
                @csrf
                <div class="flex flex-col">
                    <label for="email">Courriel</label>
                    <input type="email" name="email" value="{{ old('email') }}"/>
                    @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="password">Mot de Passe</label>
                    <input type="password" name="password"/>
                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-700">Connexion</button>
            </form>
            <p>Vous ne possédez pas de compte ? <a href="{{ URL::route('register') }}" class="text-blue-700 underline">Inscription</a></p>
        </div>
    </div>
</x-layout>
