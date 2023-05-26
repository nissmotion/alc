<x-modal-wide modal-name="newContractModal" no-buttons="true" height="h-auto">
    <div x-data="{ step: @entangle('step') }" x-cloak class="h-[80vh]">
		<div class="max-w-3xl mx-auto px-4 pt-10 overflow-auto">

			<div x-show="step === 'complete'"
                x-transition:enter="transition duration-100"
                x-transition:enter-start="transform -translate-x-48 opacity-0"
                x-transition:enter-end="transform translate-x-0 opacity-100"
                x-transition:leave="transition duration-100"
                x-transition:leave-start="transform opacity-100"
                x-transition:leave-end="transform translate-x-48 opacity-0">
				<div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
					<div>
						<svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

						<h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Rental Agreement Success</h2>

						<div class="text-gray-600 mb-8">
							Thank you! We appreciate your business. If you would like to be emailed your agreement, please click below.
						</div>

						<div class="flex flex-row justify-between">
                            <x-secondary-button @click="step = 1">
                                Close
                            </x-secondary-button>
                            <x-button wire:click="emailContract">
                                Email Me
                            </x-button>
                        </div>
					</div>
				</div>
			</div>

			<div x-show.transition="step != 'complete'">
				<!-- Top Navigation -->
				<div class="border-b-2 py-4">
					<div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight" x-text="`Step: ${step} of 5`"></div>
					<div class="flex flex-col md:flex-row md:items-center md:justify-between">
						<div class="flex-1">
							<div x-show="step === 1">
								<div class="text-lg font-bold text-gray-700 leading-tight">Customer Information</div>
							</div>

							<div x-show="step === 2">
								<div class="text-lg font-bold text-gray-700 leading-tight">Pre/Post Inspection</div>
							</div>

							<div x-show="step === 3">
								<div class="text-lg font-bold text-gray-700 leading-tight">Pricing</div>
							</div>

							<div x-show="step === 4">
								<div class="text-lg font-bold text-gray-700 leading-tight">Payment</div>
							</div>
						</div>

						<div class="flex items-center md:w-64">
							<div class="w-full bg-white rounded-full mr-2">
								<div class="rounded-full bg-green-500 text-xs leading-none h-2 text-center text-white" :style="'width: '+ parseInt(step / 5 * 100) +'%'"></div>
							</div>
							<div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 5 * 100) +'%'"></div>
						</div>
					</div>
				</div>
				<!-- /Top Navigation -->

				{{-- STEPS --}}
				<div class="py-10">
                    {{-- STEP 1 --}}
					<div x-show="step === 1" class="grid grid-cols-2"
                        x-transition:enter="transition duration-100"
                        x-transition:enter-start="transform -translate-x-48 opacity-0"
                        x-transition:enter-end="transform translate-x-0 opacity-100"
                        x-transition:leave="transition duration-100"
                        x-transition:leave-start="transform opacity-100"
                        x-transition:leave-end="transform translate-x-48 opacity-0">

						<div class="mb-5 space-y-2 col-span-2">
							<x-label for="equipment">Equipment</x-label>
							<x-select id="equipment" name="equipment" class="w-full" wire:model="equipment_id">
                                <option style="display: none;">Please select...</option>
                                @forelse($rentals as $rental)
                                    <option value="{{ $rental->getKey() }}">{{ $rental->description }}</option>
                                @empty
                                    <option>You must add equipment to rent first!</option>
                                @endforelse
                            </x-select>
						</div>

						<div class="mb-5 space-y-2 col-span-2">
							<x-label for="name">Name</x-label>
							<x-input type="text" id="name" name="name" class="w-full" wire:model="name"
								placeholder="Customer Name..."/>
						</div>

                        <div class="mb-5 space-y-2">
							<x-label for="phone">Phone</x-label>
							<x-input type="number" id="phone" name="phone" class="w-full" wire:model="phone"
								placeholder="Phone number..."/>
						</div>

						<div class="mb-5 space-y-2 pl-1">
							<x-label for="email">Email</x-label>
							<x-input type="email" name="email" class="w-full" wire:model="email"
								placeholder="Email address..."/>
						</div>

						<div class="mb-5 space-y-2 col-span-2">
							<x-label for="address">Address</x-label>
							<x-input type="text" id="address" name="address" class="w-full" wire:model="address"
								placeholder="Address..."/>
						</div>

						<div class="mb-5 space-y-2">
							<x-label for="city">City</x-label>
							<x-input type="text" id="city" class="w-full" wire:model="city"
								placeholder="City..."/>
						</div>

                        <div class="mb-5 grid grid-cols-3 pl-1">
                            <div class="mb-5 space-y-2">
                                <x-label for="state">State</x-label>
                                <x-input type="text" id="state" name="state" class="w-full" wire:model="state"
                                    placeholder="ST..."/>
                            </div>
                            <div class="mb-5 space-y-2 col-span-2 pl-1">
                                <x-label for="zip">Zip</x-label>
                                <x-input type="text" id="zip" name="zip" class="w-full" wire:model="zip"
                                    placeholder="Zip..."/>
                            </div>
                        </div>

					</div>

                    {{-- STEP 2 --}}
					<div x-show="step === 2"
                        x-transition:enter="transition duration-100"
                        x-transition:enter-start="transform -translate-x-48 opacity-0"
                        x-transition:enter-end="transform translate-x-0 opacity-100"
                        x-transition:leave="transition duration-100"
                        x-transition:leave-start="transform opacity-100"
                        x-transition:leave-end="transform translate-x-48 opacity-0">

						<div class="mb-5">
                            <div>
                                <h3 class="text-gray-700 text-xl mb-4">You must agree to continue</h3>
							    <p>I agree that I have inspected the rental and acknoledge that the rental is in working order. Any defects and damage will be reported and discussed before I take possesion of the rental. I also agree that a post-rental inspection will be performed by us and I will responsible for any and all damages. Damages may include but not limited to: Tires, Tailgate, Hydraulic system, Electronics, etc.
                                </p>
                                <div class="space-y-6 w-full text-center my-5">
                                    <x-label class="text-xl" for="step2Agree">I Agree</x-label>
                                    <x-checkbox id="step2Agree" name="step2Agree" class="h-8 w-8" wire:model="agree.2"/>
                                </div>
                            </div>
						</div>

					</div>

                    {{-- STEP 3 --}}
					<div x-show="step === 3"
                        x-transition:enter="transition duration-100"
                        x-transition:enter-start="transform -translate-x-48 opacity-0"
                        x-transition:enter-end="transform translate-x-0 opacity-100"
                        x-transition:leave="transition duration-100"
                        x-transition:leave-start="transform opacity-100"
                        x-transition:leave-end="transform translate-x-48 opacity-0">
						<div class="mb-5">
                            <div>
                                <h3 class="text-gray-700 text-xl mb-4">You must agree to continue</h3>
							    <ul class="list-disc ml-4">
                                    <li>I agree the rental starts on
                                        <span class="font-bold">{{ '04/02/2023' }}</span> and must be returned on
                                        <span class="font-bold">{{ '04/09/2023' }}</span> for a
                                        <span class="font-bold">{{ 'weekly' }}</span> rate of
                                        <span class="font-bold">{{ '125.00' }}</span>.
                                    </li>
                                    <li>
                                        I agree that if I return the rental late, that I will be charged a late fee.
                                    </li>
                                    <li>
                                        I agree that if the rental is not empty upon return, that I will be charged dump/cleaning fees.
                                    </li>
                                </ul>
                                <div class="space-y-6 w-full text-center my-5">
                                    <x-label class="text-xl" for="step3Agree">I Agree</x-label>
                                    <x-checkbox id="step3Agree" name="step3Agree" class="h-8 w-8" wire:model="agree.3"/>
                                </div>
                            </div>
						</div>
					</div>

                    {{-- STEP 4 --}}
					<div x-show="step === 4"
                        x-transition:enter="transition duration-100"
                        x-transition:enter-start="transform -translate-x-48 opacity-0"
                        x-transition:enter-end="transform translate-x-0 opacity-100"
                        x-transition:leave="transition duration-100"
                        x-transition:leave-start="transform opacity-100"
                        x-transition:leave-end="transform translate-x-48 opacity-0">
						<div class="mb-5">
                            <div>
                                <h3 class="text-gray-700 text-xl mb-4">You must agree to continue</h3>
							    <p>
                                    I agree that I may be charged for any additional fees per the previously agreed upon pages when returning the rental. We usually require a deposit of half the intital total upfront and the remainder (including all fees and surcharges) is due immediately upon return of the rental.
                                </p>
                                <div class="space-y-6 w-full text-center my-5">
                                    <x-label class="text-xl" for="step4Agree">I Agree</x-label>
                                    <x-checkbox id="step4Agree" name="step4Agree" class="h-8 w-8" wire:model="agree.4"/>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bottom Navigation -->
		<div class="fixed bottom-0 left-0 right-0 py-5 bg-white">
			<div class="max-w-3xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="w-1/2">
						<x-secondary-button x-show="step > 1" @click="step--">
                            Previous
                        </x-secondary-button>
					</div>

					<div class="w-1/2 text-right">
						<x-button x-show="step === 1" @click="step++">
                            Start Contract
                        </x-button>

                        @if($showNextButton)
                            <x-button @click="step === 4 ? step = 'complete' : step++">
                                {{ $step === 4 ? 'Complete' : 'Next' }}
                            </x-button>
                        @endif

					</div>
				</div>
			</div>
		</div>
		<!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
	</div>
</x-modal-wide>
