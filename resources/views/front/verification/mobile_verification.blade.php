@extends ('layouts.guest')

@section('content')

<div class="container">
		<div class="LogSignBox mobile_verification">
			<div class="row">

      		<form>
	      		<center>
	      			<img src="{{ asset('images/mob_verification.png') }}" style="width: 50%">
					<h4>Verify Your Mobile</h4>
					<p>
						Enter your mobile number to verify you.
					</p>
	      		</center>

				<div class="form-group">
					<br>
					<input type="text" placeholder="Mobile Number" class="form-control" focus>
				</div>

				<div class="form-group">
					<!-- <input type="submit" value="Proceed" class="form-control btn btn-primary"> -->
					<a href="{{ route('verification','otp') }}" class="form-control btn btn-primary">Proceed</a>
				</div>

	      	</form>
		</div>
	</div>
</div>

@endsection