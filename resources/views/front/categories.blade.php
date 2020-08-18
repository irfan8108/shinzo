@extends ('layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 CatLeftBar">

			<div class="PageNavigation">
				<h1>Mens Wear</h1>
				<a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
				<a href="">Apparel</a> <i class="fa fa-angle-right"></i>
				Mens Wear
			</div>

			<div class="col-md-12 row">
				<div id="wrapper">

					<div id="columns">
						
						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta2.jpg') }}" />
								</div>
								<h3>Dhoti Kurta</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/ehram.png') }}" />
								</div>
								<h3>Ehram</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta1.jpg') }}" />
								</div>
								<h3>Kurta</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/ghagracholi.jpg') }}" />
								</div>
								<h3>Lehnga</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/abaya.jpg') }}" />
								</div>
								<h3>Abaya</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/jute.jpg') }}" />
								</div>
								<h3>Saari</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/ehram.png') }}" />
								</div>
								<h3>Ehram</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta.jpg	') }}" />
								</div>
								<h3>Sherwani</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/ehram.png') }}" />
								</div>
								<h3>Ehram</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/jute.jpg') }}" />
								</div>
								<h3>Saari</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta1.jpg') }}" />
								</div>
								<h3>Kurta</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta.jpg	') }}" />
								</div>
								<h3>Sherwani</h3>
							</a>
						</div>

					</div>


				</div>
			</div>

		</div>

	</div>
</div>

@endsection
