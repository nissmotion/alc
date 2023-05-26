@props([
        'type'          => 'modalName',
        'saveButton'    => false,
        'height'        => false,
        'noButtons'     => false,
        'width'         => false,
        'saveText'      => false,
    ])
<div x-data="{ modal: @entangle($modalName) }" class="z-50">
    <div class="fixed z-30 inset-0 overflow-y-auto" aria-labelledby="modal-title" aria-modal="true"
        @body-lock.window="document.getElementById('body').classList.add('overflow-hidden'); document.getElementById('body').classList.remove('overflow-visible')"
        @body-unlock.window="document.getElementById('body').classList.remove('overflow-hidden'); document.getElementById('body').classList.add('overflow-visible')"
        style="display: none" x-show="modal">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
                x-show="modal" wire:click="close">
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden xl:inline-block xl:align-middle xl:h-screen" aria-hidden="true">&#8203;</span>

            <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-y-auto shadow-xl transform transition-all sm:my-8 sm:align-middle {{ !$width ? 'sm:max-w-7xl w-full' : $width }} {{ !$height ? 'h-3/4screen' : $height }} sm:p-6 overflow-x-hidden"
                aria-modal="true"
                x-show="modal" x-transition id="modal" name="modal">
                {{-- CONTENT STARTS HERE --}}
                {{ $slot }}
                @if($noButtons == false)
                    <div class="grid {{ $saveButton ? 'grid-cols-2' : 'grid-cols-1' }} mt-8 pb-4">
                        <div class="mx-auto">
                            <x-secondary-button wire:click="close" class="px-10">
                                Close
                            </x-secondary-button>
                        </div>
                        @if ($saveButton)
                            <div class="mx-auto">
                                <x-button wire:click="{{ $saveButton }}" class="px-10">
                                    {{ $saveText ? $saveText : 'Save' }}
                                </x-button>
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
