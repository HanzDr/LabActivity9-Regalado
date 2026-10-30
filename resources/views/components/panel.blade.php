@props(['title'])

<section {{ $attributes->merge(['class' => 'overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200']) }}>
    <div class="border-b border-slate-200 px-5 py-4">
        <h2 class="text-lg font-semibold text-slate-900">{{ $title }}</h2>
    </div>
    <div class="p-5">
        {{ $slot }}
    </div>
</section>
