@extends ('layouts.guest')

@section('content')

<x-guest-header />

<section class="banner"></section>

<div class="container">
	
	<div class="row">
		<div class="col-md-12">
			<center>
				<h1 class="heading">Hello {{ session()->get('role_name') }},</h1>
				<p class="heading">
					Welcome to Shnzo, Choose a State or Region.
				</p>
			</center>

		</div>

		<div class="SelectUser city">
			<div class="col-md-12">
				<div class="select_user_type">
					@foreach($cities as $value)
						<a href="javascript:void(0)" class="selectCity" onclick="getMarkets({{ $value->id }}, '{{ $value->name }}')">
							<img src="{{ asset('images/india.png') }}">{{ $value->name }}
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div id="markets"></div>
		<div class="SelectUser market" id="cityMarkets"></div>
	</div>

</div>

@endsection

@push('styles')
@endpush

@push('scripts')
<script type="text/javascript">
	function getMarkets(cityID, marketName){
		// SET THE MARKET HEADING
		heading = "<div class='col-md-12'><center><h2 class='heading'>Markets at "+marketName+"</h2></center></div>";
		document.getElementById('markets').innerHTML = heading;

		// GET/SET MARKETs
		ajax("getMarkets/"+cityID+"/1", "GET", loadMarkets);
	}

	function loadMarkets(result){
		markets = "";
		for (var a = 0; a < 2; a++) {
			for(var i = 0; i < result.data.length; i++) {
				markets += "<div class='select_market'><a href='"+window.origin+"/welcome/"+result.data[i].id+"/"+result.data[i].name+"'><img src='"+window.origin+"/images/uploads/"+result.data[i].image+"' alt=''>"+result.data[i].name+"</a></div>";
			}
		}
		document.getElementById('cityMarkets').innerHTML = markets;
		location.href = "#markets";
	}

</script>
@endpush