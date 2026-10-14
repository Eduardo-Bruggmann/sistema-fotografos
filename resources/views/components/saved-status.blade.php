@props(['status'])
@if (session('status') === $status)
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="muted" role="status">Salvo.</p>
@endif
