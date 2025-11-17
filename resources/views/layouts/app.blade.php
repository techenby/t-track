<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, viewport-fit=cover">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxAppearance
</head>
<body class="nativephp-safe-area">
<flux:main>
    {{ $slot }}
</flux:main>

@isset ($footer)
<div class="fixed bottom-0 left-0 w-full z-1 pb-[var(--inset-bottom)] pl-6 pr-6">
    <div class="flex items-center justify-center gap-8">
        {{ $footer }}
    </div>
</div>
@endisset

@fluxScripts
</body>
</html>
