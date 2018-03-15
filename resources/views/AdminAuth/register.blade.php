@extends('layouts.auth')

@section('content')

@include('Adminpages.signupnavbar')
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assetss/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="/signup">
                    @csrf
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/images/logo.svg" alt="">a
                        </div>
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-account-circle"></i>
                        </span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter Email">
                                <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group">
                            <input type="number" class="form-control" name="phone_number" placeholder="Enter Mobile number">
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                        @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" />
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" />
                            <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                        </div>
                    </div>
                    <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">
                           Access for new User</a>
                        </label>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                        <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
                </div>
            </div>
        </footer>
{{--  @include('Adminpages.signupfooter')  --}}

    
@endsection