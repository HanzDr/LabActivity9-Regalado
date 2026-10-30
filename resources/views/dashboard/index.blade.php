@extends('layouts.app')

@section('title', $title)

@section('content')
    <main class="min-h-screen bg-slate-100 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-8">
                <p class="text-sm font-medium uppercase tracking-wide text-emerald-600">Vaccination dashboard</p>
                <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">{{ $title }}</h1>
            </div>

            <section class="grid grid-cols-1 gap-4 md:grid-cols-4">
                @foreach ($stats as $stat)
                    <x-stat-card :title="$stat['label']" :value="$stat['value']" />
                @endforeach
            </section>

            <x-panel title="Alerts" class="mt-8">
                @if ($alerts->isNotEmpty())
                    <div class="rounded-lg border border-red-200 bg-red-50 p-4 text-red-900">
                        {{ $alerts->count() }} overdue vaccination{{ $alerts->count() === 1 ? '' : 's' }} need attention.
                    </div>
                @elseif ($outOfStockVaccine)
                    <div class="rounded-lg border border-amber-200 bg-amber-50 p-4 text-amber-900">
                        {{ $outOfStockVaccine->vaccine }} is currently out of stock.
                    </div>
                @else
                    <div class="rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-emerald-900">
                        All clear. No vaccination alerts right now.
                    </div>
                @endif
            </x-panel>

            <x-panel title="Upcoming schedule" class="mt-8">
                <a href="{{ route('schedule') }}" class="text-sm font-medium text-emerald-700 hover:text-emerald-800">
                    View full schedule
                </a>
            </x-panel>
        </div>
    </main>
@endsection
