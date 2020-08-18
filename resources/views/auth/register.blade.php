@extends ('layouts.default')

@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="LogSignBox SignUp">
					
			      <form>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<h1>Create Account</h1>

						<a href="" class="SocialLogin"><img src="images/fb.png"></a>
						<a href="" class="SocialLogin pull-right"><img src="images/gp.png"></a>
						<div class="Sep"><img src="images/loginsep.png"></div>

<!-- @if(count($errors))
	<div class="ErrorBox">
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.
			<br/>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif -->						

<!-- <label>Name</label><span class="text-danger">{{ $errors->first('UserName') }}</span>
<input type="text" placeholder="Enter you name" class="form-control" id="name" name="UserName" value="{{ old('UserName') }}">

<label>Email</label><span class="text-danger">{{ $errors->first('UserEmail') }}</span>
<input type="text" placeholder="Enter you email address" class="form-control" id="email" name="UserEmail" value="{{ old('UserEmail') }}">

<label>Password</label><span class="text-danger">{{ $errors->first('UserPassword') }}</span>
<input type="password" placeholder="Choose Password" class="form-control" id="password" name="UserPassword" value="{{ old('UserPassword') }}">

<label>Confirm Password</label><span class="text-danger">{{ $errors->first('UserConfirmPassword') }}</span>
<input type="password" placeholder="Re-Type Password" class="form-control" id="confirm_password" name="UserConfirmPassword"> -->

						<label>Name</label>
						<input type="text" placeholder="Enter you name" class="form-control validate[required]" id="name" name="UserName" value="" data-errormessage-value-missing="Please enter your name.">
						
						<label>Email</label>
						<input type="text" placeholder="Enter you email address" class="form-control validate[required, custom[email]]" id="email" name="UserEmail" value="" data-errormessage-value-missing="Please enter your email address." data-errormessage-custom-error="Please enter a valid email address.">

						<label>Password</label>
						<input type="password" placeholder="Choose Password" class="form-control validate[required]" id="password" name="UserPassword" value="" data-errormessage-value-missing="Please create your password.">

						<label>Confirm Password</label>
						<input type="password" placeholder="Re-Type Password" class="form-control validate[required]" id="confirm_password" name="UserConfirmPassword" data-errormessage-value-missing="Please re-type password.">

						<div id="response"></div>

						<p class="terms">By clicking "Create Account", you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>
					
						<!-- <input type="submit" value="Create Account" class="form-control btn btn-primary"> -->

						<a class="form-control btn btn-primary" href="{{ route('user_type') }}">Create Account</a>

					</form>

				</div>
			</div>
		</div>
</div>

<div class="container ToLogin">
<center>Already have a Shnzo account? <a href="{{ route('login') }}">Sign in</a></center>
</div>

<script type="text/javascript">
        window.onbeforeunload = function () {
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type == "button" || inputs[i].type == "submit") {
                    inputs[i].disabled = true;
                    inputs[i].text = 'Please wait...';
                }
            }
        };
</script>

@endsection
