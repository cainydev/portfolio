<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    {{-- Favicon (not compiled by Vite, therefore directly pulled from root directory --}}
    <link rel="apple-touch-icon"
          sizes="180x180"
          href="/apple-touch-icon.png">
    <link rel="icon"
          type="image/png"
          sizes="32x32"
          href="/favicon-big.png">
    <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="/favicon.png">
    <link rel="manifest"
          href="/site.webmanifest">

    <style>
        @font-face {
            font-family: RobotoMono;
            src: url("{{ Vite::asset('resources/fonts/RobotoMono-Regular.ttf') }}");
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: RobotoMono;
            src: url("{{ Vite::asset('resources/fonts/RobotoMono-Medium.ttf') }}");
            font-weight: 500;
            font-display: swap;
        }

        @font-face {
            font-family: RobotoMono;
            src: url("{{ Vite::asset('resources/fonts/RobotoMono-Bold.ttf') }}");
            font-weight: 700;
            font-display: swap;
        }
    </style>
    @livewireStyles
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'techbrain Webdesign' }}</title>
    <meta name="description"
          content="{{ $description ?? 'Professionelles Webdesign für stabile und langfristig erfolgreiche Seiten. Finden Sie jetzt das richtige Angebot.' }}">
</head>

<body class="min-h-screen font-mono antialiased text-gray-900 bg-white scroll-smooth fill-gray-900">
    <x-header></x-header>
    <div class="">
        {{ $slot }}
    </div>

    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
