<div class="modal fadeInUp probootstrap-animated" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
            <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
                <div class="probootstrap-modal-flex">
                    <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
                        <div class="probootstrap-modal-content">
                            <form action="{{route('login')}}" class="probootstrap-form" method="post">
                                @csrf
                                @method('POST')

                                @if (isset($login))
                                    <p class="text-danger">{{$login}}</p>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control {{ $errors->has('lemail') ? 'is-invalid' : ''}}" placeholder="Email" name="lemail" value="{{ old('lemail') }}" autocomplete="off" autofocus required>
                                    @if ($errors->has('lemail'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('lemail')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control {{ $errors->has('lpassword') ? 'is-invalid' : ''}}" name="lpassword" placeholder="Password" required>
                                    @if ($errors->has('lpassword'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('lpassword')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group clearfix mb40">
                                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                                </div>
                                <div class="form-group text-left">
                                <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary btn-block" value="Sign In">
                                </div>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Can't account ? <span><a href="{{url('register')}}">Sign Up</a></span></p>                                        
                                    </div>
                                </div>
                                {{-- <div class="form-group probootstrap-or">
                                    <span><em>or</em></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{ url('auth/facebook') }}" target="_blank" class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</a>
                                            <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                                            <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                                        </div>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    {{-- SIGN UP  --}}

    <div class="modal fadeInUp probootstrap-animated" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
            <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-cross"></i></button>
                <div class="probootstrap-modal-flex">
                    <div class="probootstrap-modal-figure" style="background-image: url(img/modal_bg.jpg);"></div>
                        <div class="probootstrap-modal-content">
                            <form action="{{route('register')}}" method="post" class="probootstrap-form">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus="true">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" name="password" required >
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('password')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Re-type Password" name="password_confirmation" required>
                                </div>
                                <div class="form-group clearfix mb40">
                                    <label for="remember" class="probootstrap-remember"><input type="checkbox" id="remember"> Remember Me</label>
                                    <a href="#" class="probootstrap-forgot">Forgot Password?</a>
                                </div>
                                <div class="form-group text-left">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-primary btn-block" value="Sign Up">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group probootstrap-or">
                                    <span><em>or</em></span>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                        <button class="btn btn-primary btn-ghost btn-block btn-connect-facebook"><span>connect with</span> Facebook</button>
                                        <button class="btn btn-primary btn-ghost btn-block btn-connect-google"><span>connect with</span> Google</button>
                                        <button class="btn btn-primary btn-ghost btn-block btn-connect-twitter"><span>connect with</span> Twitter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>