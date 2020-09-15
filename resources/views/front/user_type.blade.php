@extends ('layouts.guest')

@section('content')

<x-guest-header selectUser="true" />

<section class="banner"></section>

<div class="container">
	<div class="row">

		<div class="col-md-12 text-center">
			<h1 class="quotes heading">Who, are you?</h1>
			<h1 class="quotes heading">आप कौन हैं?</h1>
			<h1 class="quotes heading">તમે કોણ છો?</h1>
			<h1 class="quotes heading">तू कोण आहेस?</h1>
		</div>

		<div class="col-md-12">
			<div class="SelectUser">
				
				<div class="select_user_type">
					<a href="{{ route('select', ['user', 's']) }}" class="Select" data-value="2"><img src="{{ asset('images/supplier.png') }}">Supplier</a>
					<a href="{{ route('select', ['user', 'b']) }}" class="Select" data-value="1"><img src="{{ asset('images/customer.png') }}">Customer</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style type="text/css">
	.quotes {display: none;}
</style>
@endpush

@push('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
	(function() {

	  var quotes = $(".quotes");
	  var quoteIndex = -1;

	  function showNextQuote() {
	    ++quoteIndex;
	    quotes.eq(quoteIndex % quotes.length)
	      .fadeIn(2000)
	      .delay(2000)
	      .fadeOut(2000, showNextQuote);
	  }

	  showNextQuote();

	})();
</script>
@endpush