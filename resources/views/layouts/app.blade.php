<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="//cdn.ckeditor.com/4.16.0/full/ckeditor.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100 flex">
            @livewire('navigation-menu')
            <div class="w-full margin-16">
                <!-- Page Heading -->
                @if (isset($header))
                <header class="bg-purple-500 pb-8">
                    <div class="flex flex-col max-w-7xl px-8 py-6 text-white">
                        <div class="flex items-center">
                            <i class="fas fa-bars text-xl mr-16"></i><span class="text-2xl">Site title</span>
                        </div>
                    </div>
                </header>
                <div class="bg-white shadow max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 -mt-8">
                    {{ $header }}
                </div>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
            
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
