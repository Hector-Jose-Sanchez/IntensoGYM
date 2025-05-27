<x-guest-layout>
    <div class="auth-container">
        <h2>Recuperar contraseña</h2>

        <div class="mb-4 text-sm text-gray-300">
            Ingresá tu email y te enviaremos un enlace para restablecerla.
        </div>

        <x-auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="auth-footer">
                <a href="{{ route('login') }}">Volver</a>
                <button class="auth-button">Enviar enlace</button>
            </div>
        </form>
    </div>
</x-guest-layout>
