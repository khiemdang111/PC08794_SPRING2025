<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('meta-title', 'Trang chủ')</title>

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>
    <!-- Header -->
    <!-- Nội dung chính -->
    <main class="min-h-screen py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    @livewireScripts
</body>

</html>
