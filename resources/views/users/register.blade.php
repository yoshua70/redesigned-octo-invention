<x-layout>
    <x-slot name="title">Inscription</x-slot>
    <div class="flex flex-col items-center gap-8 px-4 py-4">

        <div class="flex flex-col bg-white drop-shadow-md rounded-md w-full sm:w-2/5 px-4 py-4 gap-4">
            <h1 class="text-xl font-bold">Inscription</h1>
            <form method="POST" action="/users" class="flex flex-col gap-2">
                @csrf
                <div class="flex flex-col">
                    <label for="name">Nom et Prénoms</label>
                    <input type="text" name="name" value="{{ old('name') }}"/>
                    @error('name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
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
                <div class="flex flex-col">
                    <label for="password_confirmation">Confirmer le Mot de Passe</label>
                    <input type="password" name="password_confirmation"/>
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-700">Inscription</button>
            </form>
            <p>Vous possédez déjà un compte ? <a href="{{ URL::route('login') }}" class="text-blue-700 underline">Connexion</a></p>
        </div>
    </div>
</x-layout>
