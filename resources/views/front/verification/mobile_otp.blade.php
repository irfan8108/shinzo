@extends ('layouts.guest')

@section('content')

<x-guest-header />

<div class="container">

		<div class="LogSignBox mobile_verification">
			<div class="row">

      		<form>
	      		<center>
	      			<img src="{{ asset('images/mobile_otp.png') }}" style="width: 50%">
					<h4>Mobile Verification Code</h4>
					<p>
						Enter 5 digit verification code sent to 8888888888
					</p>
	      		</center>

				<div class="form-group">
					<br>
					<input type="text" placeholder="Enter OTP" class="form-control" focus>
				</div>

				<div class="form-group">
					<a href="{{ route('verification','mobile') }}">Change Number</a>
					<a href="" class="pull-right">Resend OTP</a>
					<br>
				</div>

				<div class="form-group">
					<!-- <input type="submit" value="Verify" class="form-control btn btn-primary"> -->
					<a href="{{ route('index') }}" class="form-control btn btn-primary">Verify</a>
				</div>

	      	</form>
		</div>
	</div>
</div>

@endsection