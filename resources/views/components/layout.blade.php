@props([
    'title' => 'My App',
])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
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

<body class="min-h-screen" data-theme="night">

    <x-nav />

    <main class="max-w-3xl mx-auto mt-6">
        {{ $slot }}
    </main>
</body>

</html>
