@extends ('layouts.default')

@section('content')


<!-- Start Banner Section -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<div class="LeftMenu">
					<ul>
						<li class="Heading"><i class="fa fa-list"></i>Market Place</li>
						<li><a href="{{ route('category') }}"><i class="fa fa-caret-right"></i>Apparels & Fashion</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 2</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 3</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 4</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 5</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 6</a></li>
						<li><a href=""><i class="fa fa-caret-right"></i>Product Category 7</a></li>
						<li class="Last"><a href=""><i class="fa fa-caret-right"></i>More..<i class="fa fa-angle-right Way"></i><div class="LeftSubEntry"></div></a>
							<ul class="LeftSubMenu">
								<li><a href="{{ route('category') }}"><i class="fa fa-caret-right"></i>Men's Wear</a></li>
								<li><a href="{{ route('category') }}"><i class="fa fa-caret-right"></i>Women's Wear</a></li>
								<li><a href="{{ route('category') }}"><i class="fa fa-caret-right"></i>Kids Wear</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
			</div>

			<div class="col-md-9 Slider">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      <li data-target="#myCarousel" data-slide-to="3"></li>
				      <li data-target="#myCarousel" data-slide-to="4"></li>
				    </ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

						<div class="item active">
							<img src="{{ asset('images/slider/slide1.jpg') }}" alt="" style="width:100%;">
						</div>

						<div class="item">
							<img src="{{ asset('images/slider/slide2.jpg') }}" alt="" style="width:100%;">
						</div>

						<div class="item">
							<img src="{{ asset('images/slider/slide3.jpg') }}" alt="" style="width:100%;">
						</div>

						<div class="item">
							<img src="{{ asset('images/slider/slide4.jpg') }}" alt="" style="width:100%;">
						</div>

						<div class="item">
							<img src="{{ asset('images/slider/slide5.jpg') }}" alt="" style="width:100%;">
						</div>
					</div>
		  		</div>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Section -->

<!-- Start Featured Seller -->
<section class="ServiceSection">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			    <div class="page-header">
			        <h3>Featured Sellers
				   <nav>
						<ul class="control-box pager">
							<li><a data-slide="prev" href="#myServiceCarousel" class=""><i class="fa fa-chevron-left"></i></a></li>
							<li><a data-slide="next" href="#myServiceCarousel" class=""><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</nav>
					</h3>
			    </div>
			        
		    	<div class="carousel slide services" id="myServiceCarousel">
			        <div class="carousel-inner">
			            <div class="item active">
			                    <ul class="thumbnails">
			                        <li class="col-sm-3">
			    						<div class="fff">
											<div class="thumbnail">
											<a href="#"><img src="{{ asset('images/seller/seller1.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>All-In Garments House</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller1.jpeg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Redico Fabric Service</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Festo Wears</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller2.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Fasion Wear International</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                    </ul>
			          	</div>

			          	<div class="item">
			                    <ul class="thumbnails">
			                        <li class="col-sm-3">
			    						<div class="fff">
											<div class="thumbnail">
											<a href="#"><img src="{{ asset('images/seller/seller1.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>All-In Garments House</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller1.jpeg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Redico Fabric Service</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Festo Wears</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                        <li class="col-sm-3">
										<div class="fff">
											<div class="thumbnail">
												<a href="#"><img src="{{ asset('images/seller/seller2.jpg') }}" alt=""></a>
											</div>
											<div class="caption">
												<h4>Fasion Wear International</h4>
												<p>Nullam Condimentum Nibh Etiam Sem</p>
												<a class="btn btn-mini" href="#">» View Products</a>
											</div>
			                            </div>
			                        </li>
			                    </ul>
			          	</div>

			        </div>
				   <!-- /.control-box -->   
			    </div>

			</div> 
		</div> 
	</div>
</section>
<!-- End Featured Seller -->


<section>
	<div class="container">
		<div class="row">
			<div class="">
				<a href="">
					<img src="{{ asset('images/banner-lising.jpg') }}" style="max-width: 100%">
				</a>
			</div>
		</div>
	</div>
</section>

@endsection