<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/1920x1080')">
    <div class="w-full flex flex-col sm:justify-center items-center sm:max-w-md mt-6 px-6 py-4 backdrop-blur-md bg-white/30 overflow-hidden">
        <div class="my-8">
            {{ $logo }}
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </div>
</div>
