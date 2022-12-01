<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Predict The Champion</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @livewireStyles
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('build/' . getManifestAssets()['css']) }}" />
    <script src="{{ asset('build/assets/' . getManifestAssets()['js']) }}" defer></script>  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>
    <div id="app">
        {{ $slot }}
    </div>
    @livewireScripts
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.js"></script>
</body>

</html>
