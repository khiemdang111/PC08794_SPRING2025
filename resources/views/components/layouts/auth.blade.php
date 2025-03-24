<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('meta-title', 'Trang chủ')</title>

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailgrids.com/tailgrids.min.js"></script>
    @livewireStyles
</head>

<body>
    <!-- Nội dung chính -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    @livewireScripts
</body>

</html>
