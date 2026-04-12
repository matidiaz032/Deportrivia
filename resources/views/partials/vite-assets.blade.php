@php
    $viteHotPath = public_path('hot');
    $viteServer = file_exists($viteHotPath) ? rtrim(file_get_contents($viteHotPath)) : null;
    $entry = null;
    if (! $viteServer) {
        $manifestPath = public_path('build/manifest.json');
        if (! is_file($manifestPath)) {
            throw new \RuntimeException('Falta public/build/manifest.json. Ejecuta: npm install && npm run build');
        }
        $manifest = json_decode(file_get_contents($manifestPath), true);
        $entry = $manifest['resources/js/app.js'] ?? null;
    }
@endphp
@if ($entry && isset($entry['css']))
    @foreach ($entry['css'] as $css)
        <link rel="stylesheet" href="{{ asset('build/'.$css) }}">
    @endforeach
@endif
{{-- Webpack/Vue antiguo primero; Vite (axios auditado) después para sobrescribir window.axios --}}
<script src="{{ asset('js/app.js') }}" defer></script>
@if ($viteServer)
    <script type="module" src="{{ $viteServer }}/@vite/client"></script>
    <script type="module" src="{{ $viteServer }}/resources/js/app.js"></script>
@elseif ($entry)
    <script type="module" src="{{ asset('build/'.$entry['file']) }}"></script>
@endif
