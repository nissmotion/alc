<x-modal-wide modal-name="addEquipmentModal" save-button="save">
    <div>
        <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900">Add Equipment</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Please enter all information for the rental equipment.</p>
            <x-validation-errors />
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Equipment Description</dt>
                    <dd class="mt-1 text-md leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <x-input class="w-full text-gray-900" wire:model="description" />
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Additional Notes</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <x-input class="w-full text-gray-900" wire:model="additional_notes"/>
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Pricing</dt>
                    <dd class="mt-2 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 grid grid-cols-2 gap-4">
                        <div>
                            <x-label class="text-xs">
                                Daily
                            </x-label>
                            <x-input type="number" min=".01" class="w-full text-gray-900 mt-1" wire:model="daily_price"/>
                        </div>
                        <div>
                            <x-label class="text-xs">
                                Daily (We dump)
                            </x-label>
                            <x-input type="number" min=".01" class="w-full text-gray-900 mt-1" wire:model="daily_we_dump_price"/>
                        </div>
                        <div>
                            <x-label class="text-xs">
                                Weekly
                            </x-label>
                            <x-input type="number" min=".01" class="w-full text-gray-900 mt-1" wire:model="weekly_price"/>
                        </div>
                        <div>
                            <x-label class="text-xs">
                                Monthly
                            </x-label>
                            <x-input type="number" min=".01" class="w-full text-gray-900 mt-1" wire:model="monthly_price"/>
                        </div>
                    </dd>
                </div>

            </dl>
        </div>
    </div>

</x-modal-wide>
