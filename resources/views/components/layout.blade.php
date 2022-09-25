<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{--<meta http-equiv="Content-Security-Policy" content="default-src 'self'">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/fonts/RobotoMono-Regular.ttf')

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ Vite::asset('resources/favicon/favicon-big.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ Vite::asset('resources/favicon/favicon.png') }}">
    <link rel="manifest" href="{{ Vite::asset('resources/favicon/site.webmanifest') }}">

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

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ $title ?? 'techbrain Webdesign' }}</title>
</head>

<body class="min-h-screen font-mono antialiased text-gray-900 bg-white fill-gray-900">
    <x-header></x-header>
    <div class="">
        {{ $slot }}
    </div>
</body>

</html>
