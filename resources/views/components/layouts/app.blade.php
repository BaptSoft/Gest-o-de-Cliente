<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</x-layouts.app.sidebar>


