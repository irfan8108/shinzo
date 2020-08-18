@extends ('layouts.guest')

@section('content')


<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="response"></div>
				<div class="SelectUser">
					<h1>Who, are you ?</h1>
					<a href="{{ route('verification','mobile') }}" class="Select" data-value="1"><img src="{{ asset('images/supplier.png') }}">Supplier</a>
					<a href="{{ route('verification','mobile') }}" class="Select" data-value="2"><img src="{{ asset('images/customer.png') }}">Customer</a>
				</div>
			</div>
		</div>
</div>

@endsection
