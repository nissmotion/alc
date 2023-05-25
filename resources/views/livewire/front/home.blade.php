<div class="bg-white">
    <!-- Hero section -->
    <main>
        <!-- Category section -->
        <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:max-w-7xl xl:mx-auto xl:px-8">
            <div class="px-4 sm:px-6 sm:flex sm:items-center sm:justify-between lg:px-8 xl:px-0">
                <h2 id="category-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">See our services
                </h2>{{--
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">Browse
                    all categories<span aria-hidden="true"> &rarr;</span></a> --}}
            </div>

            <div class="mt-4 flow-root">
                <div class="-my-2">
                    <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                        <div
                            class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-4 xl:gap-x-8">
                            <a href="#"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/img/stripe1.jpeg"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">LawnCare</span>
                            </a>

                            <a href="#"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/img/after1.jpeg"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-center text-xl font-bold text-white">Landscaping</span>
                            </a>

                            <a href="#"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/img/hardscape1.jpeg"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-center text-xl font-bold text-white">Hardscapes</span>
                            </a>

                            <a href="#"
                                class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                    <img src="/img/snowremoval1.jpeg"
                                        alt="" class="w-full h-full object-center object-cover">
                                </span>
                                <span aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span
                                    class="relative mt-auto text-center text-xl font-bold text-white">Snow Removal</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="mt-6 px-4 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">Browse all
                    categories<span aria-hidden="true"> &rarr;</span></a>
            </div> --}}
        </section>

        <!-- Featured section -->
        <section aria-labelledby="social-impact-heading" class="max-w-3xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:px-8">
            <div class="relative rounded-lg overflow-hidden">
                <div class="absolute inset-0">
                    <img src="/img/mow2.png" alt="Stripes"
                        class="w-full h-full object-center object-cover">
                </div>
                <div class="relative bg-gray-900 bg-opacity-75 text-center md:py-4">
                    @livewire('front.facebook-feed')
                </div>
            </div>
        </section>

        <!-- Collection section -->
        {{-- <section aria-labelledby="collection-heading"
            class="max-w-xl mx-auto pt-24 px-4 sm:pt-32 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 id="collection-heading" class="text-2xl font-extrabold tracking-tight text-gray-900">Shop by Collection
            </h2>
            <p class="mt-4 text-base text-gray-500">Each season, we collaborate with world-class designers to create a
                collection inspired by the natural world.</p>

            <div class="mt-10 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                <a href="#" class="group block">
                    <div aria-hidden="true"
                        class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-01.jpg"
                            alt="Brown leather key ring with brass metal loops and rivets on wood table."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Handcrafted Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Keep your phone, keys, and wallet together, so you can lose
                        everything at once.</p>
                </a>

                <a href="#" class="group block">
                    <div aria-hidden="true"
                        class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-02.jpg"
                            alt="Natural leather mouse pad on white desk next to porcelain mug and keyboard."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Organized Desk Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">The rest of the house will still be a mess, but your desk
                        will look great.</p>
                </a>

                <a href="#" class="group block">
                    <div aria-hidden="true"
                        class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg"
                            alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-gray-900">Focus Collection</h3>
                    <p class="mt-2 text-sm text-gray-500">Be more productive than enterprise project managers with a
                        single piece of paper.</p>
                </a>
            </div>
        </section> --}}

        <!-- Featured section -->
        <section id="our-promise" aria-labelledby="comfort-heading" class="max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="relative rounded-lg overflow-hidden">
                <div class="absolute inset-0">
                    <img src="/img/mow3.png" alt=""
                        class="w-full h-full object-center object-cover">
                </div>
                <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
                    <div class="relative max-w-3xl mx-auto flex flex-col items-center text-center">
                        <h2 id="comfort-heading" class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            Our Service Promise</h2>
                        <p class="mt-3 text-xl text-white">While we pride ourselves on our work, our number one goal is to provide the best customer service we can.  Our company has consistently grown year after year, and we believe it's because we provide great customer service and quality work.  While our schedule can be affected by the weather, we are committed to showing up and providing transparent high-quality services. If you have any questions or concerns, please don't hesitate to reach out.</p>
                        {{-- <a href="#"
                            class="mt-8 w-full block bg-white border border-transparent rounded-md py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Shop
                            Focus</a> --}}
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-gray-900">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-t border-gray-800 py-4 flex flex-row justify-between">
                <div class="text-sm text-gray-400">Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} Allen's Lawncare & Landscaping.</div>
                <div class="text-xs text-gray-400">Site designed and hosted by <a href="https://kevinhood.dev" target="_blank" class="hover:text-orange-400 hover:underline">KevDev.</a></div>
            </div>
        </div>
    </footer>
</div>
