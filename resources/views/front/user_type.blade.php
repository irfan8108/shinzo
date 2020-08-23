@extends ('layouts.guest')

@section('content')

<section class="banner"></section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="response"></div>
			<div class="SelectUser">
				

				<h1 class="quotes">Who, are you?</h1>
				<h1 class="quotes">तुम कौन हो?</h1>
				<h1 class="quotes">તમે કોણ છો?</h1>
				<h1 class="quotes">तू कोण आहेस?</h1>

				<div class="select_user_type">
					<a href="{{ route('verification','mobile') }}" class="Select" data-value="1"><img src="{{ asset('images/supplier.png') }}">Customer</a>
					<a href="{{ route('verification','mobile') }}" class="Select" data-value="2"><img src="{{ asset('images/customer.png') }}">Supplier</a>
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