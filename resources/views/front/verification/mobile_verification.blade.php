@extends ('layouts.guest')

@section('content')

<x-guest-header />

<div class="container">

	<div class="LogSignBox mobile_verification">
		<div class="row">
      		<form action="{{ route('verification', 'otp') }}" method="post" autocomplete="off">
      			@csrf
	      		<center>
	      			<!-- <img src="{{ asset('images/mob_verification.png') }}" style="width: 50%"> -->
	      			<img src="{{ asset('images/whatsapp.png') }}" style="width: 35%">
					<h4>Verify With Whatsapp</h4>
					<p>
						Enter below details to verify you.
					</p>
	      		</center>

	      		<div class="form-group @error('name') has-error @enderror">
	      			<label>Company Name</label>
	      			<input type="text" class="form-control" name="name" placeholder="Company Name" value="{{ old('name') }}">
	      		</div>

				<div class="form-group @error('mobile') has-error @enderror">
					<label>Mobile Number</label>
					<input id="phone" type="tel" class="form-control" name="mobile" value="{{ old('mobile') }}">
					<span id="valid-msg" class="hide">Valid</span>
					<span id="error-msg" class="hide">Invalid number</span>
				</div>

				<div class="form-group">
					<input type="submit" value="Proceed" class="form-control btn btn-primary">
					<!-- <a href="{{ route('verification','otp') }}" class="form-control btn btn-primary">Proceed</a> -->
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