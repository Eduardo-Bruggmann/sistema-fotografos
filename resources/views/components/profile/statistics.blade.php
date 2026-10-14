@props(['user'])

<x-panel>
    <h2 class="text-lg font-medium tracking-tight">Sua atividade</h2>
    <dl class="mt-4 grid grid-cols-2 gap-6">
        <div>
            <dt class="muted">Publicações</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight">{{ $user->photos_count }}</dd>
        </div>
        <div>
            <dt class="muted">Curtidas recebidas</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight">{{ $user->received_likes_count }}</dd>
        </div>
    </dl>
</x-panel>
