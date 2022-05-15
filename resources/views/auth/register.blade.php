<x-guest-layout>

    <div class="register">
        <div class="contain">
            <div class="left"></div>
            <div class="right">
                <div class="formBox">

                    <form method="POST" action="{{ route('register') }}" class="w-75 m-auto mt-5">

                        @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>*{{ $error }}</div>
                                @endforeach
                        @endif

                        @csrf

                        <!-- Name -->
                        <p>Nom complet</p>
                        <input id="name" type="text" name="name" :value="old('name')" required placeholder="Nom complet" />

                        <!-- Email Address -->
                        <p>Adresse email</p>
                        <input id="email" placeholder="Adresse email" type="email" name="email" :value="old('email')" required />


                        <!-- Password -->
                        <p>Mot de passe</p>
                                <input id="password"
                                            type="password"
                                            name="password"
                                            placeholder="Mot de passe"
                                            required autocomplete="new-password" />

                        <!-- Confirm Password -->
                            <p>Confirmez le mot de passe</p>
                            <input id="password_confirmation"type="password"
                                            placeholder="Confirmez le mot de passe"
                                            name="password_confirmation" required />

                            <input type="submit" value="{{ __('Inscription') }}"/>

                            <a href="{{ route('login') }}">
                                {{ __('Vous avez déja un compte ? Connectez vous ') }}
                            </a>


                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</x-guest-layout>
