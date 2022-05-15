<x-guest-layout>

    <div class="login">
        <div class="contain">
            <div class="left">
            </div>
            <div class="right">
                    <!-- Session Status -->
                <div :status="session('status')" ></div>

                <!-- Validation Errors -->
                <div :errors="$errors" ></div>
                <div class="formBox">

                    <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <p>Adresse email</p>
                            <input id="email" type="email" name="email" :value="old('email')" required placeholder="Example@gmail.com"/>

                            <!-- Password -->
                            <p>Mot de passe</p>
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="**********"/>

                            <input type="submit" value="{{ __('Connexion') }}"/>

                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                            @endif

                            <a href="{{ route('register') }}">
                                Vous n'avez pas de compte ? veuillez vous inscrire
                            </a>
                    </form>

                </div>

            </div>
        </div>

    </div>

</x-guest-layout>
