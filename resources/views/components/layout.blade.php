@props([
    'title' => 'My App',
])
<!DOCTYPE html>
<html lang="en" data-theme="sunset">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>{{ $title }}</title>
    <style>
        .max-w-400 {
            max-width: 400px;
        }
    </style>
</head>

<body class="min-h-screen">

    <x-nav />

    <main class="max-w-3xl mx-auto mt-6">
        {{ $slot }}
    </main>
</body>

</html>
