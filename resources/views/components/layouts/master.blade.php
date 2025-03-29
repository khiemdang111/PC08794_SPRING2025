<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('meta-title', 'Trang chủ')</title>

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailgrids.com/tailgrids.min.js"></script>
    @livewireStyles
</head>

<body>
    <!-- Header -->
    @include('partials.header')
    <!-- Nội dung chính -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')
    @livewireScripts
</body>

</html>
