@extends('layouts.main')
@section('header')
<header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </figure>
            <h1 class="animated fadeInDown delay-07s">Tyres Manager Login</h1>
              <form class="form-horizontal" method="POST" action="{{ route('login') }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
            <div class="row">
                 <div class="col-lg-3"></div>
                    <div class="col-lg-6 col-sm-6 text-center">
                        
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                                <input id="email" type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                              <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            
                        </div>

                        <div class="form-group">
                              <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            
                        </div>
                       
                        </div>
                        <div class="col-lg-3"></div>
                  
                        </div> 
                    </form>
           
        </div>
    </header>
    <!--header-end-->
@endsection
