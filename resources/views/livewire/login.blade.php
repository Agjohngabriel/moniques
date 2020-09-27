<!-- login and register modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        <x-jet-validation-errors class="mb-4" />

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('Email') }}</label>
                        <input type="email" class="form-control" name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="row sub-w3l my-3">
                        <div class="col sub-agile">
                            <input type="checkbox" class="form-checkbox" name="remember">
                            <label for="brand1" class="text-white">
                                <span></span>Remember me?</label>
                        </div>
                        <div class="col forgot-w3l text-right">
                            @if (Route::has('password.request'))
                                <a class="text-white" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Sign In">
                    </div>
                    <p class="text-center dont-do text-white mt-3">Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
                            Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
        <x-jet-validation-errors class="mb-4" />

                <form action="{{route ('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="sub-w3l">
                        <div class="sub-agile">
                            <input type="checkbox" id="brand2" value="">
                            <label for="brand2" class="mb-3">
                                <span></span>I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //login and register modal -->
