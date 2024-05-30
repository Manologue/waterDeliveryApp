{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


{{-- <x-guest-layout>
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
.register-page{
   margin: 9rem 0;
}
</style>

<x-app-layout>
    <section class="vh-100 register-page d-flex justify-content-center">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="d-flex justify-content-center align-items-center col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="post" action="{{ route('register') }}">
                @csrf
                <!-- Email input -->

                <div class="form-outline mb-4">
                    <input value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="Email" :value="old('email')" required />
                    <label class="form-label" for="email">Email</label>
                    @error('email')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <input value="{{ old('name') }}" type="name" name="name" class="form-control" placeholder="Name" :value="old('name')" required  autocomplete="name"/>
                    <label class="form-label" for="name">Name</label>
                    @error('name')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <input value="{{ old('tel') }}" type="tel" name="tel" class="form-control" placeholder="Tel" :value="old('tel')" required />
                    <label class="form-label" for="tel">Tel</label>
                    @error('tel')
                         <p class="text-danger">{{ $message }}</p>
                     @enderror
                  </div>
                  <div class="form-outline mb-4">
                    <select class="form-control" name="utype">
                        <option value="">Select a Role</option>
                        <option value="USR">Customer</option>
                        <option value="SEL">Seller</option>
                    </select>
                    <label class="form-label" for="name">Role Type</label>
                    @error('utype')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                  </div>
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required autocomplete="new-password" />
                  <label class="form-label" for="password">Password</label>
                  @error('password')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-outline mb-3">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required autocomplete="new-password" />
                    <label class="form-label" for="password">Confirm password</label>
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                   @enderror
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                      class="link-danger">Login</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
</x-app-layout>
