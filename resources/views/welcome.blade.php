<x-guest-layout>

    <div class="bg-img min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
        <div class="container mx-auto py-20 px-10 text-center text-white backdrop-blur-md bg-white/30">
            <h1 class="text-5xl font-bold mb-5">Compétition de Débogage</h1>
            <p class="text-xl mb-10">Préparez-vous à résoudre des problèmes de code et à démontrer vos compétences en débogage !</p>
            <x-button >
                <a href="{{ route("register") }}">
                    Commencer la compétition
                </a>
            </x-button>
        </div>
    </div>

</x-guest-layout>
