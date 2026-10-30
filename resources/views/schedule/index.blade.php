@extends('layouts.app')

@section('title', $title)

@section('content')
    <main class="min-h-screen bg-slate-100 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-8">
                <p class="text-sm font-medium uppercase tracking-wide text-emerald-600">Records</p>
                <h1 class="mt-1 text-3xl font-bold tracking-tight text-slate-900">{{ $title }}</h1>
            </div>

            <x-panel title="All vaccination schedules">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-sm">
                        <thead class="border-b border-slate-200 text-xs uppercase tracking-wide text-slate-500">
                            <tr>
                                <th class="px-4 py-3">#</th>
                                <th class="px-4 py-3">Patient</th>
                                <th class="px-4 py-3">Vaccine</th>
                                <th class="px-4 py-3">Schedule</th>
                                <th class="px-4 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            @forelse ($schedules as $schedule)
                                <tr class="{{ $loop->odd ? 'bg-slate-50' : 'bg-white' }}">
                                    <td class="px-4 py-4 font-medium text-slate-500">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-4">
                                        <p class="font-medium text-slate-900">{{ $schedule->patient_name }}</p>
                                        <p class="text-slate-500">{{ $schedule->purok }}</p>
                                    </td>
                                    <td class="px-4 py-4 text-slate-700">
                                        {{ $schedule->vaccine }} <span class="text-slate-400">({{ $schedule->dose }})</span>
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-4 text-slate-700">
                                        {{ $schedule->scheduled_at->format('M d, Y') }}
                                    </td>
                                    <td class="px-4 py-4">
                                        @unless ($schedule->status === 'Overdue')
                                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">
                                                {{ $schedule->status }}
                                            </span>
                                        @else
                                            <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                Overdue
                                            </span>
                                        @endunless
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-8 text-center text-slate-500">No schedules yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </x-panel>
        </div>
    </main>
@endsection
