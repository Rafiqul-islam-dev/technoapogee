<x-guest-layout>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mt-0 m-b-15">
                    <a href="index.html" class="logo logo-admin"><img src="{{ asset('image/fontend/img/Logo.svg') }}"
                            height="54" alt="logo" /></a>
                </h3>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <div class="p-3">
                    <form method="POST" action="{{ route('admin.login') }}" class="form-horizontal m-t-20">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="email" name="email" :value="old('email')" required
                                    placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="password" name="password" required
                                    autocomplete="current-password" placeholder="Password" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember_me" />
                                    <label class="custom-control-label"
                                        for="remember_me">{{ __('Remember me') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12"><button
                                    class="btn btn-danger btn-block waves-effect waves-light" type="submit">Log
                                    In</button></div>
                        </div>
                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-sm-7 m-t-20">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted"><i
                                            class="mdi mdi-lock"></i> <small>Forgot your password ?</small></a>
                                @endif
                            </div>
                            <div class="col-sm-5 m-t-20">
                                <a href="pages-register.html" class="text-muted"><i
                                        class="mdi mdi-account-circle"></i> <small>Create an account ?</small></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-guest-layout>
