@extends ('layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 CatLeftBar">

			<div class="PageNavigation">
				<h1>Dhoti Kurta</h1>
				<a href=""><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
				<a href="{{ route('categories') }}">Apparel</a> <i class="fa fa-angle-right"></i>
				<a href="{{ route('categories') }}">Mens Wear</a> <i class="fa fa-angle-right"></i>
				Dhoti Kurta
			</div>

			<div class="col-md-12 row">
				<div id="wrapper">

					<div id="columns">
						
						<div class="pin">
							<a href="">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta.jpg') }}" />
								</div>
								<h3>Dhoti Kurta</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta1.jpg') }}" />
								</div>
								<h3>Dhoti Kurta 1</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta2.jpg') }}" />
								</div>
								<h3>Dhotikurta 2</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta3.jpg') }}" />
								</div>
								<h3>Dhotikurta 3</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta4.jpg') }}" />
								</div>
								<h3>Dhotikurta 4</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta5.jpg') }}" />
								</div>
								<h3>Dhotikurta 5</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta6.jpg') }}" />
								</div>
								<h3>Dhotikurta 6</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta7.jpg') }}" />
								</div>
								<h3>Dhotikurta 7</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta8.jpg') }}" />
								</div>
								<h3>Dhotikurta 8</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta9.jpg') }}" />
								</div>
								<h3>Dhotikurta9</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta10.jpg') }}" />
								</div>
								<h3>Dhotikurta 10</h3>
							</a>
						</div>

						<div class="pin">
							<a href="{{ route('products') }}">
								<div class="PImage">
									<img src="{{ asset('images/dhotikurta11.jpg	') }}" />
								</div>
								<h3>Dhotikurta 11</h3>
							</a>
						</div>

					</div>


				</div>
			</div>

		</div>


	</div>
</div>

@endsection
