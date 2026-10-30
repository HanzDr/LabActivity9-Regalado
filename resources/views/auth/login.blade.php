@extends('layouts.app')

@section('title', 'Sign in')

@section('content')
    <form method="POST" action="{{ route('login.store') }}" class="max-w-sm mx-auto mt-10 space-y-4 p-6 bg-white rounded shadow">
        @csrf

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}"
                   autocomplete="email" required autofocus placeholder="Email"
                   class="w-full rounded border border-slate-300 p-2 placeholder:text-slate-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200">
            @error('email')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                   autocomplete="current-password" required placeholder="Password"
                   class="w-full rounded border border-slate-300 p-2 placeholder:text-slate-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-200">
            @error('password')
                <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full bg-emerald-600 text-white rounded p-2">
            Sign in
        </button>
    </form>
@endsection