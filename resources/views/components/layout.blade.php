@props([
    'title' => 'My App',
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title }}</title>
    <style>
        .max-w-400 {
            max-width: 400px;
        }

        .card {
            background: #e3e3e3;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>

<body class="bg-gray-700 text-white min-h-screen p-6 max-w-xl mx-auto">
    <x-nav />

    <main class="mt-6">
        {{ $slot }}
    </main>
</body>

</html>
