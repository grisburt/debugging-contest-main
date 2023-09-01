<div x-cloak x-show="openModale" class="relative z-10" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true">

    <div x-show="openModale" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Background backdrop, show/hide based on modal state." class="fixed inset-0 backdrop-blur-md bg-white/30 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="sm:flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <div x-show="openModale" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-description="Modal panel, show/hide based on modal state." class="relative transform overflow-hidden bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6" @click.away="openModale = false">
                <div class="flex flex-col">
                    <div class="my-6 pb-1 text-center sm:mt-0 sm:text-left w-full border-b-2 border-teal-800">
                        <h3 class="text-xl leading-6 font-semibold uppercase tracking-widest text-teal-600" id="modal-title">
                            {{ isset($task) ? 'Edit Task' : 'Create Task' }}
                        </h3>
                    </div>
                    <form action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}" method="POST">

                        @if (isset($task))
                            @method('PUT')
                        @else
                            @method('POST')
                        @endif
                        @csrf

                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" value="{{ isset($task) ? $task->name : '' }}" type="text" name="name" />

                        <x-label for="description" value="{{ __('Description') }}" class="mt-3" />
                        <textarea name="description" id="description" cols="30" rows="10" class="block mt-1 w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">{{ isset($task) ? $task->description : '' }}</textarea>

                        <x-label for="end_date" value="{{ __('End Date') }}" class="mt-3" />
                        <x-input value="{{ isset($task) ? $task->end_date : '' }}" type="date" name="end_date" id="end_date" placeholder="end date" />

                        <x-label for="status" value="{{ __('Status') }}" class="mt-3" />
                        <select name="status" id="status" class="block mt-1 w-full border-gray-300 focus:border-teal-500 focus:ring-teal-500 rounded-md shadow-sm">
                            @if(isset($task)))
                            <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="in progress" {{ $task->status === 'in progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Completed</option>
                            @else
                            <option value="pending" :selected="status === 'pending' || status === null">Pending</option>
                            <option value="in progress" :selected="status === 'in progress'">In Progress</option>
                            <option value="completed" :selected="status === 'completed'">Completed</option>
                            @endif
                        </select>

                        <x-button type="submit" class="mt-6 w-full justify-center rounded-md bg-green-600 py-4 text-sm font-semibold text-white shadow-sm hover:bg-green-500">
                            {{ isset($task) ? 'Update' : 'Create' }}
                        </x-button>

                    </form>

                    @isset($task)
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="flex justify-end">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="mt-3 underline rounded-md py-2 text-sm font-semibold text-red-600 hover:text-red-800">
                            delete this task
                        </button>
                    </form>
                    @endisset
                </div>
            </div>

        </div>
    </div>
</div>
