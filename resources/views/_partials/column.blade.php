<!-- board header -->
<div class="sticky top-16 flex flex-row justify-between items-center py-3 px-2 backdrop-blur-md bg-white/30 border-t-4 border-{{ $color }}-400">
    <div class="flex items-center ">
        <h2 class="inline-flex items-center rounded-md bg-{{ $color }}-50 px-2 py-1 text-xs font-medium text-{{ $color }}-700 ring-1 ring-inset ring-{{ $color }}-600/20">
            {{ Str::title(Str::replace('_', ' ', $status)) }}
        </h2>
        <p class="text-gray-900 text-sm ml-2">{{ count(${'tasks_'.$status}) }}</p>
    </div>
</div>

<!-- board card -->
<div class="flex flex-col gap-2 py-5 px-4 bg-white">
    @foreach (${'tasks_'.$status} as $task)
    <div x-data="{ openModale: false }" @click="openModale = true"
        class="p-2 rounded shadow-md border bg-white hover:bg-gray-50 hover:shadow-xl transition-all duration-200 cursor-pointer">
        <h3 class="text-sm text-gray-700">{{ $task->name }}</h3>
        <p class="text-xs text-gray-500 mt-1">{{ $task->description }}</p>
        <p class="text-gray-400 text-sm mt-3 text-right">{{ Carbon\Carbon::parse($task->end_date)->diffForHumans() }}</p>
        @include('_partials.modal')
    </div>
    @endforeach
</div>

<!-- adding card -->
<div @click="openModale = true; status = '{{ Str::replace('_', ' ', $status) }}'" class="sticky top-32 flex flex-row items-center text-gray-900 px-2 backdrop-blur-md bg-white/30 cursor-pointer hover:bg-white/60 transition-all duration-200">
    <p class="rounded mr-2 text-2xl">+</p>
    <p class="pt-1 rounded text-sm">New</p>
</div>

