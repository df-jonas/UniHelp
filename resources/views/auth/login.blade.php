@extends('layouts.website')
@section('pagetitle', 'Login')
@section('content')
    <div class="auth-page">
        <!-- TODO classes goed zetten, name attrituben, routes -->
        <div class="auth-box col-lg-4 col-lg-push-4 col-md-6 col-md-push-6 col-sm-8 col-sm-push-2  col-xs-12">
            <img class="logo" src="img/logo/favicon.png">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="col-xs-12 padding">
                    <div class="form-group clearfix col-xs-12">
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="usernameHelp"
                               placeholder="Gebruikersnaam">
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <input type="password" class="form-control" id="password" name="password"
                               aria-describedby="passwordHelp" placeholder="Wachtwoord">
                        @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <label class="checkbox-container remember col-xs-12">Aangemeld blijven
                            <input type="checkbox" name="remember" value="Aangemeld blijven" class="form-check-input"
                                   checked>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <input type="submit" class="action-button login col-xs-12" value="INLOGGEN">
                    </div>
                    <div class="form-group clearfix col-xs-12">
                        <!-- TODO Jonas: login with canvas -->
                        <!--
                        <input type="submit" class="action-button canvas col-xs-12" value="LOGIN MET CANVAS">
                        -->
                    </div>
                </div>
            </form>
            <footer class="row">
                <a class="text-muted">Wachtwoord vergeten?</a>
            </footer>
        </div>
    </div>
@endsection
