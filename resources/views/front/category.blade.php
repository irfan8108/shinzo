@extends ('layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 CatLeftBar">
			
			<div class="PageNavigation">
				<h1>Apparel</h1>
				<a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
				Apparel
			</div>

			<div class="">
				<div class="ProductIconCont">
					<a href="{{ route('categories') }}" class="ServiceIcon">
						<span class="IconCont"><img src="{{ asset('images/dhotikurta2.jpg') }}" class="Icon"></span>
						<span class="title">Kid's Wear</span>
					</a>
					<a href="{{ route('categories') }}" class="ServiceIcon">
						<span class="IconCont"><img src="{{ asset('images/dhotikurta.jpg') }}" class="Icon"></span>
						<span class="title">Men's Wear</span>
					</a>
					<a href="{{ route('categories') }}" class="ServiceIcon">
						<span class="IconCont"><img src="{{ asset('images/ghagracholi.jpg') }}" class="Icon"></span>
						<span class="title">Women's Wear</span>
					</a>
				</div>
			</div>
				
		</div>

	</div>
</div>

@endsection
