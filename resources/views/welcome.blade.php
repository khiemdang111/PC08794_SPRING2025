<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
</head>
@php
    $title = "Create post"
@endphp
    <h1>Demo counter</h1>
    <livewire:counter />
    <livewire:posts.create-post title="{{ $title }}" />
<body>

    @livewireScripts
</body>

</html>
