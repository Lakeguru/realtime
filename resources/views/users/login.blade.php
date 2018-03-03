@extends('layouts.users')

@section('content')

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="/signin" method="POST">
            @csrf
            @include('layouts.error')
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control"  name="username" placeholder="Username"  autofocus required>
                        
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"><a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
      </form>
   
    </div>


  </body>


  @endsection
