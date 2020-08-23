@extends ('layouts.guest')

@section('content')

<div class="container">
	<div class="LogSignBox mobile_verification">
		<div class="row">
		
	      	<form>

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<br>
				<h1>Create Account</h1>

				<label>Name</label>
				<input type="text" placeholder="Enter you name" class="form-control validate[required]" id="name" name="UserName" value="" data-errormessage-value-missing="Please enter your name.">
				
				<label>Email</label>
				<input type="text" placeholder="Enter you email address" class="form-control validate[required, custom[email]]" id="email" name="UserEmail" value="" data-errormessage-value-missing="Please enter your email address." data-errormessage-custom-error="Please enter a valid email address.">

				<p class="terms">By clicking "Create Account", you agree to our <a href="">Terms of Use</a> and <a href="">Privacy Policy</a></p>

				<a class="form-control btn btn-primary" href="{{ route('index') }}">Create Account</a>

			</form>

		</div>
	</div>
</div>

<!-- <div class="container ToLogin">
<center>Already have a Shnzo account? <a href="{{ route('login') }}">Sign in</a></center>
</div> -->

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

@push('styles')
	<style type="text/css">
		i.fa.fa-user{
			font-size: 50px;
			display: block;
		}
	</style>
@endpush