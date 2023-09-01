@props(['url', 'callback', 'alt'])

<div class="" x-data="{ {{ $callback }}: false }">

    <img src="{{ $url }}" alt="{{ $alt }}" class="cursor-pointer hover:shadow-lg transition-all duration-200" @click="{{ $callback }} = true">

    <div x-cloak x-show="{{ $callback }}" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">
        <div x-show="{{ $callback }}" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 backdrop-blur-md bg-white/30 transition-opacity"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="sm:flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div x-show="{{ $callback }}" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative transform overflow-hidden bg-transparent px-4 pb-4 pt-5 text-left transition-all sm:my-8 sm:w-full sm:max-w-7xl sm:p-18" @click.away="{{ $callback }} = false">
                    <img src="{{ $url }}" @click.away="{{ $callback }} = false" class="h-full w-full">
                </div>
            </div>
        </div>
    </div>

</div>
