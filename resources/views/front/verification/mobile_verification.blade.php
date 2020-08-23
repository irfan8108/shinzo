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
					<input id="phone" type="tel" class="form-control">
					<span id="valid-msg" class="hide">Valid</span>
					<span id="error-msg" class="hide">Invalid number</span>
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

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/mobile_verification.css') }}">
	<link href="{{ asset('css/intlTelInput.css') }}" rel="stylesheet" media="screen">
@endpush

@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script> -->
	<script src="{{ asset('js/utils.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/mobile_verification.js') }}"></script>
@endpush