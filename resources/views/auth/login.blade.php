{{--
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<style>
    section: {
       margin: 5rem 0;
       height : 1rem;
    }
</style>

<x-app-layout>
    <section class="vh-100 d-flex justify-content-center">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="post" action="{{ route('login') }}">
                    @if (Session::has('failure'))
                                <div class="alert alert-danger">
                                    <strong>Failure | {{ Session::get('failure') }}</strong>
                                </div>
                    @endif
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control"
                    placeholder="Enter email address" :value="old('email')" required autofocus/>
                  <label class="form-label" for="email">Email address</label>
                  @error('email')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>


                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" class="form-control "
                    placeholder="Enter password" required autocomplete="current-password" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" name="remember" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="remember">
                      Remember me
                    </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                      class="link-danger">Register</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>
