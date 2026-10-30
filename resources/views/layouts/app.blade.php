<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bakuna Tracker')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('dashboard') }}" class="text-lg font-bold text-emerald-700">Bakuna Tracker</a>
            <div class="flex items-center gap-4 text-sm">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-slate-600 hover:text-emerald-700">Dashboard</a>
                    <a href="{{ route('schedule') }}" class="text-slate-600 hover:text-emerald-700">Schedule</a>
                    <span class="hidden text-slate-600 sm:inline">Hi, {{ auth()->user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="font-medium text-red-600 hover:text-red-700">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="font-medium text-emerald-700 hover:text-emerald-800">Sign in</a>
                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="border-t border-slate-200 bg-white px-4 py-6 text-center text-sm text-slate-500">
        Bakuna Tracker &middot; Community vaccination records
    </footer>
</body>
</html>