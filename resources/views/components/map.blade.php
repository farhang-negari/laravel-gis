<div x-data="map()">
    <div x-ref="map" class="map h-[600px] border border-slate-300 rounded-md shadow-lg">
    </div>
</div>

@once
    @push('styles')
        <link rel="stylesheet" href="{{ mix('css/map.css') }}">
    @endpush
    @push('scripts')
        <script src="{{ mix('js/map.js') }}"></script>
    @endpush
@endonce