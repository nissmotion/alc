<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Allens LawnCare and Landscaping LLC.  Providing lawn and landscaping services to the Kentuckyiana area.">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @stack('styles')

    </head>
    <body class="font-sans antialiased">
        <div>
            <main>
                @livewire('front.navigation.main-menu')

                <div>
                    {{-- CONTENT GOES HERE --}}
                    @if( isset($slot))
                        {{ $slot }}
                    @else
                        @yield('content')
                    @endif
                </div>
            </main>
        </div>
        <!-- Scripts -->
        @stack('scripts')
        @livewireScripts
    </body>
</html>
