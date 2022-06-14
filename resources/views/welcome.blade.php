<x-layout >
    <x-slot name="title">
        Events@INP-HB
    </x-slot>
    <div class="flex flex-col gap-8 justify-center px-4 py-4">
        <h1 class="text-5xl font-extrabold font-sans">Events at INP-HB</h1>
        <p>Ne ratez rien de ce qui se passe sur la cité.</p>
        <div>
            <button>
                <a href="{{ URL::route('register') }}">S'inscire</a>
            </button>
            <button>
                <a href="{{ URL::route('login') }}">Connexion</a>
                <i class="fa-solid fa-bolt"></i>
            </button>
        </div>
    </div>
</x-layout>
