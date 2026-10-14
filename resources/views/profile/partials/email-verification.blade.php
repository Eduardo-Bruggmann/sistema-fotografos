@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
    <div class="mt-3">
        <p class="muted">
            Seu endereço de email não está verificado.
            <button form="send-verification" class="text-link">Clique aqui para reenviar o email de verificação.</button>
        </p>
        @if (session('status') === 'verification-link-sent')
            <x-auth-session-status class="mt-2" status="Uma nova verificação foi enviada para seu email." />
        @endif
    </div>
@endif
