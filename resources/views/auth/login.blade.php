@extends ('layouts.default')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="LogSignBox">

<div id="status">
</div>
		      	<form>
					<h1>Sign In</h1>

					<div id="response"></div>

					<div class="form-group">
            <label>Email</label>
            <input type="text" placeholder="Email" class="form-control validate[required]" name="UserEmail" id="UserID" data-errormessage-value-missing="Please enter email address.">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" class="form-control validate[required]" name="UserPassword" id="UserPassword" data-errormessage-value-missing="Please enter password.">
          </div>
					<a class="ForgotPass" href="">Forgot password..?</a>					
					<div class="KeepSignIn"><input type="checkbox"> Keep me signed in</div>
					<input  type="submit" value="Log In" class="form-control btn btn-primary">
					<div class="Sep"><img src="images/loginsep.png"></div>
					<a href="" class="SocialLogin"><img src="images/fb.png"></a>
					<a href="" class="SocialLogin Last"><img src="images/gp.png"></a>

					<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>

			      </form>
				</div>
			</div>
		</div>
</div>

<div class="container ToLogin">
	<center>Don't have an account ? <a href="{{ route('register') }}">Create Account</a></center>
</div>

@endsection
