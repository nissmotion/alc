<nav x-data="{ mobileMenu: false, mobileMenuTab: 'cat1' }">
    <!--
        Mobile menu
    -->
    <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true"
        x-show="mobileMenu"
        style="display: none">
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"
            x-show="mobileMenu"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"></div>
        <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto"
            x-show="mobileMenu"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full">
            <div class="px-4 pt-5 pb-2 flex">
                <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400"
                    @click="mobileMenu = false">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex flex-wrap px-4 space-x-8" aria-orientation="horizontal" role="tablist">

                        <button id="tabs-1-tab-1" x-on:click="mobileMenuTab = 'cat1'"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                            :class="{ 'text-kanigreen border-kanigreen': mobileMenuTab === 'cat1' }"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">LandScapes</button>

                        <button id="tabs-1-tab-2" x-on:click="mobileMenuTab = 'cat2'"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                            :class="{ 'text-kanigreen border-kanigreen': mobileMenuTab === 'cat2' }"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">HardScapes</button>

                        <button id="tabs-1-tab-2" x-on:click="mobileMenuTab = 'cat3'"
                            class="text-gray-900 border-transparent flex-1 whitespace-nowrap py-4 px-1 border-b-2 text-base font-medium"
                            :class="{ 'text-kanigreen border-kanigreen': mobileMenuTab === 'cat3' }"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Trailer Rental</button>
                    </div>
                </div>

                <!-- 'cat1' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-1" role="tabpanel" x-show="mobileMenuTab === 'cat1'" x-transition
                    tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/stripe1.jpeg"
                                    alt="before"
                                    class="object-center object-cover">
                            </div>{{--
                            <div class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Before
                            </div> --}}
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/mow3.png"
                                    alt="after"
                                    class="object-center object-cover">
                            </div>{{--
                            <div class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                After
                            </div> --}}
                           {{--  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/before2.jpeg"
                                    alt="before"
                                    class="object-center object-cover">
                            </div>{{--
                            <div class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Before
                            </div> --}}
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/after2.jpeg"
                                    alt="after"
                                    class="object-center object-cover">
                            </div>{{--
                            <div class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                After
                            </div> --}}
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>
                    </div>
                </div>

                <!-- 'cat2' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" x-show="mobileMenuTab === 'cat2'" x-transition
                    tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/before1.jpeg"
                                    alt="before"
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Before
                            </a>
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/after1.jpeg"
                                    alt="after" class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                After
                            </a>
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/before2.jpeg"
                                    alt="before"
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Before
                            </a>
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>

                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/after2.jpeg"
                                    alt="after"
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                After
                            </a>
                            {{-- <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p> --}}
                        </div>
                    </div>
                </div>

                <!-- 'cat3' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12" aria-labelledby="tabs-1-tab-2" role="tabpanel" x-show="mobileMenuTab === 'cat3'" x-transition
                    tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                        <div class="group relative">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="/img/dt1.jpeg"
                                    alt="dumptrailer"
                                    class="object-center object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    <a href="{{ route('dashboard') }}/#our-promise" class="-m-2 p-2 block font-medium text-gray-900" @click="mobileMenu = false">Our Promise</a>
                </div>

                {{-- <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Careers</a>
                </div> --}}
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                <div class="flow-root">
                    @if (Auth::check())
                        <a href="{{ route('dashboard') }}" class="-m-2 p-2 block font-medium text-gray-900">Contracts</a>

                        <form method="POST" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <button class="-m-2 p-2 block font-medium text-gray-900" id="desktop_sign_out">
                                Sign out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="-m-2 p-2 block font-medium text-gray-900">Online Portal (coming soon)</a>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="relative bg-gray-900">
        <!-- Decorative image and overlay -->
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden">
            <img src="/img/mow.png" alt=""
                class="w-full h-full object-center object-cover">
        </div>
        <div aria-hidden="true" class="absolute inset-0 bg-gray-900 opacity-50"></div>

        <!-- Navigation -->
        <header class="relative z-10">
            <nav aria-label="Top">
                <div class="backdrop-blur-md backdrop-filter bg-opacity-10 bg-white">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div>
                            <div class="h-16 flex items-center justify-between">
                                <!-- Logo (lg+) -->
                                <div class="hidden lg:flex-1 lg:flex lg:items-center">
                                    <a href="{{ route('welcome') }}">
                                        <span class="sr-only">ALLENS LAWN CARE</span>
                                        <x-app-mark class="h-14 w-auto text-white" />
                                    </a>
                                </div>

                                <div class="hidden h-full lg:flex" x-data="{ cat1Detail: false, cat2Detail: false, cat3Detail: false }">
                                    <!-- Flyout menus -->
                                    <div class="px-4 bottom-0 inset-x-0">
                                        <div class="h-full flex justify-center space-x-8">
                                            <div class="flex">
                                                <div class="relative flex">
                                                    <button type="button" @click="cat1Detail = !cat1Detail;"
                                                        class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white"
                                                        aria-expanded="false">
                                                        Landscapes
                                                        <!-- Open: "bg-white", Closed: "" -->
                                                        <span
                                                            class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200"
                                                            aria-hidden="true"></span>
                                                    </button>
                                                </div>

                                                <div class="absolute top-full inset-x-0 text-sm text-gray-500"

                                                    x-on:click.away="cat1Detail = false"
                                                    x-show="cat1Detail"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0"
                                                    style="display: none">
                                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                    <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                        aria-hidden="true"></div>

                                                    <div class="relative bg-white">
                                                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/stripe1.jpeg"
                                                                            alt="1"
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                </div>

                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/mow3.png"
                                                                            alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex">
                                                <div class="relative flex">
                                                    <button type="button" @click="cat2Detail = !cat2Detail;"
                                                        class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white"
                                                        aria-expanded="false">
                                                        Hardscapes
                                                        <!-- Open: "bg-white", Closed: "" -->
                                                        <span
                                                            class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200"
                                                            aria-hidden="true"></span>
                                                    </button>
                                                </div>

                                                <div class="absolute top-full inset-x-0 text-sm text-gray-500"
                                                    x-on:click.away="cat2Detail = false"
                                                    x-show="cat2Detail"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0"
                                                    style="display: none">

                                                    <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                        aria-hidden="true"></div>

                                                    <div class="relative bg-white">
                                                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/before1.jpeg"
                                                                            alt="before"
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                    <div
                                                                        class="mt-4 block font-medium text-gray-900">
                                                                        <span class="absolute z-10 inset-0"
                                                                            aria-hidden="true"></span>
                                                                        Before
                                                                    </div>
                                                                </div>

                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/after1.jpeg"
                                                                            alt="after"
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                    <div
                                                                        class="mt-4 block font-medium text-gray-900">
                                                                        <span class="absolute z-10 inset-0"
                                                                            aria-hidden="true"></span>
                                                                        After
                                                                    </div>
                                                                </div>

                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/before2.jpeg"
                                                                            alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                    <div
                                                                        class="mt-4 block font-medium text-gray-900">
                                                                        <span class="absolute z-10 inset-0"
                                                                            aria-hidden="true"></span>
                                                                        Before
                                                                    </div>
                                                                </div>

                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/after2.jpeg"
                                                                            alt="after"
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                    <a href="#"
                                                                        class="mt-4 block font-medium text-gray-900">
                                                                        <span class="absolute z-10 inset-0"
                                                                            aria-hidden="true"></span>
                                                                        After
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex">
                                                <div class="relative flex">
                                                    <button type="button" @click="cat3Detail = !cat3Detail;"
                                                        class="relative z-10 flex items-center justify-center transition-colors ease-out duration-200 text-sm font-medium text-white"
                                                        aria-expanded="false">
                                                        Dump Trailer Rental
                                                        <!-- Open: "bg-white", Closed: "" -->
                                                        <span
                                                            class="absolute -bottom-px inset-x-0 h-0.5 transition ease-out duration-200"
                                                            aria-hidden="true"></span>
                                                    </button>
                                                </div>

                                                <!--
                                                'Women' flyout menu, show/hide based on flyout menu state.

                                                Entering: "transition ease-out duration-200"
                                                    From: "opacity-0"
                                                    To: "opacity-100"
                                                Leaving: "transition ease-in duration-150"
                                                    From: "opacity-100"
                                                    To: "opacity-0"
                                                -->
                                                <div class="absolute top-full inset-x-0 text-sm text-gray-500"
                                                    x-on:click.away="cat3Detail = false"
                                                    x-show="cat3Detail"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0"
                                                    style="display: none">
                                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                                    <div class="absolute inset-0 top-1/2 bg-white shadow"
                                                        aria-hidden="true"></div>

                                                    <div class="relative bg-white">
                                                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                            <div class="grid grid-cols-4 gap-y-10 gap-x-8 py-16">
                                                                <div class="group relative">
                                                                    <div
                                                                        class="aspect-w-1 aspect-h-1 rounded-md bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                                        <img src="/img/dt1.jpeg"
                                                                            alt="before"
                                                                            class="object-center object-cover">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="#our-promise"
                                                class="flex items-center text-sm font-medium text-white">Our Promise</a>

                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile menu and search (lg-) -->
                                <div class="flex-1 flex items-center lg:hidden">
                                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                    <button type="button" class="-ml-2 p-2 text-white" @click="mobileMenu = true">
                                        <span class="sr-only">Open menu</span>
                                        <!-- Heroicon name: outline/menu -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                    </button>

                                </div>

                                <a href="#" class="lg:hidden">
                                    <span class="sr-only">ALLENS LAWN CARE</span>

                                    <x-app-mark class="h-8 text-white" />
                                </a>
                                <div class="flex-1 flex items-center justify-end">
                                    @if(Auth::check())
                                        <a href="{{ route('dashboard') }}" class="mr-8 hidden text-sm font-medium text-white lg:block"> Contracts </a>
                                        <form method="POST" name="logout" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="hidden text-sm font-medium text-white lg:block" id="desktop_sign_out">
                                                Sign out
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}" class="hidden text-sm font-medium text-white lg:block"> Online Portal (coming soon) </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        @if(!Auth::check() && request()->route()->getName() != 'login')
            <div class="relative max-w-3xl mx-auto py-32 px-6 flex flex-col items-center text-center sm:py-64 lg:px-0">
                <h1 class="text-4xl font-extrabold tracking-tight text-white lg:text-6xl">Allen's Lawncare & Landscaping Services</h1>
                <p class="mt-4 text-xl text-white">Full service lawncare and landscaping company. Residential and commercial. We specialize in hardscapes and have over 20 years experience</p>
                <a href="https://www.facebook.com/Allenslawncare21" target="_blank" class="mt-4 text-lg text-white hover:text-blue-500 drop-shadow-md shadow-blue-200 hover:font-medium">
                    #makeyouryardlookgreatagain
                </a>
            </div>
        @endif
    </div>
</nav>
