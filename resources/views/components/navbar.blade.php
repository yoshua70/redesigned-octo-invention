<div class="flex justify-between items-center">
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <a href="/" class="font-bold">Events@INP-HB</a>
    <ul class="flex gap-2 items-center">
        @auth
        <li>
            <a href="#" class="text-capitalize">{{ auth()->user()->name }}</a>
        </li>
        <li>
            <form method="POST" action="/logout" class="inline">
                @csrf
                <button type="submit" class="bg-white text-black">
                    Déconnexion
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        </li>
        @else
        <li>
            <a href="{{ URL::route('register') }}">Inscription</a>
        </li>
        <li>
            <a href="{{ URL::route('login') }}">Connexion</a>
        </li>
        @endauth
    </ul>
</div>
