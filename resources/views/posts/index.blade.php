<x-layout>
    <x-slot name="title">Publications - {{ $profile->username }}</x-slot>
    <div class="flex flex-col items-center gap-8 px-4 py-4">

        <div class="flex flex-col bg-white drop-shadow-md rounded-md w-full sm:w-2/5 px-4 py-4 gap-4">
            <h1 class="text-xl font-bold">Publications de {{ $profile->username }}</h1>
            @if (isset($message))
                <p class="alert">
                    {{ $message }}
                </p>
            @endif

        </div>
    </div>
</x-layout>
