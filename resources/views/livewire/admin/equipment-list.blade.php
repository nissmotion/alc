<div>

    <div class="border-b border-gray-200 bg-white px-4 py-10 sm:px-6">
        <div class="-ml-4 -mt-2 flex flex-wrap items-center justify-between sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Equipment List</h3>
            </div>
            <div class="ml-4 mt-2 flex-shrink-0">
                <x-button wire:click="$emitTo('admin.modals.add-equipment-modal', 'openAddEquipmentModal')">
                    Add Equipment
                </x-button>
            </div>
        </div>
    </div>

    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 py-10">
        @forelse($equipments as $equipment)
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                <div class="flex w-full items-center justify-between space-x-6 p-6">
                    <div class="flex-1 truncate">
                        <div class="flex items-center space-x-3">
                            <h3 class="truncate text-sm font-medium text-gray-900">{{ $equipment->description }}</h3>
                            {{-- <span
                                class="inline-flex flex-shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                    Available
                            </span> --}}
                        </div>
                        <p class="mt-1 truncate text-sm text-gray-500">{{ !empty($equipment->additional_notes) ? $equipment->additional_notes : '...' }}</p>
                    </div>
                    {{-- <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                        alt=""> --}}
                </div>
                <div>
                    <div class="-mt-px grid grid-cols-2 divide-x divide-y divide-gray-200">
                        <div class="flex flex-1">
                            <div
                                class="inline-flex flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                Daily: ${{ $equipment->daily_price / 100 }}
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <div
                                class="inline-flex flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                Daily (We Dump): ${{ $equipment->daily_we_dump_price / 100 }}
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <div
                                class="inline-flex flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                Weekly: ${{ $equipment->daily_price / 100 }}
                            </div>
                        </div>
                        <div class="flex flex-1">
                            <div
                                class="inline-flex flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                                Monthly: ${{ $equipment->daily_price / 100 }}
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                <div> No equipment added yet</div>
            </li>
        @endforelse
        <!-- More people... -->
    </ul>

    @livewire('admin.modals.add-equipment-modal')
</div>
