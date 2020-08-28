@extends ('layouts.guest')

@section('content')

<section class="banner"></section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="response"></div>
			<div class="SelectUser market">
				
				<h1>Hello irfanALI,</h1>
				<p>
					Welcome to Shnzo, Choose a State or Region.
				</p>

				<div class="select_user_type">
					<a href="javascript:void(0)" onclick="selectMarket(1)" class="Select">
						<img src="{{ asset('images/india.png') }}">Delhi
					</a>
					<a href="javascript:void(0)" class="Select" data-value="2">
						<img src="{{ asset('images/india.png') }}">Noida
					</a>
					<a href="javascript:void(0)" class="Select" data-value="1">
						<img src="{{ asset('images/india.png') }}">Gurgaon
					</a>
					<a href="javascript:void(0)" class="Select" data-value="2">
						<img src="{{ asset('images/india.png') }}">Faridabad
					</a>
					<a href="javascript:void(0)" class="Select" data-value="1">
						<img src="{{ asset('images/india.png') }}">Uttar Pradesh
					</a>
					<a href="javascript:void(0)" class="Select" data-value="2">
						<img src="{{ asset('images/india.png') }}">Uttrakhand
					</a>
					<a href="javascript:void(0)" class="Select" data-value="1">
						<img src="{{ asset('images/india.png') }}">Bihar
					</a>
					<a href="javascript:void(0)" class="Select" data-value="2">
						<img src="{{ asset('images/india.png') }}">Mumbai
					</a>
				</div>

				<section class="ServiceSection">
					<div class="page-header">
				        <h3>Select Market
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
													<h4>Central Market</h4>
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
													<h4>Sarojni Nagar Market</h4>
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
													<h4>Gandhi Market</h4>
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
													<h4>Karol Bagh Market</h4>
													<a class="btn btn-mini" href="#">» View Products</a>
												</div>
				                            </div>
				                        </li>
				                    </ul>
				          	</div>


				        </div>
					   <!-- /.control-box -->   
				    </div>
				</section>

			</div>
		</div>
	</div>
</div>

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush