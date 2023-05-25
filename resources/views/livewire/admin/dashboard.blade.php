<div class="p-8" x-data="{ tab: 'equipmentList' }">
    <div class="sm:hidden mb-6">
        <label for="tabs" class="sr-only">Select a tab</label>
        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
        <select id="tabs" name="tabs"
            class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
            @change="tab = $event.target.value">
            <option x-bind:value="'contractList'" selected>Contracts</option>
            <option x-bind:value="'equipmentList'" >My Equipment</option>
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
            <div @click="tab = 'contractList'"
                class="cursor-pointer hover:text-gray-900 text-gray-500 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10"
                :class="{ 'bg-gray-50 text-gray-900': tab === 'contractList' }"
                aria-current="page">
                <span>Contracts</span>
                <span aria-hidden="true"
                    class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"
                    :class="{ 'bg-transparent': tab !== 'contractList' }"></span>
            </div>
            <div @click="tab = 'equipmentList'"
                class="cursor-pointer hover:text-gray-900 text-gray-500 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-center text-sm font-medium hover:bg-gray-50 focus:z-10"
                :class="{ 'bg-gray-50 text-gray-900': tab === 'equipmentList' }">
                <span>My Equipment</span>
                <span aria-hidden="true"
                    class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"
                    :class="{ 'bg-transparent': tab !== 'equipmentList' }"></span>
            </div>
        </nav>
    </div>

    <div x-show="tab == 'contractList'" x-transition>
        @livewire('admin.contract-list')
    </div>

    <div x-show="tab == 'equipmentList'" x-transition>
        @livewire('admin.equipment-list')
    </div>


</div>
