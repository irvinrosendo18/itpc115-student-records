<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Student Records' }} | Student Records</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="page-shell">
        <header class="site-header">
            <a class="brand" href="{{ route('students.index') }}">
                <span class="brand-mark">S</span>
                <span>Student records</span>
            </a>
            <a class="text-link" href="{{ route('students.index') }}">Directory</a>
        </header>

        @yield('content')
    </div>
</body>
</html>
